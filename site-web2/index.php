<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Sinh Viên</title>
</head>
<body>
    <div id="container" style="width:100%; margin:auto;">
        
        <!-- Header -->
        <div id="head">
            <?php include("pages/head.php"); ?>
        </div>

         <div id="menu">
            <?php include("pages/menu.php"); ?>
        </div>


        <!-- Menu bên trái -->
        <div id="left" style="width:20%; float:left;">
            <?php include("pages/left.php"); ?>
        </div>

        <!-- Nội dung chính -->
        <div id="center" style="width:60%; float:left;">
            <?php include("pages/center.php"); ?>
        </div>

        <!-- Menu bên phải -->
        <div id="right" style="width:20%; float:left;">
            <?php include("pages/right.php"); ?>
        </div>

        <!-- Footer -->
        <div id="footer" style="clear:both;">
            <?php include("pages/footer.php"); ?>
        </div>
    </div>
</body>
</html>
