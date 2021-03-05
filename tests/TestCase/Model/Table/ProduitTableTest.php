<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProduitTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProduitTable Test Case
 */
class ProduitTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProduitTable
     */
    public $Produit;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Produit',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Produit') ? [] : ['className' => ProduitTable::class];
        $this->Produit = TableRegistry::getTableLocator()->get('Produit', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Produit);

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
