<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row mt-3 justify-content-center">
    <div class="client form col-8 d-flex justify-content-center">
        <?= $this->Form->create($client) ?>
        <fieldset>
            <legend><?= __('Add Client') ?></legend>
            <div class="container">
                <?php
                echo $this->Form->control('nom', ['class' => 'form-control col-12']);
                echo $this->Form->control('prenom', ['class' => 'form-control col-12']);
                echo $this->Form->control('email', ['class' => 'form-control col-12']);
                echo $this->Form->control('pseudo', ['class' => 'form-control col-12']);
                echo $this->Form->control('password', ['class' => 'form-control col-12']);
                echo $this->Form->control('pays', ['class' => 'form-control col-12']);
                echo $this->Form->control('département', ['class' => 'form-control col-12']);
                echo $this->Form->control('CP', ['class' => 'form-control col-12']);
                ?>
            </div>
        </fieldset>
        <?= $this->Form->button('Submit', ['class' => 'mt-5 ml-5 btn btn-primary d-flex justify-content-center']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>