<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kieudonglais Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Kieudonglai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kieudonglai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kieudonglai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kieudonglai|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kieudonglai saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kieudonglai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kieudonglai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kieudonglai findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KieudonglaisTable extends Table
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

        $this->setTable('kieudonglais');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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

        $validator
            ->scalar('ten_kieu_dong_lai')
            ->maxLength('ten_kieu_dong_lai', 255)
            ->requirePresence('ten_kieu_dong_lai', 'create')
            ->notEmptyString('ten_kieu_dong_lai');

        $validator
            ->scalar('dang_lai')
            ->maxLength('dang_lai', 10)
            ->requirePresence('dang_lai', 'create')
            ->notEmptyString('dang_lai');

        $validator
            ->scalar('tinh_lai')
            ->maxLength('tinh_lai', 10)
            ->requirePresence('tinh_lai', 'create')
            ->notEmptyString('tinh_lai');

        $validator
            ->scalar('he_so')
            ->maxLength('he_so', 10)
            ->requirePresence('he_so', 'create')
            ->notEmptyString('he_so');

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

        return $rules;
    }
}
