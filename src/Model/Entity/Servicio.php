<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servicio Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $chofere_id
 * @property int $vehiculo_id
 * @property int $tiposervicio_id
 * @property \Cake\I18n\FrozenTime $fecha
 * @property string $origen
 * @property string $destinoref
 * @property string $destinoreal
 * @property float|null $precio
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Chofere $chofere
 * @property \App\Model\Entity\Vehiculo $vehiculo
 * @property \App\Model\Entity\Tiposervicio $tiposervicio
 */
class Servicio extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cliente_id' => true,
        'chofere_id' => true,
        'vehiculo_id' => true,
        'tiposervicio_id' => true,
        'fecha' => true,
        'origen' => true,
        'destinoref' => true,
        'destinoreal' => true,
        'precio' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'chofere' => true,
        'vehiculo' => true,
        'tiposervicio' => true
    ];
}
