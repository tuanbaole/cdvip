<div class="x_panel">
    <div class="x_title head_setting">
        <h2><small><?= __('Quản Lý Tài Khoản') ?></small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li class="dropdown-mv">
                <a href="#" class="color-black" data-toggle="modal" data-target="#hd_popup" id="them-hop-dong">
                    <i class="glyphicon glyphicon-plus"></i> <?= __('Thêm Mới') ?>
                </a>
            </li>
            <?php if (!empty($quanlys->toArray())): ?>
                <li class="dropdown-mv" data-toggle="modal" data-target="#hd_popup" id="sua-hop-dong">
                    <a href="#" class="color-black"><i class="fa fa-edit"></i> <?= __('Sửa') ?></a>
                </li>
                <li class="dropdown-mv" id="xoa-hop-dong">
                    <a href="#" class="color-black"><i class="fa fa-trash"></i> <?= __('Xóa') ?></a>
                </li>
                <li class="dropdown-mv" id="dong-lai"  data-toggle="modal" data-target="#donglai_popup">
                    <a href="#" class="color-black"><i class="fa fa-credit-card"></i> <?= __('Đóng Lãi') ?></a>
                </li>
                <li class="dropdown-mv" id="thanh-toan" data-toggle="modal" data-target="#thanhtoan_popup">
                    <a href="#" class="color-black"><i class="fa fa-recycle"></i> <?= __('Thanh Toán') ?></a>
                </li>
                <li class="dropdown-mv" id="gia-han" data-toggle="modal" data-target="#giahan_popup">
                    <a href="#" class="color-black"><i class="fa fa-file-text-o"></i> <?= __('Gia Hạn') ?></a>
                </li>
                <li class="dropdown-mv">
                    <a href="#" class="color-black"><i class="fa fa-money"></i> <?= __('Trả Bớt') ?></a>
                </li>
                <li class="dropdown-mv">
                    <a href="#" class="color-black"><i class="fa fa-dollar"></i> <?= __('Vay Thêm') ?></a>
                </li>
            <?php endif ?>
            
            <li class="dropdown-mv">
                <a href="#" class="dropdown-toggle-mv btn btn-success timkiem color-white">
                    <i class="glyphicon glyphicon-search"></i><?= __('Tìm Kiếm') ?>
                </a>
          </li>
      </ul>
      <div class="clearfix">
      </div>
  </div>
  <div class="x_content">
        <div id="datatable_wrapper" class="table-responsive">
                <table class="table table-bordered jambo_table" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                    <thead>
                        <tr role="row">
                            <th style="min-width: 150px;width: 150px;" class="text-th-kh text-center"><?= $this->Paginator->sort('ho_ten',__('Họ và tên')) ?></th>
                            <th style="min-width: 30px;width: 30px;" class="text-th-kh text-center">
                                <span class="text-color-th"><?= __('Thu Lãi') ?></span>
                            </th>
                            <th style="min-width: 120px;width: 120px;" class="text-th-kh text-center"><?= $this->Paginator->sort('thoi_gian_bat_dau_vay',__('Thời Gian')) ?></th>
                            <th style="min-width: 250px;width: 250px;" class="text-th-kh text-right"><?= $this->Paginator->sort('so_tien_vay',__('Số Tiền Vay')) ?></th>
                            <th style="min-width: 270px;width: 270px;" class="text-th-kh text-right">
                                <span class="text-color-th"><?= __("Lãi Xuất") ?></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $today = date("Y-m-d"); $created_today = date_create($today);  ?>
                        <?php if (!empty($quanlys->toArray())): ?>
                            <?php foreach ($quanlys as $keyql => $quanly): ?>
                                <?php 
                                    $tonglai_quanlys = $this->Func->tinhtong($quanly->so_ngay_vay,$quanly->kieudonglai->tinh_lai,$quanly->lai_xuat_ngay,$quanly->kieudonglai->dang_lai,$quanly->kieudonglai->he_so,$quanly->so_tien_vay);
                                    $thoi_gian_bat_dau_vay = date("Y-m-d", strtotime(h($quanly->thoi_gian_bat_dau_vay)));
                                    $thoi_gian_ket_thuc_vay = date("Y-m-d", strtotime(h($quanly->thoi_gian_ket_thuc_vay)));  
                                    $date1=date_create($thoi_gian_bat_dau_vay);
                                    $date2=date_create($thoi_gian_ket_thuc_vay);
                                    $diff=date_diff($date1,$date2);
                                    $thoigianlai = date_diff($date1,$created_today);
                                    $laiden_homnay = $thoigianlai->format("%a")/$diff->format("%a") * $tonglai_quanlys;
                                ?>
                                <tr class="time-style <?= ($keyql==0) ? 'hight-ye' : '' ?>" data-id="<?= h($quanly->id) ?>" data-quanly='<?= json_encode($quanly); ?>' data-ngaysinh="<?= date("d/m/Y", strtotime(h($quanly->ngay_sinh))); ?>" data-ngaycap="<?= date("d/m/Y", strtotime(h($quanly->ngay_cap))); ?>" data-ngayvay="<?= date("d/m/Y", strtotime(h($quanly->thoi_gian_bat_dau_vay))); ?>" data-ngaytra="<?= date("d/m/Y", strtotime(h($quanly->thoi_gian_ket_thuc_vay))); ?>" data-tienvay="<?= number_format($quanly->so_tien_vay) ?>" data-tienlai="<?= number_format($quanly->lai_xuat_ngay) ?>">
                                    <td class="text-center font600">
                                        <div>
                                            <?= $keyql + 1 ?>.<?= h($quanly->ho_ten) ?>
                                        </div>
                                        
                                        <a href="tel:0<?= h($quanly->sdt) ?>" class="style-phone-call">
                                            <div><i class="fa fa-phone"></i>  0<?= h($quanly->sdt) ?></div>
                                        </a>
                                    </td>
                                    <td class="text-center font600">
                                        <div class="badge badge-dark">
                                            <?php $ky_tra_lai_gan_nhat = date("Y-m-d", strtotime(h($quanly->thoi_gian_bat_dau_vay))); ?>
                                            <?php foreach ($quanly->donglais as $keydonglai => $donglai_val): ?>
                                                <?php if ($donglai_val->trang_thai_tra_lai == 0): ?>
                                                    <?php 
                                                        $ngaythulai = date("Y-m-d", strtotime(h($donglai_val->ngay_tra))); 
                                                        echo 'Ngày Thu Lãi :'.$ngaythulai;
                                                        break;
                                                    ?>
                                                <?php elseif ($donglai_val->trang_thai_tra_lai == 1): ?>
                                                    <?php $ky_tra_lai_gan_nhat = date("Y-m-d", strtotime(h($donglai_val->ngay_tra)));  ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </div><br>
                                        <?php switch ($quanly->tinh_trang) {
                                            case 0:
                                                if ($ngaythulai < $today) {
                                                    echo '<div class="badge badge-warning">'.__('Quá Hạn').'</div>';
                                                } else {
                                                    echo '<div class="badge badge-primary">'.__('Đang Vay').'</div>';
                                                }
                                                break;
                                            case 2:
                                                echo '<div class="badge badge-success">'.__('Trả Hết').'</div>';
                                                break;
                                            case 3:
                                            default:
                                                echo '<div class="badge badge-danger">'.__('Nợ Xấu').'</div>';
                                                break;
                                        } ?>
                                        <br>
                                        <div class="badge badge-info">
                                            Kỳ Hạn : <?= $this->Number->format($quanly->ky_dong_lai) ?>
                                            <?php if ($quanly->kieudonglai->tinh_lai == 0): ?>
                                                Ngày/ 1lần
                                            <?php elseif($quanly->kieudonglai->tinh_lai == 1): ?> 
                                                Tuần/ 1lần
                                            <?php else : ?>
                                                Tháng/ 1lần
                                            <?php endif ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="badge badge-dark">
                                            <?= $thoi_gian_bat_dau_vay; ?>
                                        </div><br>
                                        <div class="badge badge-dark">
                                            <?= $thoi_gian_ket_thuc_vay; ?>
                                        </div><br>
                                        <div class="badge badge-info">
                                            ( <?= $diff->format("%a ngày"); ?> )
                                        </div>
                                    </td>
                                    <td class="text-right style-money">
                                        <div>Tổng Vay :<?= $this->Number->format($quanly->so_tien_vay) ?>đ</div>
                                        <div class="lai_xuat_index">
                                            Lãi :<?= $this->Number->format($quanly->lai_xuat_ngay) ?><?= (isset($quanly->kieudonglai->dang_lai) && ($quanly->kieudonglai->dang_lai == 0))? '%' : 'đ'; ?> <?= $quanly->kieudonglai->ten_kieu_dong_lai; ?>
                                        </div>
                                        <div class="lai_xuat_index">Tổng Lãi : <?= $this->Number->format(ceil($tonglai_quanlys)) ?>đ</div>
                                    </td>
                                    <td class="text-right style-money">
                                        <?php 
                                            $kytralai=date_create($ky_tra_lai_gan_nhat);
                                            $thoigianvaylaixuat=date_diff($kytralai,$created_today); 
                                            $laikyhandenhnay = $thoigianvaylaixuat->format("%a") * ceil($laiden_homnay);
                                        ?>
                                        <div> Lãi đến hôm nay <?= $this->Number->format(ceil($laikyhandenhnay)) ?>đ</div>
                                        <div class="lai_xuat_index">1 ngày phải trả :<?= $this->Number->format(ceil($laiden_homnay)) ?>đ</div>
                                        <div>1 lần phải trả :<?= $this->Number->format($quanly->donglais[0]->tien_lai) ?>đ</div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif ?>
                        
                    </tbody>
                </table>
        </div><!-- #datatable_wrapper --> 
    <?= $this->element('paginator'); ?>
