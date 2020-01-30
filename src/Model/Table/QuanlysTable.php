<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quanlys Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\KieudonglaisTable&\Cake\ORM\Association\BelongsTo $Kieudonglais
 * @property \App\Model\Table\TaisansTable&\Cake\ORM\Association\BelongsTo $Taisans
 *
 * @method \App\Model\Entity\Quanly get($primaryKey, $options = [])
 * @method \App\Model\Entity\Quanly newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Quanly[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quanly|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quanly saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Quanly patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Quanly[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quanly findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuanlysTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('quanlys');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Kieudonglais', [
            'foreignKey' => 'kieudonglai_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Taisans', [
            'foreignKey' => 'taisan_id',
            'joinType' => 'INNER',
        ]);

        $this->hasMany('Donglais', [
            'foreignKey' => 'quanly_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        // $validator
        //     ->integer('id')
        //     ->allowEmptyString('id', null, 'create');

        // $validator
        //     ->scalar('ho_ten')
        //     ->maxLength('ho_ten', 255)
        //     ->requirePresence('ho_ten', 'create')
        //     ->notEmptyString('ho_ten');

        // $validator
        //     ->date('ngay_sinh')
        //     ->requirePresence('ngay_sinh', 'create')
        //     ->notEmptyDate('ngay_sinh');

        // $validator
        //     ->integer('so_cmt')
        //     ->requirePresence('so_cmt', 'create')
        //     ->notEmptyString('so_cmt');

        // $validator
        //     ->date('ngay_cap')
        //     ->requirePresence('ngay_cap', 'create')
        //     ->notEmptyDate('ngay_cap');

        // $validator
        //     ->scalar('noi_cap')
        //     ->maxLength('noi_cap', 255)
        //     ->requirePresence('noi_cap', 'create')
        //     ->notEmptyString('noi_cap');

        // $validator
        //     ->scalar('dia_chi')
        //     ->requirePresence('dia_chi', 'create')
        //     ->notEmptyString('dia_chi');

        // $validator
        //     ->integer('sdt')
        //     ->requirePresence('sdt', 'create')
        //     ->notEmptyString('sdt');

        // $validator
        //     ->integer('tinh_trang')
        //     ->notEmptyString('tinh_trang');

        // $validator
        //     ->scalar('img')
        //     ->maxLength('img', 255)
        //     ->requirePresence('img', 'create')
        //     ->notEmptyString('img');

        // $validator
        //     ->date('thoi_gian_bat_dau_vay')
        //     ->requirePresence('thoi_gian_bat_dau_vay', 'create')
        //     ->notEmptyDate('thoi_gian_bat_dau_vay');

        // $validator
        //     ->date('thoi_gian_ket_thuc_vay')
        //     ->requirePresence('thoi_gian_ket_thuc_vay', 'create')
        //     ->notEmptyDate('thoi_gian_ket_thuc_vay');

        // $validator
        //     ->numeric('so_tien_vay')
        //     ->requirePresence('so_tien_vay', 'create')
        //     ->notEmptyString('so_tien_vay');

        // $validator
        //     ->numeric('lai_xuat_ngay')
        //     ->requirePresence('lai_xuat_ngay', 'create')
        //     ->notEmptyString('lai_xuat_ngay');

        // $validator
        //     ->integer('ky_dong_lai')
        //     ->requirePresence('ky_dong_lai', 'create')
        //     ->notEmptyString('ky_dong_lai');

        // $validator
        //     ->integer('kieu_ky_dong_lai')
        //     ->allowEmptyString('kieu_ky_dong_lai');

        // $validator
        //     ->integer('so_ngay_vay')
        //     ->requirePresence('so_ngay_vay', 'create')
        //     ->notEmptyString('so_ngay_vay');

        // $validator
        //     ->integer('kieu_dong_lai')
        //     ->allowEmptyString('kieu_dong_lai');

        // $validator
        //     ->scalar('giay_to_the_chap')
        //     ->requirePresence('giay_to_the_chap', 'create')
        //     ->notEmptyString('giay_to_the_chap');

        // $validator
        //     ->scalar('ghi_chu')
        //     ->requirePresence('ghi_chu', 'create')
        //     ->notEmptyString('ghi_chu');

        // $validator
        //     ->scalar('ten_tai_san')
        //     ->maxLength('ten_tai_san', 255)
        //     ->requirePresence('ten_tai_san', 'create')
        //     ->notEmptyString('ten_tai_san');

        // $validator
        //     ->scalar('so_khung')
        //     ->maxLength('so_khung', 50)
        //     ->requirePresence('so_khung', 'create')
        //     ->notEmptyString('so_khung');

        // $validator
        //     ->scalar('so_may')
        //     ->maxLength('so_may', 50)
        //     ->requirePresence('so_may', 'create')
        //     ->notEmptyString('so_may');

        // $validator
        //     ->scalar('bien_so')
        //     ->maxLength('bien_so', 50)
        //     ->requirePresence('bien_so', 'create')
        //     ->notEmptyString('bien_so');

        // $validator
        //     ->scalar('imei')
        //     ->maxLength('imei', 50)
        //     ->requirePresence('imei', 'create')
        //     ->notEmptyString('imei');

        // $validator
        //     ->scalar('mat_khau')
        //     ->maxLength('mat_khau', 50)
        //     ->requirePresence('mat_khau', 'create')
        //     ->notEmptyString('mat_khau');

        // $validator
        //     ->scalar('img_tai_san')
        //     ->maxLength('img_tai_san', 255)
        //     ->requirePresence('img_tai_san', 'create')
        //     ->notEmptyString('img_tai_san');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['kieudonglai_id'], 'Kieudonglais'));
        $rules->add($rules->existsIn(['taisan_id'], 'Taisans'));

        return $rules;
    }
}
