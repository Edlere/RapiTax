<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposerviciosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposerviciosTable Test Case
 */
class TiposerviciosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposerviciosTable
     */
    public $Tiposervicios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tiposervicios',
        'app.Servicios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tiposervicios') ? [] : ['className' => TiposerviciosTable::class];
        $this->Tiposervicios = TableRegistry::getTableLocator()->get('Tiposervicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tiposervicios);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
