<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 50%;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <form action="" method="post">
        <h1>Login Page</h1> 
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password">
        <br>

        <input type="submit" value="Đăng nhập">
    </form>
</body>

</html>