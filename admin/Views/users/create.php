<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - Admin</title>
    <link rel="shortcut icon" type="image/png" href="../../Img/rAKIA.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
        /* css chung */
        * {
            font-family: Lexend Deca;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #365486;
        }

        #sitebar {
            width: 25%;
            float: left;

        }

        .admin-profile {
            width: 100%;
        }

        .admin-profile .img {
            margin-top: 2em;
            width: 100%;
            text-align: center;
        }

        .img img {
            height: 80px;
            border: 3px solid #FFF;
            width: 80px;
            border-radius: 50%;
        }

        p {
            color: white;
            margin-top: 10px;
            width: 100%;
            text-align: center;
        }

        .list {
            width: 100%;
            padding: 0 20px;
        }

        ul {

            margin-top: 20px;
            border-top: 1px solid #fff;
            list-style: none;
            padding: 0 20px;

        }

        li {
            margin: 20px 0;
            width: 100%;
            border-radius: 7px;
        }

        li:hover {
            background-color: #C5DEFD;

        }

        li i {
            padding: 0 15px;
        }

        a {
            line-height: 50px;
            text-decoration: none;
            color: white;
        }

        li:hover a {
            color: #000;
        }

        #main-content {
            margin-top: 6vh;
            float: right;
            width: 75%;
            height: 94vh;
            background-color: #F5F5F5;
            overflow: auto;
        }

        /* css chung */
        #main-content .add-product-title {
            width: 70vw;
            height: 90vh;
            background-color: white;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            border-radius: 7px;
            box-shadow: 2px 2px 2px 2px #ccc;
            padding: 0 10px;
        }

        #main-content .add-product-title .main-title {
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #FFD33A;
        }

        .logout {
            position: absolute;
            top: 0;
            right: 0;
            width: 30px;
            height: 30px;
            background-color: rebeccapurple;
            text-align: center;
            cursor: pointer;
            background-color: #FFD33A;
        }

        .logout a {
            color: #000;
            line-height: 30px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            text-align: center;
            font-weight: 600;
        }

        th {
            text-align: center;
            background-color: #002D33;
            color: #fff;
        }

        td img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }

        td a {
            display: inline-block;
            padding: 2px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        td a:hover {
            background-color: #45a049;
        }

        form {
            width: 90%;
            height: 70vh;
            margin-left: auto;
            margin-right: auto;
        }

        input {
            width: 100%;
            height: 50px;
            font-size: 25px;
            padding-left: 20px;
        }

        input[type="submit"] {
            margin-top: 30px;
            background-color: #000;
            color: #fff;
            border: 2px solid #000;
            transition: 0.3s all;
        }

        input[type="submit"]:hover {
            margin-top: 30px;
            background-color: transparent;
            color: #000;
        }
        label{
            font-size: 20px;
            line-height: 30px;
        }
    </style>
</head>

<body>
    <?php include('Views/layout/sitebar.php'); ?>

    <div id="main-content">
        <!-- có thể thay đổi nội dung -->
        <h1 style="width: 100%;text-align: center;padding-top: 30px;">Thêm Người Dùng
        </h1>
        <form action="">
            <label for="username">Tên Người Dùng:</label><br>
            <input type="text" name="username"><br>
            <label for="email">Email: </label><br>
            <input type="email" name="email"><br>
            <label for="address"> Địa Chỉ:</label><br>
            <input type="text" name="address"><br>
            <label for="phoneNumber">Số Điện Thoại:</label><br>
            <input type="text" name="phoneNumber"><br>
            <label for="password">Mật Khẩu: </label><br>
            <input type="password" name="password"><br>
            <label for="confirmPass">Xác Nhận Mật Khẩu:</label><br>
            <input type="password" name="confirmPass"><br>
            <input type="submit" name="enter">
        </form>
        <!-- có thể thay đổi nội dung -->
    </div>
    <div class="logout">
        <a href="../index.php?controller=home&action=index"> <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>

</html>