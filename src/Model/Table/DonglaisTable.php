<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donglais Model
 *
 * @property \App\Model\Table\QuanlysTable&\Cake\ORM\Association\BelongsTo $Quanlys
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Donglai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donglai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Donglai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donglai|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donglai saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donglai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donglai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donglai findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DonglaisTable extends Table
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

        $this->setTable('donglais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Quanlys', [
            'foreignKey' => 'quanly_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        // $validator
        //     ->scalar('ho_ten')
        //     ->maxLength('ho_ten', 255)
        //     ->requirePresence('ho_ten', 'create')
        //     ->notEmptyString('ho_ten');

        // $validator
        //     ->numeric('tien_lai')
        //     ->notEmptyString('tien_lai');

        // $validator
        //     ->integer('trang_thai_tra_lai')
        //     ->allowEmptyString('trang_thai_tra_lai');

        // $validator
        //     ->numeric('phi_khac')
        //     ->notEmptyString('phi_khac');

        // $validator
        //     ->date('ngay_tra')
        //     ->requirePresence('ngay_tra', 'create')
        //     ->notEmptyDate('ngay_tra');

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
        $rules->add($rules->existsIn(['quanly_id'], 'Quanlys'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
