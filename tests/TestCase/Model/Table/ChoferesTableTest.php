<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChoferesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChoferesTable Test Case
 */
class ChoferesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChoferesTable
     */
    public $Choferes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Choferes',
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
        $config = TableRegistry::getTableLocator()->exists('Choferes') ? [] : ['className' => ChoferesTable::class];
        $this->Choferes = TableRegistry::getTableLocator()->get('Choferes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Choferes);

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
