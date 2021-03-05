<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Commande Model
 *
 * @method \App\Model\Entity\Commande get($primaryKey, $options = [])
 * @method \App\Model\Entity\Commande newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Commande[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Commande|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commande saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Commande patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Commande[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Commande findOrCreate($search, callable $callback = null, $options = [])
 */
class CommandeTable extends Table
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

        $this->setTable('commande');
        $this->setDisplayField('numCo');
        $this->setPrimaryKey('numCo');
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
            ->integer('numCo')
            ->allowEmptyString('numCo', null, 'create');

        $validator
            ->dateTime('dateCommande')
            ->requirePresence('dateCommande', 'create')
            ->notEmptyDateTime('dateCommande');

        $validator
            ->integer('quantité')
            ->requirePresence('quantité', 'create')
            ->notEmptyString('quantité');

        $validator
            ->integer('id_client')
            ->requirePresence('id_client', 'create')
            ->notEmptyString('id_client');

        return $validator;
    }
}
