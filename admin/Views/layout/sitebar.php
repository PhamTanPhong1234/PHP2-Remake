<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../Img/rAKIA.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: Lexend Deca;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #000;
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
            background-color: #FFD33A;
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
    </style>
</head>

<body>
    <div id="sitebar">
        <div class="admin-profile">
            <div class="img"><img src="../../Img/rAKIA.png" alt=""></div>
            <p class="name" style="font-weight : 600;">ADMIN</ơ>
                <br>
            <p style="font-size : 10px;">Chào Mừng Quay Trở Lại</p>
        </div>
        <div class="list">
            <ul>
                <li><a style="color: #000;" href="./index.php?controller=product&action=index"><i class="fa-solid fa-list"></i>Danh Sách Sản Phẩm</a></li>
                <li><a href="index.php?controller=product&action=create"><i class="fa-solid fa-square-plus"></i>Thêm Sản Phẩm</a></li>
                <li><a href="."><i class="fa-solid fa-square-plus"></i>Thêm Danh Mục</a></li>
                <li><a href="./index.php?controller=cart&action=index"><i class="fa-solid fa-list"></i></i>Danh Sách Đơn Hàng</a></li>
                <li><a href="./index.php?controller=users&action=index"><i class="fa-solid fa-list"></i>Danh Sách Người Dùng</a></li>
                <li><a href="./index.php?controller=users&action=index"><i class="fa-solid fa-list"></i>Thêm Người Dùng</a></li>
            </ul>
        </div>
    </div>
</body>

</html>