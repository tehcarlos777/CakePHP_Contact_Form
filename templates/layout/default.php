<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$this->Html->css('custom', ['block' => true]);
$this->Html->css('cover', ['block' => true]);
$currentLang = $this->Url->build(['controller' => 'contacts', 'action' => 'index']);
$companyName = env('COMPANY_NAME', 'Company name');
?>
<!DOCTYPE html>
<html lang="pl-PL" class="h-100">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?=  $companyName." ".__('Contact Form') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="d-flex h-100 text-center text-bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <a href="<?= $this->Url->build(['controller' => 'contacts', 'action' => 'index']) ?>"><h3 class="float-md-start mb-0 text-white"><?= $companyName ?></h3></a>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link fw-bold py-1 px-0 <?= $this->request->getParam('action') === 'index' ? 'active' : '' ?>"
                   href="<?= $this->Url->build(['controller' => 'contacts', 'action' => 'index'], ['routeClass' => 'ADmad/I18n.I18nRoute']) ?>">
                    <?= __('Home') ?>
                </a>
                <a class="nav-link fw-bold py-1 px-0 <?= $this->request->getParam('action') === 'contact' ? 'active' : '' ?>"
                    href="<?= $this->Url->build(['controller' => 'contacts', 'action' => 'contact']) ?>"><?= __('Contact') ?>
                </a>
                <a class="nav-link fw-bold py-1 px-0" href="<?= $currentLang === '/pl' ? '/en' : '/pl' ?>">
                    <?= $currentLang === '/pl' ? 'EN' : 'PL' ?>
                </a>
            </nav>
        </div>
    </header>

    <main class="px-3">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

    <footer class="mt-auto text-white-50">
        <p>by Karol</p>
    </footer>
</body>
</html>
