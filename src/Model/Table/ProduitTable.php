<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produit Model
 *
 * @method \App\Model\Entity\Produit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produit findOrCreate($search, callable $callback = null, $options = [])
 */
class ProduitTable extends Table
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

        $this->setTable('produit');
        $this->setDisplayField('numProduit');
        $this->setPrimaryKey('numProduit');
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
            ->integer('numProduit')
            ->allowEmptyString('numProduit', null, 'create');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('prix')
            ->requirePresence('prix', 'create')
            ->notEmptyString('prix');

        return $validator;
    }
}
