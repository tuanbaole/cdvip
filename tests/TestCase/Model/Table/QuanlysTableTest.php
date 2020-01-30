<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuanlysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuanlysTable Test Case
 */
class QuanlysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuanlysTable
     */
    public $Quanlys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Quanlys',
        'app.Users',
        'app.Kieudonglais',
        'app.Taisans',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Quanlys') ? [] : ['className' => QuanlysTable::class];
        $this->Quanlys = TableRegistry::getTableLocator()->get('Quanlys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quanlys);

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
