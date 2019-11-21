<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Choferes Model
 *
 * @property \App\Model\Table\ServiciosTable&\Cake\ORM\Association\HasMany $Servicios
 *
 * @method \App\Model\Entity\Chofere get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chofere newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Chofere[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chofere|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chofere saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chofere patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chofere[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chofere findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChoferesTable extends Table
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

        $this->setTable('choferes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Servicios', [
            'foreignKey' => 'chofere_id'
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
            ->scalar('brevete')
            ->maxLength('brevete', 20)
            ->requirePresence('brevete', 'create')
            ->notEmptyString('brevete');

        $validator
            ->scalar('DNI')
            ->maxLength('DNI', 8)
            ->requirePresence('DNI', 'create')
            ->notEmptyString('DNI');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 100)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 100)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 40)
            ->requirePresence('categoria', 'create')
            ->notEmptyString('categoria');

        $validator
            ->date('fechanac')
            ->requirePresence('fechanac', 'create')
            ->notEmptyDate('fechanac');

        return $validator;
    }
}
