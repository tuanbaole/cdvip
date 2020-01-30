<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
/**
 * Quanlys Controller
 *
 * @property \App\Model\Table\QuanlysTable $Quanlys
 *
 * @method \App\Model\Entity\Quanly[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuanlysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Kieudonglais', 'Taisans','Donglais'],
            'order' => ['modified' => 'DESC']
        ];
        $quanlys = $this->paginate($this->Quanlys);

        $current_user = $this->get_current_user();
        $users[$current_user['id']] = $current_user['id'];
        
        $kieudonglais = $this->Quanlys->Kieudonglais->find('list', [
            'keyField' => 'id',
            'valueField' => 'ten_kieu_dong_lai',
            'limit' => 200
        ]);

        $taisans = $this->Quanlys->Taisans->find('list', [
            'keyField' => 'id',
            'valueField' => 'loai_tai_san',
            'limit' => 200
        ]);
       
        $this->set(compact('quanlys','users','kieudonglais','taisans'));
    }

    /**
     * View method
     *
     * @param string|null $id Quanly id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quanly = $this->Quanlys->get($id, [
            'contain' => ['Kieudonglais', 'Taisans']
        ])->toArray();

        $this->set('quanly', $quanly);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quanly = $this->Quanlys->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $kieudonglai = $this->Quanlys->Kieudonglais->findById($data['kieudonglai_id'])
                ->select(['id','ten_kieu_dong_lai','dang_lai','tinh_lai','he_so'])
                ->toArray();

            $data['ngay_sinh'] = $this->replace_ngay($data['ngay_sinh_kh']);
            $data['ngay_cap'] = $this->replace_ngay($data['ngay_cap_kh']);
            $data['thoi_gian_ket_thuc_vay'] = $data['thoi_gian_bat_dau_vay'];
            $ngay_bat_dau_tra = $data['thoi_gian_bat_dau_vay'];
            $data['thoi_gian_bat_dau_vay'] = $this->replace_ngay($data['thoi_gian_bat_dau_vay']);
            $ngay_bat_dau_tra = $this->replace_ngay($ngay_bat_dau_tra);

            $kieu_tinhlai = 'days';
            $so_ngay_vay = $data['so_ngay_vay'];
            $heso_ky_dong_lai = $data['ky_dong_lai'];
            if ($kieudonglai[0]->tinh_lai == 1) {
                $kieu_tinhlai = 'days';
                $so_ngay_vay = $data['so_ngay_vay'] * 7;
                $heso_ky_dong_lai  = $heso_ky_dong_lai * 7;
            } else if($kieudonglai[0]->tinh_lai == 2){
                $kieu_tinhlai = 'months';
            }

            if ($data['ky_dong_lai'] <= 0) {
                $data['ky_dong_lai'] = 1;
            }

            $thoi_gian_ket_thuc_vay = $this->replace_ngay($data['thoi_gian_ket_thuc_vay']);
            $data['thoi_gian_ket_thuc_vay'] = $thoi_gian_ket_thuc_vay->modify('+'.$so_ngay_vay.' '.$kieu_tinhlai);

            $data['so_tien_vay'] = (int)str_replace( ',', '',$data['so_tien_vay']);
            $data['lai_xuat_ngay'] = (int)str_replace( ',', '',$data['lai_xuat_ngay']);
            $data['user_id'] = $this->get_current_user()['id'];
            $data['img'] = 'khonganh';
            $data['img_tai_san'] = 'khonganh';

            $lai_xuat_mot_lan = 0;
            if ($kieudonglai[0]->dang_lai == 1) {
                if ($kieudonglai[0]->he_so == 1) {
                    $lai_xuat_mot_lan = $data['ky_dong_lai'] * $data['lai_xuat_ngay'] * ($data['so_tien_vay']/1000000);
                } else {
                    $lai_xuat_mot_lan = $data['ky_dong_lai'] * $data['lai_xuat_ngay'];
                }
            } else {
                $lai_xuat_mot_lan = $data['ky_dong_lai'] * ($data['lai_xuat_ngay']/100) * $data['so_tien_vay'];
            }

            $so_tien_tra_lan_cuoi_cung = $lai_xuat_mot_lan;
            if ($data['so_ngay_vay']%$data['ky_dong_lai'] != 0) {
                $so_tien_tra_lan_cuoi_cung = ($data['so_ngay_vay']%$data['ky_dong_lai'])/$data['ky_dong_lai'] * $lai_xuat_mot_lan;
            }

            $quanly = $this->Quanlys->patchEntity($quanly, $data);
            if ($quanly_save = $this->Quanlys->save($quanly)) {
                $this->Flash->success(__('Tạo hợp đồng thành công.'));
                $so_lan_dong_lai = ceil($data['so_ngay_vay']/$data['ky_dong_lai']); // lam tron len de tinh cho lan tra cuoi cung neu chia khong het

                if ($data['kieu_dong_lai'] == 1) { // neu kieu dong la 0 ngay tra la ngay bat dau
                    $startI = 1;
                } else {
                    $startI = 0;
                }
                $donglai_save = [];
                for ($i=$startI; $i <= $so_lan_dong_lai; $i++) { 
                    $donglai_save[$i]['ho_ten'] = $data['ho_ten'];
                    if ($i == $so_lan_dong_lai) {
                        $donglai_save[$i]['tien_lai']  = $so_tien_tra_lan_cuoi_cung;
                        if ($data['so_ngay_vay']%$data['ky_dong_lai'] != 0) {
                            $heso_ky_dong_lai = $data['so_ngay_vay']%$data['ky_dong_lai'];
                        }
                    } else {
                       $donglai_save[$i]['tien_lai']  = $lai_xuat_mot_lan; 
                    }
                    $donglai_save[$i]['phi_khac']  = 0;
                    $donglai_save[$i]['ngay_tra']  = date("Y-m-d", strtotime($ngay_bat_dau_tra->modify('+'.$heso_ky_dong_lai.' '.$kieu_tinhlai)));
                    $donglai_save[$i]['quanly_id'] = $quanly_save['id'];
                    $donglai_save[$i]['user_id']   = $data['user_id'];
                }
                $donglai_model = TableRegistry::get('Donglais');
                $donglai_datasave = $donglai_model->newEntities($donglai_save);
                $result = $donglai_model->saveMany($donglai_datasave);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Không thể tạo hợp đồng. Hãy thử lại.'));
        }

        $current_user = $this->get_current_user();
        $users[$current_user['id']] = $current_user['id'];
        
        $kieudonglais = $this->Quanlys->Kieudonglais->find('list', [
            'keyField' => 'id',
            'valueField' => 'ten_kieu_dong_lai',
            'limit' => 200
        ]);

        $taisans = $this->Quanlys->Taisans->find('list', [
            'keyField' => 'id',
            'valueField' => 'loai_tai_san',
            'limit' => 200
        ]);

        $this->set(compact('quanly', 'users', 'kieudonglais', 'taisans'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Quanly id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quanly = $this->Quanlys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            /****/
            $kieudonglai = $this->Quanlys->Kieudonglais->findById($data['kieudonglai_id'])
                ->select(['id','ten_kieu_dong_lai','dang_lai','tinh_lai','he_so'])
                ->toArray();

            $data['ngay_sinh'] = $this->replace_ngay($data['ngay_sinh_kh']);
            $data['ngay_cap'] = $this->replace_ngay($data['ngay_cap_kh']);
            $data['thoi_gian_ket_thuc_vay'] = $data['thoi_gian_bat_dau_vay'];
            $ngay_bat_dau_tra = $data['thoi_gian_bat_dau_vay'];
            $data['thoi_gian_bat_dau_vay'] = $this->replace_ngay($data['thoi_gian_bat_dau_vay']);
            $ngay_bat_dau_tra = $this->replace_ngay($ngay_bat_dau_tra);

            $kieu_tinhlai = 'days';
            $so_ngay_vay = $data['so_ngay_vay'];
            $heso_ky_dong_lai = $data['ky_dong_lai'];
            if ($kieudonglai[0]->tinh_lai == 1) {
                $kieu_tinhlai = 'days';
                $so_ngay_vay = $data['so_ngay_vay'] * 7;
                $heso_ky_dong_lai  = $heso_ky_dong_lai * 7;
            } else if($kieudonglai[0]->tinh_lai == 2){
                $kieu_tinhlai = 'months';
            }

            if ($data['ky_dong_lai'] <= 0) {
                $data['ky_dong_lai'] = 1;
            }

            $thoi_gian_ket_thuc_vay = $this->replace_ngay($data['thoi_gian_ket_thuc_vay']);
            $data['thoi_gian_ket_thuc_vay'] = $thoi_gian_ket_thuc_vay->modify('+'.$so_ngay_vay.' '.$kieu_tinhlai);

            $data['so_tien_vay'] = (int)str_replace( ',', '',$data['so_tien_vay']);
            $data['lai_xuat_ngay'] = (int)str_replace( ',', '',$data['lai_xuat_ngay']);
            $data['user_id'] = $this->get_current_user()['id'];
            $data['img'] = 'khonganh';
            $data['img_tai_san'] = 'khonganh';

            $lai_xuat_mot_lan = 0;
            if ($kieudonglai[0]->dang_lai == 1) {
                if ($kieudonglai[0]->he_so == 1) {
                    $lai_xuat_mot_lan = $data['ky_dong_lai'] * $data['lai_xuat_ngay'] * ($data['so_tien_vay']/1000000);
                } else {
                    $lai_xuat_mot_lan = $data['ky_dong_lai'] * $data['lai_xuat_ngay'];
                }
            } else {
                $lai_xuat_mot_lan = $data['ky_dong_lai'] * ($data['lai_xuat_ngay']/100) * $data['so_tien_vay'];
            }

            $so_tien_tra_lan_cuoi_cung = $lai_xuat_mot_lan;
            if ($data['so_ngay_vay']%$data['ky_dong_lai'] != 0) {
                $so_tien_tra_lan_cuoi_cung = ($data['so_ngay_vay']%$data['ky_dong_lai'])/$data['ky_dong_lai'] * $lai_xuat_mot_lan;
            }
            /****/

            $quanly = $this->Quanlys->patchEntity($quanly, $data);
            if ($this->Quanlys->save($quanly)) {
                $this->Flash->success(__('Thay đổi hợp đồng thành công'));
                 $so_lan_dong_lai = ceil($data['so_ngay_vay']/$data['ky_dong_lai']); // lam tron len de tinh cho lan tra cuoi cung neu chia khong het

                if ($data['kieu_dong_lai'] == 1) { // neu kieu dong la 0 ngay tra la ngay bat dau
                    $startI = 1;
                } else {
                    $startI = 0;
                }
                $donglai_save = [];
                for ($i=$startI; $i <= $so_lan_dong_lai; $i++) { 
                    $donglai_save[$i]['ho_ten'] = $data['ho_ten'];
                    if ($i == $so_lan_dong_lai) {
                        $donglai_save[$i]['tien_lai']  = $so_tien_tra_lan_cuoi_cung;
                        if ($data['so_ngay_vay']%$data['ky_dong_lai'] != 0) {
                            $heso_ky_dong_lai = $data['so_ngay_vay']%$data['ky_dong_lai'];
                        }
                    } else {
                       $donglai_save[$i]['tien_lai']  = $lai_xuat_mot_lan; 
                    }
                    $donglai_save[$i]['phi_khac']  = 0;
                    $donglai_save[$i]['ngay_tra']  = date("Y-m-d", strtotime($ngay_bat_dau_tra->modify('+'.$heso_ky_dong_lai.' '.$kieu_tinhlai)));
                    $donglai_save[$i]['quanly_id'] = $id;
                    $donglai_save[$i]['user_id']   = $data['user_id'];
                }
                $donglai_model = TableRegistry::get('Donglais');
                $this->loadModel('Donglais');
                $this->Donglais->deleteAll(['Donglais.quanly_id' => $id]);
                $donglai_datasave = $donglai_model->newEntities($donglai_save);
                $result = $donglai_model->saveMany($donglai_datasave);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Không thể thay đổi được hợp đồng. vui lòng thử lại'));
        }

        $current_user = $this->get_current_user();
        $users[$current_user['id']] = $current_user['id'];
        
        $kieudonglais = $this->Quanlys->Kieudonglais->find('list', [
            'keyField' => 'id',
            'valueField' => 'ten_kieu_dong_lai',
            'limit' => 200
        ]);

        $taisans = $this->Quanlys->Taisans->find('list', [
            'keyField' => 'id',
            'valueField' => 'loai_tai_san',
            'limit' => 200
        ]);
        $this->set(compact('quanly', 'users', 'kieudonglais', 'taisans'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quanly id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'delete']);
        $quanly = $this->Quanlys->get($id);
        if ($this->Quanlys->delete($quanly)) {
            $this->Flash->success(__('Bạn vừa xóa hợp đồng thành công'));
        } else {
            $this->Flash->error(__('Không thể xóa hợp đồng. vui lòng thử lại'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function giahanform() {
        $this->request->allowMethod(['ajax']);
        $data = $this->request->query();
        $this->set(compact('data'));
    }

    public function themthoigianlai() {
        $this->request->allowMethod(['ajax']);
        $this->autoRender = false;
        $data = $quanly_id = $this->request->query();
        $quanly = $this->Quanlys->find('all',[
                'conditions' => [
                    'Quanlys.id ' => $data['quanly_id']
                ],
                'contain' => ['Kieudonglais']
            ])
            ->first()
            ->toArray();
        $this->loadModel("Donglais");

        $donglaiend = $this->Donglais->find('all')
                ->select('ngay_tra')
                ->where([
                    'Donglais.quanly_id ' => $data['quanly_id'],
                    'Donglais.user_id' => $quanly['user_id'],
                ])
                ->order('ngay_tra DESC')
                ->first()
                ->toArray();

        $ngay_bat_dau_tra = new Time($donglaiend['ngay_tra']);

        $kieu_tinhlai = 'days';
        $so_ngay_vay = $quanly['so_ngay_vay'];
        $heso_ky_dong_lai = $quanly['ky_dong_lai'];
        if ($quanly['kieudonglai']['tinh_lai'] == 1) {
            $kieu_tinhlai = 'days';
            $so_ngay_vay = $quanly['so_ngay_vay'] * 7;
            $heso_ky_dong_lai  = $heso_ky_dong_lai * 7;
        } else if($quanly['kieudonglai']['tinh_lai'] == 2){
            $kieu_tinhlai = 'months';
        }

        if ($quanly['ky_dong_lai'] <= 0) {
            $quanly['ky_dong_lai'] = 1;
        }

        $lai_xuat_mot_lan = 0;
        if ($quanly['kieudonglai']['dang_lai'] == 1) {
            if ($quanly['kieudonglai']['he_so'] == 1) {
                $lai_xuat_mot_lan = $quanly['ky_dong_lai'] * $quanly['lai_xuat_ngay'] * ($quanly['so_tien_vay']/1000000);
            } else {
                $lai_xuat_mot_lan = $quanly['ky_dong_lai'] * $quanly['lai_xuat_ngay'];
            }
        } else {
            $lai_xuat_mot_lan = $quanly['ky_dong_lai'] * ($quanly['lai_xuat_ngay']/100) * $quanly['so_tien_vay'];
        }

        $so_tien_tra_lan_cuoi_cung = $lai_xuat_mot_lan;
        if ($quanly['so_ngay_vay']%$quanly['ky_dong_lai'] != 0) {
            $so_tien_tra_lan_cuoi_cung = ($quanly['so_ngay_vay']%$quanly['ky_dong_lai'])/$quanly['ky_dong_lai'] * $lai_xuat_mot_lan;
        }

        $so_lan_dong_lai = ceil($data['thoigiandonglai']/$quanly['ky_dong_lai']); // lam tron len de tinh cho lan tra cuoi cung neu chia khong het

        $donglai_save = [];
        for ($i=0; $i < $so_lan_dong_lai; $i++) { 
            $donglai_save[$i]['ho_ten'] = $quanly['ho_ten'];
            if ($i == $so_lan_dong_lai) {
                $donglai_save[$i]['tien_lai']  = $so_tien_tra_lan_cuoi_cung;
                if ($data['so_ngay_vay']%$data['ky_dong_lai'] != 0) {
                    $heso_ky_dong_lai = $data['thoigiandonglai']%$quanly['ky_dong_lai'];
                }
            } else {
               $donglai_save[$i]['tien_lai']  = $lai_xuat_mot_lan; 
            }
            $donglai_save[$i]['phi_khac']  = 0;
            $donglai_save[$i]['ngay_tra']  = date("Y-m-d", strtotime($ngay_bat_dau_tra->modify('+'.$heso_ky_dong_lai.' '.$kieu_tinhlai)));
            $donglai_save[$i]['quanly_id'] = $quanly['id'];
            $donglai_save[$i]['user_id']   = $quanly['user_id'];
        }    

        $donglai_model = TableRegistry::get('Donglais');
        $donglai_datasave = $donglai_model->newEntities($donglai_save);
        $result = $donglai_model->saveMany($donglai_datasave);
    }

    public function thanhtoanhopdong(){
        $this->request->allowMethod(['ajax']);
        $data = $this->request->query();
        $this->set(compact('data'));
    }

    public function thaydoitrangthai(){
        $this->request->allowMethod(['ajax']);
        $this->autoRender = false;

        $data = $this->request->query();

        $quanlyTable = TableRegistry::get('Quanlys');
        $quanly = $quanlyTable->get($data['quanly_id']);
        $quanly->tinh_trang = $data['trang_thai'];
        if ($quanlyTable->save($quanly)) {
            echo __("thay đổi trạng thái vay thành công");
        } else {
            echo __("không thành công");
        }
    }


}
