<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produit[]|\Cake\Collection\CollectionInterface $produit
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
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produit index col-8 content">
    <h3><?= __('Produit') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead class="thead">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numProduit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produit as $produit): ?>
            <tr>
                <td><?= $this->Number->format($produit->numProduit) ?></td>
                <td><?= h($produit->nom) ?></td>
                <td><?= $this->Number->format($produit->prix) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produit->numProduit]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produit->numProduit]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produit->numProduit], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->numProduit)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>

