<html>

<head>
    <title>A Confirm Form</title>
</head>

<body>
    <form action="Form4Radio.php" method="GET">
        <br>
        Enter email address: <input type="text" size="16" maxlength="20" name="email">
        <br></br>
        May we contact you?
        <input type="radio" name="contact" value="Yes">
        <input type="radio" name="contact" value="No">
        <br>
        <input type="submit" value="Click to submit">
        <input type="reset" value="Erase to restart">
        <br></br>
        Sau khi thay đổi phương thức POST thành phương thức GET trong file Form4Radio, chương thực thi vẫn cho ra kết quả giống với khi  sử dụng phương thức POST
        <br>
        Tuy nhiên sau khi submit, trên thanh URL chỉ đến file thực thi Form4Radio.php, sử dụng phương thức GET sẽ thấy được dữ liệu còn với phương thức POST thì không 
    </form>
</body>

</html>