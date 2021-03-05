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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produit->numProduit],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produit->numProduit)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produit'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produit form col-8 content">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Edit Produit') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('description');
            echo $this->Form->control('prix');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

</div>
