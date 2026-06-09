<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffb6c1, #ffc0cb);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-box{
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
            width:350px;
        }

        .login-box h2{
            text-align:center;
            color:#ff4f81;
            margin-bottom:20px;
        }

        table{
            width:100%;
        }

        td{
            padding:8px;
        }

        input[type="text"],
        input[type="password"]{
            width:100%;
            padding:10px;
            border:1px solid #ffb6c1;
            border-radius:5px;
        }

        input[type="submit"]{
            background:#ff4f81;
            color:white;
            border:none;
            padding:10px;
            width:100%;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        input[type="submit"]:hover{
            background:#e63e70;
        }

        .error{
            color:red;
            text-align:center;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>LOGIN</h2>

    <?php
    if(isset($_GET['pesan']) && $_GET['pesan']=="gagal"){
        echo "<p class='error'>Username atau Password Salah!</p>";
    }
    ?>

    <form action="login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>

            <tr>
                <td>Password</td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>