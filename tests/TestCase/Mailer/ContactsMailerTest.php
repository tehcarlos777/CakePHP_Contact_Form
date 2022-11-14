<?php
declare(strict_types=1);

namespace App\Test\TestCase\Mailer;

use App\Mailer\ContactsMailer;
use Cake\TestSuite\TestCase;

/**
 * App\Mailer\ContactsMailer Test Case
 */
class ContactsMailerTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Mailer\ContactsMailer
     */
    protected $Contacts;

    public function testSendEmail() {
        $result = (new ContactsMailer())->sendEmail('Test_name', 'Test_subject2', env('TEST_MAIL'), 'Test_message');
        $this->assertIsBool($result);
        $this->assertEquals(true, $result, "Send email");
    }
}
