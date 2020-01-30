<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kieudonglai Entity
 *
 * @property int $id
 * @property string $ten_kieu_dong_lai
 * @property int $dang_lai
 * @property int $tinh_lai
 * @property int $he_so
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Kieudonglai extends Entity
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
        'ten_kieu_dong_lai' => true,
        'dang_lai' => true,
        'tinh_lai' => true,
        'he_so' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
