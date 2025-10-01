<?php
if (isset($_POST["btnRegister"])) {
    // Lấy dữ liệu từ form
    $name   = $_POST["txtUsername"] ?? "";
    $pass   = $_POST["txtPassword"] ?? "";
    $note   = $_POST["taNote"] ?? "";

    // CheckBox hôn nhân
    $marriageStatus = isset($_POST["chkMarriageStatus"]) ? "Đã kết hôn" : "Chưa kết hôn";

    // CheckBoxList (ngôn ngữ lập trình)
    $lang = "";
    if (isset($_POST["chkLang"])) {
        foreach ($_POST["chkLang"] as $item) {
            $lang .= $item . ", ";
        }
        $lang = rtrim($lang, ", ");
    }

    // RadioButton (giới tính, kỹ năng)
    $gender = $_POST["radGender"] ?? "";
    $skill  = $_POST["radSkill"] ?? "";

    // Select (địa chỉ)
    $address = $_POST["lstAddress"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả đăng ký</title>
</head>
<body>
    <h2 align="center">Form Đăng ký</h2>
    <table border="1" align="center" cellpadding="5" cellspacing="0">
        <tr>
            <td>Username:</td>
            <td><?php echo $name ?? ""; ?></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><?php echo $pass ?? ""; ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $gender ?? ""; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $address ?? ""; ?></td>
        </tr>
        <tr>
            <td>Enable Programming Language:</td>
            <td><?php echo $lang ?? ""; ?></td>
        </tr>
        <tr>
            <td>Skill:</td>
            <td><?php echo $skill ?? ""; ?></td>
        </tr>
        <tr>
            <td>Notes:</td>
            <td><?php echo $note ?? ""; ?></td>
        </tr>
        <tr>
            <td>Marriage Status:</td>
            <td><?php echo $marriageStatus ?? ""; ?></td>
        </tr>
    </table>
</body>
</html>
