<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ContactsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ContactsController Test Case
 *
 * @uses \App\Controller\ContactsController
 */
class ContactsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Contacts',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ContactsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ContactsController::add()
     */
    public function testContact(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
