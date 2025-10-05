<h2><?php echo CONTACT; ?></h2>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Liên Hệ</title>
    <style>
        .form-group {
    display: flex;
    align-items: center; /* Căn chỉnh label và input theo chiều dọc */
    margin-bottom: 5px; /* Giảm khoảng cách giữa các trường */

    .label-text {
    width: 80px; /* Chiều rộng cố định cho nhãn */
    text-align: left;
    font-size: 0.9em;
}

.input-field {
    flex-grow: 1; /* Cho phép input lấp đầy phần còn lại */
    padding: 5px;
    border: 1px solid #ccc;
    /* Loại bỏ/giảm radius để giống giao diện cũ */
    border-radius: 0; 
    /* Đặt chiều cao input để tạo các ô trống đồng đều như ảnh */
    height: 25px; 
    box-sizing: border-box; /* Đảm bảo padding không làm tăng chiều rộng */
}
}

    </style>
</head>
<body>
<div class="container">
   <form method="post" class="contact-form">
        
        <div class="form-group">
            <label for="fullname" class="label-text"><?php echo FULLNAME; ?>:</label>
            <input type="text" id="fullname" name="fullname" class="input-field" required>
        </div>

        <div class="form-group">
            <label for="birthday" class="label-text"><?php echo BIRTHDAY; ?>:</label> 
            <input type="text" id="birthday" name="birthday" class="input-field">
        </div>

        <div class="form-group">
            <label for="address" class="label-text"><?php echo ADDRESS; ?>:</label>
            <input type="text" id="address" name="address" class="input-field">
        </div>

        <div class="form-group">
            <label for="email" class="label-text"><?php echo EMAIL; ?>:</label>
            <input type="email" id="email" name="email" class="input-field">
        </div>

        <div class="form-group">
            <label for="phone" class="label-text"><?php echo PHONE; ?>:</label>
            <input type="text" id="phone" name="phone" class="input-field">
        </div>

        <div class="form-group textarea-group">
            <label for="note" class="label-text"><?php echo NOTE; ?>:</label>
            <textarea id="note" name="note" class="textarea-field" rows="5"></textarea>
        </div>

        <div class="button-group">
            <input type="reset" class="btn nhap-lai" value="<?php echo BTN_RESET_CONTACT; ?>">
            <input type="submit" class="btn lien-he" value="<?php echo BTN_SEND_CONTACT; ?>">
        </div>
        
    </form>
</div>
    </div>
</body>
</html>