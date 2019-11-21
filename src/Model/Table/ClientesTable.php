<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \App\Model\Table\ServiciosTable&\Cake\ORM\Association\HasMany $Servicios
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Servicios', [
            'foreignKey' => 'cliente_id'
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
            ->scalar('DNI')
            ->maxLength('DNI', 8)
            ->allowEmptyString('DNI');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 100)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->scalar('ruc')
            ->maxLength('ruc', 11)
            ->allowEmptyString('ruc');

        $validator
            ->date('fecharegistro')
            ->requirePresence('fecharegistro', 'create')
            ->notEmptyDate('fecharegistro');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 40)
            ->requirePresence('categoria', 'create')
            ->notEmptyString('categoria');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 100)
            ->allowEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 100)
            ->allowEmptyString('apellidos');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 1)
            ->allowEmptyString('sexo');

        $validator
            ->scalar('razsoc')
            ->maxLength('razsoc', 200)
            ->allowEmptyString('razsoc');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 200)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 200)
            ->allowEmptyString('descripcion');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 9)
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 40)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        return $validator;
    }
}
