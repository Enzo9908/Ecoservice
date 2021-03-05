<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produit $produit
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
        <li class="heading h3"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produit'), ['action' => 'edit', $produit->numProduit]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produit'), ['action' => 'delete', $produit->numProduit], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->numProduit)]) ?> </li>
        <li><?= $this->Html->link(__('List Produit'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produit view col-8 content">
    <h3><?= h($produit->numProduit) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($produit->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumProduit') ?></th>
            <td><?= $this->Number->format($produit->numProduit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($produit->prix) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4 class="justify-content-center col-12"><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($produit->description)); ?>
    </div>
</div>
</div>

