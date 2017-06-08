<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Locals Model
 *
 * @property \Cake\ORM\Association\HasMany $Collections
 *
 * @method \App\Model\Entity\Local get($primaryKey, $options = [])
 * @method \App\Model\Entity\Local newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Local[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Local|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Local patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Local[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Local findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LocalsTable extends Table
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

        $this->setTable('locals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Collections', [
            'foreignKey' => 'local_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->allowEmpty('latitude');

        $validator
            ->allowEmpty('longitude');

        $validator
            ->decimal('altitude')
            ->allowEmpty('altitude');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->allowEmpty('local');

        return $validator;
    }
}
