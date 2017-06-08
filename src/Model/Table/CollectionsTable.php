<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Collections Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Locals
 * @property \Cake\ORM\Association\BelongsTo $Determinations
 * @property \Cake\ORM\Association\HasMany $Species
 * @property \Cake\ORM\Association\BelongsToMany $Collectors
 *
 * @method \App\Model\Entity\Collection get($primaryKey, $options = [])
 * @method \App\Model\Entity\Collection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Collection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Collection|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Collection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Collection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Collection findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CollectionsTable extends Table
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

        $this->setTable('collections');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Locals', [
            'foreignKey' => 'local_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Determinations', [
            'foreignKey' => 'determination_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Species', [
            'foreignKey' => 'collection_id'
        ]);
        $this->belongsToMany('Collectors', [
            'foreignKey' => 'collection_id',
            'targetForeignKey' => 'collector_id',
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->integer('register')
            ->requirePresence('register', 'create')
            ->notEmpty('register');

        $validator
            ->allowEmpty('photo');

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
        $rules->add($rules->existsIn(['local_id'], 'Locals'));
        $rules->add($rules->existsIn(['determination_id'], 'Determinations'));

        return $rules;
    }
}
