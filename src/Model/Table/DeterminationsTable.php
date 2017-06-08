<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Determinations Model
 *
 * @property \Cake\ORM\Association\HasMany $Collections
 *
 * @method \App\Model\Entity\Determination get($primaryKey, $options = [])
 * @method \App\Model\Entity\Determination newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Determination[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Determination|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Determination patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Determination[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Determination findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DeterminationsTable extends Table
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

        $this->setTable('determinations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Collections', [
            'foreignKey' => 'determination_id'
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
            ->requirePresence('determiner', 'create')
            ->notEmpty('determiner');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        return $validator;
    }
}
