<!-- Form chọn ngôn ngữ -->
<div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">

<div>
    <form id="formVi" method="post" style="display:inline;">
        <!-- giữ nguyên page hiện tại -->
        <input type="hidden" name="page" value="<?php echo $page; ?>">
        <button type="submit" name="btnVietnamese"><?php echo VIETNAMESE; ?></button>
    </form>

    <form id="formEn" method="post" style="display:inline; margin-left:10px;">
        <input type="hidden" name="page" value="<?php echo $page; ?>">
        <button type="submit" name="btnEnglish"><?php echo ENGLISH; ?></button>
    </form>
</div>


<div style="margin-right: 20px;">
    <a href="index.php?page=home" 
       tabindex="1" accesskey="h" 
       style="text-decoration:none; font-size:14px; font-variant:small-caps;">
       <?php echo HOME; ?>
    </a> | 

    <a href="index.php?page=contact" 
       tabindex="2" accesskey="c" 
       style="text-decoration:none; font-size:14px; font-variant:small-caps;">
       <?php echo CONTACT; ?>
    </a> | 

    <a href="index.php?page=introduction" 
       tabindex="3" accesskey="i" 
       style="text-decoration:none; font-size:14px; font-variant:small-caps;">
       <?php echo INTRODUCTION; ?>
    </a> | 

    <a href="index.php?page=login" 
       tabindex="4" accesskey="l" 
       style="text-decoration:none; font-size:14px; font-variant:small-caps;">
       <?php echo LOGIN; ?>
    </a>
</div>
</div>