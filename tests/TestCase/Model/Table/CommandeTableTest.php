<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommandeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommandeTable Test Case
 */
class CommandeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommandeTable
     */
    public $Commande;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Commande',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Commande') ? [] : ['className' => CommandeTable::class];
        $this->Commande = TableRegistry::getTableLocator()->get('Commande', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Commande);

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
