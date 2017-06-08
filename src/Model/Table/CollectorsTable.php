<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Collectors Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Collections
 *
 * @method \App\Model\Entity\Collector get($primaryKey, $options = [])
 * @method \App\Model\Entity\Collector newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Collector[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Collector|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collector patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Collector[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Collector findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CollectorsTable extends Table
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

        $this->setTable('collectors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Collections', [
            'foreignKey' => 'collector_id',
            'targetForeignKey' => 'collection_id',
            'joinTable' => 'collections_collectors'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
