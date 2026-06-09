<?php
session_start();

if($_SESSION['status'] != "login"){
    header("location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <style>
        body{
            font-family:Arial, sans-serif;
            background:linear-gradient(135deg,#ffb6c1,#ffc0cb);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .box{
            background:white;
            padding:40px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
        }

        h2{
            color:#ff4f81;
            margin-bottom:15px;
        }

        .btn{
            background:#ff4f81;
            color:white;
            padding:10px 20px;
            border:none;
            border-radius:5px;
            cursor:pointer;
            margin-top:15px;
        }

        .btn:hover{
            background:#e63e70;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Selamat Datang</h2>

    <p>
        <?php echo htmlspecialchars($_SESSION['username']); ?>
        (<?php echo htmlspecialchars($_SESSION['level']); ?>)
    </p>

    <button class="btn" onclick="window.location.href='logout.php'">
        Logout
    </button>
</div>

</body>
</html>