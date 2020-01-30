<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donglai Entity
 *
 * @property int $id
 * @property string $ho_ten
 * @property float $tien_lai
 * @property float $phi_khac
 * @property \Cake\I18n\FrozenDate $ngay_tra
 * @property int $quanly_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Quanly $quanly
 * @property \App\Model\Entity\User $user
 */
class Donglai extends Entity
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
        'ho_ten' => true,
        'tien_lai' => true,
        'phi_khac' => true,
        'ngay_tra' => true,
        'trang_thai_tra_lai' => true,
        'quanly_id' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'quanly' => true,
        'user' => true,
    ];
}
