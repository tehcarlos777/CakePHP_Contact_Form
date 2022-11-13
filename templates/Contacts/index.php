<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contact> $contacts
 */
?>
<h1><?= env('COMPANY_NAME', 'Company name') ." ". __('Contact Form') ?></h1>
<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
<p class="lead">
    <a href="<?= $this->Url->build(['controller' => 'contacts', 'action' => 'contact'], ['routeClass' => 'ADmad/I18n.I18nRoute']) ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-white">
        <?= __("Contact us") ?>
    </a>
</p>
