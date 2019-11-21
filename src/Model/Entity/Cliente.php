<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string|null $DNI
 * @property string $correo
 * @property string|null $ruc
 * @property \Cake\I18n\FrozenDate $fecharegistro
 * @property string $categoria
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $sexo
 * @property string|null $razsoc
 * @property string|null $direccion
 * @property string|null $descripcion
 * @property string $telefono
 * @property string $estado
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Servicio[] $servicios
 */
class Cliente extends Entity
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
        'DNI' => true,
        'correo' => true,
        'ruc' => true,
        'fecharegistro' => true,
        'categoria' => true,
        'nombres' => true,
        'apellidos' => true,
        'sexo' => true,
        'razsoc' => true,
        'direccion' => true,
        'descripcion' => true,
        'telefono' => true,
        'estado' => true,
        'created' => true,
        'modified' => true,
        'servicios' => true
    ];
}
