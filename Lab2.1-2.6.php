<html>

<head>
    <title>A Confirm Form</title>
</head>

<body>
    <form action="Form4Radio.php" method="POST">
        <br>
        Enter email address: <input type="text" size="16" maxlength="20" name="email">
        <br></br>
        May we contact you?
        <input type="radio" name="contact" value="Yes">
        <input type="radio" name="contact" value="No">
        <br>
        <input type="submit" value="Click to submit">
        <input type="reset" value="Erase to restart">
    </form>
</body>
</html>
