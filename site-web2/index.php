<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Sinh Viên</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=1">

</head>
<body>
   <div id="container">
    <div id="head"><?php include("pages/head.php"); ?></div>
    <div id="menu"><?php include("pages/menu.php"); ?></div>

    <div id="main">
        <div id="left"><?php include("pages/left.php"); ?></div>
        <div id="center">
            <?php include("pages/center.php"); ?>
        <div class="tab-container">
             <div class="tab" data-tab="tab1">Calculate</div>
             <div class="tab" data-tab="tab2">DrawTable</div>
             <div class="tab" data-tab="tab3">Register

             </div>
             <div class="tab" data-tab="tab4">Contact</div>
             <div class="tab" data-tab="tab5"> Result Register</div>

        </div>

        <div class="tab-content" id="tab1"><?php include("pages/Calculate.php"); ?></div>
        <div class="tab-content" id="tab2" style="display: none;">Nội dung của Tab 2</div>
        <div class="tab-content" id="tab3" style="display: none;"> <?php include("pages/Register.php"); ?></div>
        <div class="tab-content" id="tab4" style="display: none;">Nội dung của Tab 4</div>
        <div class="tab-content" id="tab5" style="display: none;"><?php include("pages/ResultRegister.php"); ?> </div>

    </div>    
    
    
    </div>
    </div>

    <div id="footer"><?php include("pages/footer.php"); ?></div>
</div>

<script src ="script.js"></script>

</body>
</html>
