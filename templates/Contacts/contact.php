<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="contacts form content">
            <?= $this->Form->create($contact) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('name', ['label' => '*'.__('Name'), 'class' => 'form-control']);
                    echo $this->Form->control('subject', ['label' => '*'.__('Subject'), 'class' => 'form-control']);
                    echo $this->Form->control('email', ['label' => '*'.__('Email'), 'class' => 'form-control']);
                    echo $this->Form->control('message', ['label' => '*'.__('Message'), 'class' => 'form-control']);
                    echo $this->Form->control('consent1', ['label' => '*'.__('Consent1'), 'required' => true]);
                    echo $this->Form->control('consent2', ['label' => ' '.__('Consent2')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
