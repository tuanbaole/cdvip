<?php namespace App\View\Helper;

use Cake\View\Helper;

class FuncHelper extends Helper
{
    public $helpers = ['Html'];

    // $thoi_gian_vay so thoi gian vay theo ngay thang hoac nam
    // $kieu_vay ngay tuan thang
    // $lai_xuat 1000/trieu, 1%
    // $kieu_lai_xuat 1 là nghin hoac 0 là %
    // $he_so 1 là co nhan goc hoac 0 là khong nhan goc
    // $tien_cho_vay so tien cho vay
    public function tinhtong($thoi_gian_vay, $kieu_vay,$lai_xuat,$kieu_lai_xuat,$he_so,$tien_cho_vay)
    {
    	$result = 0;
		if ($kieu_lai_xuat == 1) {
			if ($he_so == 1) {
	    		$result = $thoi_gian_vay * $lai_xuat * ($tien_cho_vay/1000000);
	    	} else {
	    		$result = $thoi_gian_vay * $lai_xuat;
	    	}
		} else {
			$result = $thoi_gian_vay * ($lai_xuat/100) * $tien_cho_vay;
		}
    	return $result;
        
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}