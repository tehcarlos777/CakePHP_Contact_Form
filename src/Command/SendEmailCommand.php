<?php
declare(strict_types=1);

namespace App\Command;

use App\Mailer\ContactsMailer;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Datasource\ConnectionManager;

/**
 * SendEmail command.
 */
class SendEmailCommand extends Command
{
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $connection = ConnectionManager::get('default');

        $result = $connection
            ->newQuery()
            ->select('*')
            ->from('contacts')
            ->where(['is_sent' => false])
            ->execute()
            ->fetch('assoc');

        if (!empty($result)) {
            $isSent = (new ContactsMailer())->sendEmail($result['name'], $result['subject'], $result['email'], $result['message']);
        } else {
            echo __("Email queue is empty. No emails send.")." \n";
            return;
        }

        if($isSent) {
            $connection->update('contacts', ['is_sent' => true], ['id' => $result["id"]]);
            echo __("Success, Email sent").": \n" .
            __("Name").": " . $result['name'] . "\n" .
            __("Subject").": " . $result['subject'] . "\n" .
            "Email: " . $result['email'] . "\n" .
            __("Message").": " . $result['message'] . "\n" .
            __("Consent1").": " . ($result['consent1'] ? __("Yes") : __("No")) . "\n".
            __("Consent2").": " . ($result['consent2'] ? __("Yes") : __("No")) . "\n";
        } else {
            echo __("Error, Email not sent").": \n";
        }
    }
}
