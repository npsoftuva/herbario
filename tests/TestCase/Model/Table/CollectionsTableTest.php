<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollectionsTable Test Case
 */
class CollectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CollectionsTable
     */
    public $Collections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.collections',
        'app.locals',
        'app.determinations',
        'app.species',
        'app.genres',
        'app.families',
        'app.collectors',
        'app.collections_collectors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Collections') ? [] : ['className' => 'App\Model\Table\CollectionsTable'];
        $this->Collections = TableRegistry::get('Collections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Collections);

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
