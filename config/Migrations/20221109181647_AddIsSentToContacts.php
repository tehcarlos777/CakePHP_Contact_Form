<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddIsSentToContacts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('contacts');
        $table->addColumn('is_sent', 'boolean', [
            'after' => 'consent2',
            'default' => false,
            'null' => false,
        ]);
        $table->update();
    }
}
