<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<ul class="nav justify-content-center txt-admin">
    <li class="nav-item">
        <a class="nav-link gray active" href="<?= $this->Url->build('/client') ?>">Clients</a>
    </li>
    <li class="nav-item">
        <a class="nav-link gray" href="<?= $this->Url->build('/commande') ?>">Commandes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link gray" href="<?= $this->Url->build('/produit') ?>">Produits</a>
    </li>
</ul>
<div class="row mt-3">
    <nav class="col-3 nav-backoffice aquamarine" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading h3"><?= __('Actions') ?></li>
            <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]
            )
        ?></li>
            <li><?= $this->Html->link(__('List Client'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="client form col-8 content">
        <?= $this->Form->create($client) ?>
        <fieldset>
            <legend><?= __('Edit Client') ?></legend>
            <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('email');
            echo $this->Form->control('pseudo');
            echo $this->Form->control('password');
            echo $this->Form->control('pays');
            echo $this->Form->control('département');
            echo $this->Form->control('CP');
        ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>