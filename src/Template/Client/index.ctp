<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $client
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
            <li ><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
        </ul>
    </nav>
    <div class="client index col-8 content">
        <h3><?= __('Client') ?></h3>
        <table cellpadding="0" cellspacing="0" class="table">
            <thead class="thead">
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('pseudo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('pays') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('département') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('CP') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client as $client): ?>
                <tr>
                    <td><?= $this->Number->format($client->id) ?></td>
                    <td><?= h($client->nom) ?></td>
                    <td><?= h($client->prenom) ?></td>
                    <td><?= h($client->email) ?></td>
                    <td><?= h($client->pseudo) ?></td>
                    <td><?= h($client->password) ?></td>
                    <td><?= h($client->pays) ?></td>
                    <td><?= h($client->département) ?></td>
                    <td><?= $this->Number->format($client->CP) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
            </p>
        </div>
    </div>
</div>