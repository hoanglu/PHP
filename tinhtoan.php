<?php
/**
1.1 Apache dong vai tro gi trong chuong trinh nay
<<<<<<< Updated upstream
-Apache thực hiện  HTTP request và nó sẽ đi tới nơi chứa cái file xử lý mà mình truyền trên URL.
=======
- Apache dong vai tro thuc hien gui HTTP Request. La luc minh go duong dan di toi cai ten file.
>>>>>>> Stashed changes
1.2 Viet lai chuong trinh nay o mode CLI: "php tinhtoan.php + 5 7" no se in ra man  hinh la: "5 + 7 = 12"
2. Neu khong dung trinh duyet lam sao test dc cai chuong trinh nay, voi dieu khong sua code.
   => Tool: PHPUnit, PostMan, Curl
   --Cái này em đang tìm hiểu,
3. Optimize cai code cua minh sao cho doc de hieu
4. [Hard] Bo di cai dong nay ma code van chay: include 'class.php'; Dieu kien la khong viet them gi o file tinhtoan.php
<<<<<<< Updated upstream
Nếu chỗ này nó ko include hay gì thì sao mình New Object được anh.
=======
Nếu không viết gì thì sao nó hiểu để mình gọi được cái đối tượng TinhToan() ra anh.
>>>>>>> Stashed changes
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tính Toán</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method='Post' action="tinhtoan_ketqua.php">
            <label>A</label>
            <input type="text" name="txta" value="">

            <input type="text" name="toantu" value="">

            <label>B</label>
            <input type="text" name="txtb" value="">

            <input type="submit" name="Tính">
        </form>
    </body>
</html>