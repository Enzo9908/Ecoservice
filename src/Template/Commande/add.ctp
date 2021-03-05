<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
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
        <li><?= $this->Html->link(__('List Commande'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="commande form col-8 content">
    <?= $this->Form->create($commande) ?>
    <fieldset>
        <legend><?= __('Add Commande') ?></legend>
        <?php
            echo $this->Form->control('dateCommande');
            echo $this->Form->control('quantité');
            echo $this->Form->control('id_client');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>

