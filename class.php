<?php

class TinhToan {
    public $v1 ;
    public $v2 ;

    public function Tong($v1, $v2) {
        $kq = $v1 + $v2;
        return $kq;
    }

    public function Hieu($v1, $v2){
        $kq = $v1 - $v2;
        return $kq;
    }

    public function Tich($v1, $v2){
        $kq = $v1 * $v2;
        return $kq;
    }

    public function Thuong($v1, $v2){
        $kq = $v1 / $v2;
        return $kq;
    }
}