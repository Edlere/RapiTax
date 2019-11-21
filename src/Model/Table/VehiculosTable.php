<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vehiculos Model
 *
 * @property \App\Model\Table\ServiciosTable&\Cake\ORM\Association\HasMany $Servicios
 *
 * @method \App\Model\Entity\Vehiculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vehiculo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vehiculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vehiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vehiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vehiculo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VehiculosTable extends Table
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

        $this->setTable('vehiculos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Servicios', [
            'foreignKey' => 'vehiculo_id'
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
            ->scalar('placa')
            ->maxLength('placa', 8)
            ->requirePresence('placa', 'create')
            ->notEmptyString('placa');

        $validator
            ->scalar('modelo')
            ->maxLength('modelo', 50)
            ->requirePresence('modelo', 'create')
            ->notEmptyString('modelo');

        $validator
            ->scalar('marca')
            ->maxLength('marca', 50)
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca');

        $validator
            ->scalar('año')
            ->requirePresence('año', 'create')
            ->notEmptyString('año');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 20)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        return $validator;
    }
}
