<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamiliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamiliesTable Test Case
 */
class FamiliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FamiliesTable
     */
    public $Families;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.families',
        'app.genres',
        'app.species',
        'app.collections',
        'app.locals',
        'app.determinations',
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
        $config = TableRegistry::exists('Families') ? [] : ['className' => 'App\Model\Table\FamiliesTable'];
        $this->Families = TableRegistry::get('Families', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Families);

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
