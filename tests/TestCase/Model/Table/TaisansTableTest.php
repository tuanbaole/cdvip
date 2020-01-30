<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaisansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaisansTable Test Case
 */
class TaisansTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TaisansTable
     */
    public $Taisans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Taisans',
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
        $config = TableRegistry::getTableLocator()->exists('Taisans') ? [] : ['className' => TaisansTable::class];
        $this->Taisans = TableRegistry::getTableLocator()->get('Taisans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Taisans);

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
