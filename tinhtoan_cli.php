<?php
$a = $argv[1];
$b = $argv[2];
$operator = $argv[3];
switch($operator){
    case '+':
        $kq = $a + $b;
        break;
}
print 'Ket qua cua '. $a . $operator . $b .'la: '. $kq;
