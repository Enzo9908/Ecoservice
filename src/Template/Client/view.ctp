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
<nav class="col-3 nav-backoffice aquamarine columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="client view col-8 content">
    <h3><?= h($client->id) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($client->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($client->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pseudo') ?></th>
            <td><?= h($client->pseudo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($client->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pays') ?></th>
            <td><?= h($client->pays) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Département') ?></th>
            <td><?= h($client->département) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CP') ?></th>
            <td><?= $this->Number->format($client->CP) ?></td>
        </tr>
    </table>
</div>
</div>

