<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tính Toán</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        include 'class.php';

        $a = $_POST['txta'];
        $b = $_POST['txtb'];
        $toantu = $_POST['toantu'];
        $kq= '';
        if(isset($a) && isset($b)){
            $tinh = new TinhToan();
            switch ($toantu) {
                case '+':
                    $kq = $tinh->Tong($a,$b);
                    break;
                case '-':
                    $kq = $tinh->Hieu($a,$b);
                    break;
                case '*':
                    $kq = $tinh->Tich($a,$b);
                    break;
                case '/':
                    $kq = $tinh->Thuong($a,$b);
                    break;
            }
        }
        
    ?>
    <form method='Post'>
        <label>A</label>
        <input type="text" name="txta" value="<?php echo $a?>">

        <input type="text" name="toantu" value="<?php echo $toantu?>">

        <label>B</label>
        <input type="text" name="txtb" value="<?php echo $b?>">

        <input type="submit" name="Tính">
    </form>

        <?php echo  $a  . " $toantu " .  $b ." = " .$kq;?>
    </body>
</html>