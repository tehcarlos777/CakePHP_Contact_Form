<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;
use Exception;

/**
 * Contacts mailer.
 */
class ContactsMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Contacts';

    /**
     * sendEmail method
     *
     * @param string $name
     * @param string $subject
     * @param string $emailAddress
     * @param string $message
     * @return bool
     */
    public function sendEmail(string $name, string $subject, string $emailAddress, string $message): bool
    {
        $emailBody =
            "<html lang='".env('APP_DEFAULT_LOCALE', 'en_US')."'><head><title></title></head><body><p>HH ".__("Contact Page")." - $subject:</p>"
            ."<ul>"
            ."<li>".__("Name").": <strong>$name</strong></li>"
            ."<li>Email: <strong>$emailAddress</strong></li>"
            ."</ul>"
            ."<p>".__("Message").":</p>"
            ."<p>$message</p>"
            ."</body></html>";

        try {
            $mailer = new Mailer();
            $mailer->setFrom(env('OFFICE_MAIL'), env('OFFICE_MAIL_NAME'))
                ->setTo($emailAddress, $name)
                ->setCc(env('OFFICE_MAIL'), env('OFFICE_MAIL_NAME'))
                ->setSubject($subject)
                ->setEmailFormat('html');

            if ($mailer->deliver($emailBody)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}