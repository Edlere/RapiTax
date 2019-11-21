<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Servicios Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 * @property \App\Model\Table\ChoferesTable&\Cake\ORM\Association\BelongsTo $Choferes
 * @property \App\Model\Table\VehiculosTable&\Cake\ORM\Association\BelongsTo $Vehiculos
 * @property \App\Model\Table\TiposerviciosTable&\Cake\ORM\Association\BelongsTo $Tiposervicios
 *
 * @method \App\Model\Entity\Servicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Servicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Servicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Servicio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servicio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Servicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Servicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Servicio findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServiciosTable extends Table
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

        $this->setTable('servicios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Choferes', [
            'foreignKey' => 'chofere_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Vehiculos', [
            'foreignKey' => 'vehiculo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tiposervicios', [
            'foreignKey' => 'tiposervicio_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->dateTime('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDateTime('fecha');

        $validator
            ->scalar('origen')
            ->maxLength('origen', 150)
            ->requirePresence('origen', 'create')
            ->notEmptyString('origen');

        $validator
            ->scalar('destinoref')
            ->maxLength('destinoref', 150)
            ->requirePresence('destinoref', 'create')
            ->notEmptyString('destinoref');

        $validator
            ->scalar('destinoreal')
            ->maxLength('destinoreal', 150)
            ->requirePresence('destinoreal', 'create')
            ->notEmptyString('destinoreal');

        $validator
            ->decimal('precio')
            ->allowEmptyString('precio');

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
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        $rules->add($rules->existsIn(['chofere_id'], 'Choferes'));
        $rules->add($rules->existsIn(['vehiculo_id'], 'Vehiculos'));
        $rules->add($rules->existsIn(['tiposervicio_id'], 'Tiposervicios'));

        return $rules;
    }
}
