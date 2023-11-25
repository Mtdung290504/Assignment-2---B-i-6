<?php
    $mang_so = array();
    $mang_duy_nhat = array();
    $so_lan = array();
    if (isset($_POST['nhap_mang'])) {
        $mang_so = explode(",", $_POST['nhap_mang']);
        $mang_duy_nhat = array_unique($mang_so);
        $so_lan = array_count_values($mang_so);
    }
    $chuoi = "";
    foreach ($so_lan as $key => $value) {
        $chuoi = $chuoi . $key . ":" . $value . " ";
    }
    function mang_duy_nhat($mang_so) {
        if (isset($mang_so[0])) {
            echo implode(", ", $mang_so);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="POST">
        <table border="0">
            <thead>
                <tr>
                    <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG
                        DUY NHẤT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mảng:</td>
                    <td><input type="text" name="nhap_mang" value="<?php echo $_POST['nhap_mang']; ?>"></td>
                </tr>
                <tr>
                    <td>Số lần xuất hiện:</td>
                    <td><input type="text" name="so_lan_xuat_hien" value="<?php echo $chuoi; ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td>Mảng duy nhất:</td>
                    <td><input type="text" name="mang_duy_nhat" value="<?php mang_duy_nhat($mang_duy_nhat); ?>" disabled="disabled"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Thực hiện"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>