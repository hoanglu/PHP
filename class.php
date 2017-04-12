<?php

class TinhToan {
    public $v1 ;//unused
    public $v2 ;//unused

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
        $kq = $v1 / $v2;//Kiem tra v2 !== 0 moi thuc hien phep chia
        return $kq;
    }
}