# Contact Form

App created with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.

If Composer is installed globally, run

```bash
composer install
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.


## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'`, `'EmailTransport'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.
Set `config/.env` file.

## Migrations

Run database migration to prepare database schema.
```bash
bin/cake migrations migrate
```

## Save contact and send email

Contacts are saved in Contact page. After saving Contact, each contact is added to Email sending queue. 
In order to send email, need to run Command by    
```bash
bin/cake SendEmail
```

## Run PHPUnit tests
Set email address in `tests/TestCase/Mailer/ContactsMailerTest.php`  before running the tests.

```bash
vendor/bin/phpunit
```