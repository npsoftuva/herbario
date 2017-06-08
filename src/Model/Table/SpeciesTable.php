<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Species Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Genres
 * @property \Cake\ORM\Association\BelongsTo $Collections
 *
 * @method \App\Model\Entity\Species get($primaryKey, $options = [])
 * @method \App\Model\Entity\Species newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Species[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Species|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Species patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Species[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Species findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SpeciesTable extends Table
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

        $this->setTable('species');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Genres', [
            'foreignKey' => 'genre_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Collections', [
            'foreignKey' => 'collection_id',
            'joinType' => 'INNER'
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

        $validator
            ->allowEmpty('info');

        $validator
            ->allowEmpty('author');

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
        $rules->add($rules->existsIn(['genre_id'], 'Genres'));
        $rules->add($rules->existsIn(['collection_id'], 'Collections'));

        return $rules;
    }
}
