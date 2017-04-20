<?php

class TinhToan {
    public $v1 = '';
    public $v2 = '';
    public $operater = '';
    public $kq = '';
    
    /**
     * Phuong thuc khoi tao
     * Magic function, __
     */
    public function __construct($v1, $v2, $operator = '+')
    {
        $this->v1 = $v1;
        $this->v2 = $v2;
        $this->operator = $operator;
    }

    public function calculate () {
        switch ($operater) {
            case '+':
                $kq = $this->v1 + $this->v2;
                break;
            case '-':
                $kq = $this->v1 - $this->v2;
                break;
            case '*':
                $kq = $this->v1 * $this->v2;
                break;
            case '/':
                if($this->v2 !== 0){
                   $kq = $this->v1 / $this->v2; 
                }
                break;
        }
        $this->kq = $kq;
   }

   public function display() {
       return 'Kết quả ' . $this->v1 . ' ' . $this->operater . ' ' . $this->v2 . ' là : ' . $this->kq; 
   }
}
