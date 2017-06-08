<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeterminationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeterminationsTable Test Case
 */
class DeterminationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeterminationsTable
     */
    public $Determinations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.determinations',
        'app.collections',
        'app.locals',
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
        $config = TableRegistry::exists('Determinations') ? [] : ['className' => 'App\Model\Table\DeterminationsTable'];
        $this->Determinations = TableRegistry::get('Determinations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Determinations);

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
