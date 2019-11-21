<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chofere Entity
 *
 * @property int $id
 * @property string $brevete
 * @property string $DNI
 * @property string $nombres
 * @property string $apellidos
 * @property string $categoria
 * @property \Cake\I18n\FrozenDate $fechanac
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Servicio[] $servicios
 */
class Chofere extends Entity
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
        'brevete' => true,
        'DNI' => true,
        'nombres' => true,
        'apellidos' => true,
        'categoria' => true,
        'fechanac' => true,
        'created' => true,
        'modified' => true,
        'servicios' => true
    ];
}
