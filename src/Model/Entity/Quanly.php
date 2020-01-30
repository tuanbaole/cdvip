<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quanly Entity
 *
 * @property int $id
 * @property string $ho_ten
 * @property \Cake\I18n\FrozenDate $ngay_sinh
 * @property int $so_cmt
 * @property \Cake\I18n\FrozenDate $ngay_cap
 * @property string $noi_cap
 * @property string $dia_chi
 * @property int $sdt
 * @property int $tinh_trang
 * @property string $img
 * @property \Cake\I18n\FrozenDate $thoi_gian_bat_dau_vay
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenDate $thoi_gian_ket_thuc_vay
 * @property float $so_tien_vay
 * @property float $lai_xuat_ngay
 * @property int $kieudonglai_id
 * @property int $ky_dong_lai
 * @property int|null $kieu_ky_dong_lai
 * @property int $so_ngay_vay
 * @property int|null $kieu_dong_lai
 * @property string $giay_to_the_chap
 * @property string $ghi_chu
 * @property string $ten_tai_san
 * @property string $so_khung
 * @property string $so_may
 * @property string $bien_so
 * @property string $imei
 * @property string $mat_khau
 * @property string $img_tai_san
 * @property int $taisan_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Kieudonglai $kieudonglai
 * @property \App\Model\Entity\Taisan $taisan
 */
class Quanly extends Entity
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
        'ngay_sinh' => true,
        'so_cmt' => true,
        'ngay_cap' => true,
        'noi_cap' => true,
        'dia_chi' => true,
        'sdt' => true,
        'tinh_trang' => true,
        'img' => true,
        'thoi_gian_bat_dau_vay' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'thoi_gian_ket_thuc_vay' => true,
        'so_tien_vay' => true,
        'lai_xuat_ngay' => true,
        'kieudonglai_id' => true,
        'ky_dong_lai' => true,
        'kieu_ky_dong_lai' => true,
        'so_ngay_vay' => true,
        'kieu_dong_lai' => true,
        'giay_to_the_chap' => true,
        'ghi_chu' => true,
        'ten_tai_san' => true,
        'so_khung' => true,
        'so_may' => true,
        'bien_so' => true,
        'imei' => true,
        'mat_khau' => true,
        'img_tai_san' => true,
        'taisan_id' => true,
        'user' => true,
        'kieudonglai' => true,
        'taisan' => true,
    ];
}
