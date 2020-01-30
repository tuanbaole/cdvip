<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonglaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonglaisTable Test Case
 */
class DonglaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DonglaisTable
     */
    public $Donglais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Donglais',
        'app.Quanlys',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Donglais') ? [] : ['className' => DonglaisTable::class];
        $this->Donglais = TableRegistry::getTableLocator()->get('Donglais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Donglais);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
