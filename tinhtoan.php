<?php
/**
1.1 Apache dong vai tro gi trong chuong trinh nay
1.2 Viet lai chuong trinh nay o mode CLI: "php tinhtoan.php + 5 7" no se in ra man  hinh la: "5 + 7 = 12"
2. Neu khong dung trinh duyet lam sao test dc cai chuong trinh nay, voi dieu khong sua code.
   => Tool: PHPUnit, PostMan, Curl
3. Optimize cai code cua minh sao cho doc de hieu
4. [Hard] Bo di cai dong nay ma code van chay: include 'class.php'; Dieu kien la khong viet them gi o file tinhtoan.php
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tính Toán</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include 'class.php';
            $a      = isset($_POST['txta'])?$_POST['txta']:null;
            $b      = isset($_POST['txtb'])?$_POST['txtb']:null;
            $toantu = isset($_POST['toantu'])?$_POST['toantu']:null;
            $tinh   = new TinhToan();
            $tinh->calculate($toantu, $a, $b);
            $tinh->display();
        ?>
        <form method='Post'>
            <label>A</label>
            <input type="text" name="txta" value="<?php echo $a?>">

            <input type="text" name="toantu" value="<?php echo $toantu?>">

            <label>B</label>
            <input type="text" name="txtb" value="<?php echo $b?>">

            <input type="submit" name="Tính">
        </form>
    </body>
</html>