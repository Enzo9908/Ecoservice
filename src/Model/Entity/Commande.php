<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commande Entity
 *
 * @property int $numCo
 * @property \Cake\I18n\FrozenTime $dateCommande
 * @property int $quantité
 * @property int $id_client
 */
class Commande extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'dateCommande' => true,
        'quantité' => true,
        'id_client' => true,
    ];
}
