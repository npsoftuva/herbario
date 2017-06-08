<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Collection Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property int $register
 * @property string $photo
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 * @property int $local_id
 * @property int $determination_id
 *
 * @property \App\Model\Entity\Local $local
 * @property \App\Model\Entity\Determination $determination
 * @property \App\Model\Entity\Species[] $species
 * @property \App\Model\Entity\Collector[] $collectors
 */
class Collection extends Entity
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
        '*' => true,
        'id' => false
    ];
}