</div>
</div>

<!-- Tạo hợp đồng -->
<div class="modal fade" id="hd_popup" role="dialog">
    <div class="modal-dialog" style="min-width: 70%">
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><?= __('Bản Hợp Đồng') ?></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <?= $this->element('quanlys/add',[
                'users' => $users,
                'kieudonglais' => $kieudonglais,
                'taisans' => $taisans,
                'quanlys' => null
            ]) ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><?= __('Đóng') ?></button>
        </div>
      </div>
    </div>
</div>
<!-- Tạo hợp đồng -->

<?php if (!empty($quanlys->toArray())): ?>
<!-- đóng lãi -->
<div class="modal fade" id="donglai_popup" role="dialog">
    <div class="modal-dialog" style="min-width: 70%">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <?= $this->element('donglais/donglai',[
                    'donglai' => null
                ]) ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?= __('Đóng') ?></button>
            </div>
      </div>
    </div>
</div>
<!-- đóng lãi -->
<?php endif; ?>

<!-- thanh toán -->
<div class="modal fade" id="thanhtoan_popup" role="dialog">
    <div class="modal-dialog" style="min-width: 70%">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div id="noidungthanhtoan"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?= __('Đóng') ?></button>
            </div>
      </div>
    </div>
</div>
<!-- thanh toán -->

