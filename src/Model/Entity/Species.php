<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Species Entity
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $author
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 * @property int $genre_id
 * @property int $collection_id
 *
 * @property \App\Model\Entity\Genre $genre
 * @property \App\Model\Entity\Collection $collection
 */
class Species extends Entity
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
