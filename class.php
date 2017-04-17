<?php

class TinhToan {
    public $v1 = '';
    public $v2 = '';
    public $operater = '';
    public $kq = '';

    public function calculate ($operater, $v1, $v2) {
        $kq = '';
        switch ($operater) {
            case '+':
                return $kq = $v1 + $v2;
                break;
            case '-':
                return $kq = $v1 - $v2;
                break;
            case '*':
                if($v1 !== 0 && $v2 !== 0){
                    return $kq = $v1 * $v2;  
                }
                
                break;
            case '/':
                if($v1 !== 0 && $v2 !== 0){
                   return $kq = $v1 / $v2; 
                }
                break;
        }
   }

   public function display() {
       return 'Kết quả ' . $this->v1 . ' ' . $this->operater . ' ' . $this->v2 . ' là : ' . $this->kq; 
   }
}