<!-- gia han -->
<div class="modal fade" id="giahan_popup" role="dialog">
    <div class="modal-dialog" style="min-width: 70%">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button><br>
                <div id="them_so_lan_thanh_toan"></div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><?= __('Đóng') ?></button>
            </div>
      </div>
    </div>
</div>
<!-- gia han -->

<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery('.time-style').click(function(){
            jQuery('.time-style').removeClass('hight-ye');
            jQuery(this).addClass('hight-ye');
        });

        jQuery('#them-hop-dong').click(function(){
            jQuery('form#formkhachhang').attr('action','quanlys/add');
            jQuery('form#formkhachhang')[0].reset();
            thongtinnhap();

            jQuery('input[name=kieu_ky_dong_lai]').parent().removeClass('checked');
            jQuery('input[name=kieu_ky_dong_lai]').first().next().find('.iradio_flat-green').addClass('checked');
            var val_kieu_ky_dong_lai = jQuery('#kieu_ky_dong_lai').data('val');
            jQuery("input[name=kieu_ky_dong_lai][value=" + val_kieu_ky_dong_lai + "]").attr('checked', 'checked');

            jQuery('input[name=kieu_dong_lai]').parent().removeClass('checked');
            jQuery('input[name=kieu_dong_lai]').first().next().find('.iradio_flat-green').addClass('checked');
            var val_kieu_dong_lai = jQuery('#kieu_dong_lai').data('val');
            jQuery("input[name=kieu_dong_lai][value=" + val_kieu_dong_lai + "]").attr('checked', 'checked');

            var dateDay = jQuery('#dateday').data('date');
            jQuery('#ngay_sinh_kh').val(dateDay);
            jQuery('#ngay_cap_kh').val(dateDay);
            jQuery('#ngay_vay').val(dateDay);
            jQuery('#ngay_tra').val(dateDay);
        });

        jQuery('#sua-hop-dong').click(function(){
            var getVal = jQuery('.hight-ye').first();
            var quanly = getVal.data('quanly');
            thongtinnhap();

            jQuery('input[name=kieu_ky_dong_lai]').parent().addClass('checked');
            jQuery('form#formkhachhang').attr('action','quanlys/edit/'+quanly['id']);
            jQuery('#ho_ten').val(quanly['ho_ten']);
            jQuery('#sdt').val(quanly['sdt']);
            jQuery('#so-cmt').val(quanly['so_cmt']);
            jQuery('#dia-chi').val(quanly['dia_chi']);
            jQuery('#ngay_sinh_kh').val(getVal.data('ngaysinh'));
            jQuery('#ngay_cap_kh').val(getVal.data('ngaycap'));
            jQuery('#noi-cap').val(quanly['noicap']);
            jQuery('#ngay_vay').val(getVal.data('ngayvay'));
            jQuery('#ngay_tra').val(getVal.data('ngaytra'));
            jQuery('#so-tien-vay').val(getVal.data('tienvay'));
            jQuery('#lai-xuat-ngay').val(getVal.data('tienlai'));
            jQuery('#so-ngay-vay').val(quanly['so_ngay_vay']);

            jQuery('#kieudonglai_id').val(quanly['kieudonglai_id']);

            jQuery('#ky-dong-lai').val(quanly['ky_dong_lai']);

            jQuery('input[name=kieu_ky_dong_lai]').parent().removeClass('checked');
            jQuery('input[name=kieu_ky_dong_lai][value='+quanly['kieu_ky_dong_lai']+']').parent().addClass('checked');
            jQuery("input[name=kieu_ky_dong_lai][value=" + quanly['kieu_ky_dong_lai'] + "]").attr('checked', 'checked');

            jQuery('input[name=kieu_dong_lai]').parent().removeClass('checked');
            jQuery('input[name=kieu_dong_lai][value='+quanly['kieu_dong_lai']+']').parent().addClass('checked');
            jQuery("input[name=kieu_dong_lai][value=" + quanly['kieu_dong_lai'] + "]").attr('checked', 'checked');

            jQuery('#giay-to-the-chap').val(quanly['giay_to_the_chap']);
            jQuery('#ghi-chu').val(quanly['ghi_chu']);
            jQuery('#ten-tai-san').val(quanly['ten_tai_san']);
            jQuery('#so-khung').val(quanly['so_khung']);
            jQuery('#so-may').val(quanly['so_may']);
            jQuery('#bien-so').val(quanly['bien_so']);
            jQuery('#imei').val(quanly['imei']);
            jQuery('#mat-khau').val(quanly['mat_khau']);
            jQuery('#taisan-id').val(quanly['taisan_id']);

        });

        function thongtinnhap() {
            var kieudonglai = jQuery('#kieudonglai_id').find("option:selected").text();
            jQuery('#label_laixuat').text(kieudonglai);
            if (kieudonglai.toLowerCase().indexOf("ngày") != -1) {
                jQuery('#label_thoi_gian_vay').text('Số Ngày Vay');
                jQuery('#label_ky_kieu_dong_lai').text('Ví dụ : 10 ngày đóng lãi 1 lần nhập số 10');
                jQuery('#label_lai_xuat_ngay').text('Ví dụ : 1K/Triệu nhập số 1000');
                jQuery('#label_so_ngay_vay').text('Ví dụ : vay 30 ngày nhập số 30');
                jQuery('#label_ky_dong_lai').text('Kỳ Đóng Lãi/Ngày');
            } else if(kieudonglai.toLowerCase().indexOf("tuần") != -1) {
                jQuery('#label_thoi_gian_vay').text('Số Tuần Vay');
                jQuery('#label_ky_kieu_dong_lai').text('Ví dụ : 10 tuần đóng lãi 10 lần nhập số 10');
                jQuery('#label_lai_xuat_ngay').text('Ví dụ : 1K/Tuần nhập số 1.000 hoặc 1%/1tuần nhập 1');
                jQuery('#label_so_ngay_vay').text('Ví dụ : vay 30 Tuần nhập số 30');
                jQuery('#label_ky_dong_lai').text('Kỳ Đóng Lãi/Tuần');
            } else {
                jQuery('#label_thoi_gian_vay').text('Số Tháng Vay');
                jQuery('#label_ky_kieu_dong_lai').text('Ví dụ : 10 Tháng đóng lãi 10 lần nhập số 10');
                jQuery('#label_lai_xuat_ngay').text('Ví dụ : 1K/Tháng nhập số 1.000 hoặc 5%/1Tháng nhập 5');
                jQuery('#label_so_ngay_vay').text('Ví dụ : vay 30 Tháng nhập số 30');
                jQuery('#label_ky_dong_lai').text('Kỳ Đóng Lãi/Tháng');
            }

            if (kieudonglai.toLowerCase().indexOf("%") != -1) {
                jQuery('#dongia_laixuat').text('%');
            } else {
                jQuery('#dongia_laixuat').text('VND');
            }
        }

        jQuery('#kieudonglai_id').change(function(){
            thongtinnhap();
        });

        jQuery('#xoa-hop-dong').click(function(e){
            e.preventDefault();
            var id = jQuery('.hight-ye').first().data('id');
            if (confirm('Bạn có chắc muốn xóa hợp đồng #'+id +' ?')) {
                window.location.href = 'quanlys/delete/'+id;
            }
            return false;
        });

        jQuery('#dong-lai').click(function(e){
            var quanly_id = jQuery('.hight-ye').first().data('quanly')['id'];
            jQuery('#page_xemthem').val(2);
            jQuery.ajax({
                method: "GET",
                url : "<?php echo $this->Url->build(['controller' => 'Donglais','action' => 'getdata']) ?>",
                data: {
                    quanly_id : quanly_id,
                    page : 1
                },
                success: function (reponse) {
                    jQuery('#noidung_donglai').html(reponse);
                },
                error: function () {
                    console.log('Ajax error');
                }
            });
        });

        jQuery('#thanh-toan').click(function(e){
            var getVal = jQuery('.hight-ye').first();
            var quanly = getVal.data('quanly');

            var quanly_id = quanly['id'];
            var ho_ten = quanly['ho_ten'];
            var tinh_trang = quanly['tinh_trang']
            var tienvay = getVal.data('tienvay');
            var tienlai = getVal.data('tienlai');
            var ngayvay = getVal.data('ngayvay');
            var ngaytra = getVal.data('ngaytra');
            var thoigian = "<div>" + ngayvay + "~" + ngaytra + "</div>"; 

            jQuery.ajax({
                method: "GET",
                url : "<?php echo $this->Url->build(['controller' => 'Quanlys','action' => 'thanhtoanhopdong']) ?>",
                data: {
                    quanly_id : quanly_id,
                    ho_ten : ho_ten,
                    tienvay : tienvay,
                    tienlai : tienlai,
                    ngayvay : ngayvay,
                    ngaytra : ngaytra,
                    thoigian : thoigian,
                    tinh_trang : tinh_trang,
                },
                success: function (reponse) {
                    jQuery('#noidungthanhtoan').html(reponse);
                },
                error: function () {
                    console.log('Ajax error');
                }
            });

            jQuery('#thanhtoan_hoten').text( quanly['ho_ten']);
            jQuery('#thanhtoan_mdh').text( "MHD-"+quanly['id']);
            jQuery('#thanhtoan_sotienvay').text(tienvay);
            jQuery('#thanhtoan_laixuat').text(tienlai);
            jQuery('#thanhtoan_thoigianvay').html(thoigian);
            jQuery('#thanhtoan_tho').text(tienlai);
        });

        jQuery('#gia-han').click(function(){
            var getVal = jQuery('.hight-ye').first();
            var quanly = getVal.data('quanly');
            jQuery.ajax({
                method: "GET",
                url : "<?php echo $this->Url->build(['controller' => 'Quanlys','action' => 'giahanform']) ?>",
                data: {
                    quanly_id : quanly['id'],
                    ho_ten : quanly['ho_ten'],
                    so_tien_vay : quanly['so_tien_vay'],
                    ten_kieu_dong_lai : quanly['kieudonglai']['ten_kieu_dong_lai'],
                    ky_dong_lai : quanly['ky_dong_lai'],
                },
                success: function (reponse) {
                    jQuery('#them_so_lan_thanh_toan').html(reponse);
                },
                error: function () {
                    console.log('Ajax error');
                }
            });
        });
        

    });


</script>