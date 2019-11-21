<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiciosFixture
 */
class ServiciosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cliente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'chofere_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'vehiculo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tiposervicio_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'origen' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'destinoref' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'destinoreal' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'precio' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_cliente' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'fk_chofere' => ['type' => 'index', 'columns' => ['chofere_id'], 'length' => []],
            'fk_vehiculo' => ['type' => 'index', 'columns' => ['vehiculo_id'], 'length' => []],
            'fk_tiposervicio' => ['type' => 'index', 'columns' => ['tiposervicio_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_chofere' => ['type' => 'foreign', 'columns' => ['chofere_id'], 'references' => ['choferes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_cliente' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['clientes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_tiposervicio' => ['type' => 'foreign', 'columns' => ['tiposervicio_id'], 'references' => ['tiposervicios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_vehiculo' => ['type' => 'foreign', 'columns' => ['vehiculo_id'], 'references' => ['vehiculos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'cliente_id' => 1,
                'chofere_id' => 1,
                'vehiculo_id' => 1,
                'tiposervicio_id' => 1,
                'fecha' => '2019-11-21 04:26:26',
                'origen' => 'Lorem ipsum dolor sit amet',
                'destinoref' => 'Lorem ipsum dolor sit amet',
                'destinoreal' => 'Lorem ipsum dolor sit amet',
                'precio' => 1.5,
                'created' => '2019-11-21 04:26:26',
                'modified' => '2019-11-21 04:26:26'
            ],
        ];
        parent::init();
    }
}
