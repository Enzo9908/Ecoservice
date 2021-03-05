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
        <li><?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->numCo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->numCo], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->numCo)]) ?> </li>
        <li><?= $this->Html->link(__('List Commande'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commande view col-8 content">
    <h3><?= h($commande->numCo) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('NumCo') ?></th>
            <td><?= $this->Number->format($commande->numCo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantité') ?></th>
            <td><?= $this->Number->format($commande->quantité) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Client') ?></th>
            <td><?= $this->Number->format($commande->id_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateCommande') ?></th>
            <td><?= h($commande->dateCommande) ?></td>
        </tr>
    </table>
</div>
</div>

