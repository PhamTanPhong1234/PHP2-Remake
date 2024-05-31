<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }

        .container,
        .err {
            width: 90%;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: space-around;
        }

        .container .l1 {
            margin-top: 100px;
            border-radius: 10px;
            background-color: #f9f9f9;
            width: 45%;
            height: 500px;
            box-shadow: 3px 3px rgb(189, 189, 189);
        }

        l1.form1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style the form container */
        form {
            width: 100%;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style the form header */
        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Style labels and input fields */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            border: 1px solid cornflowerblue;
        }


        /* Style radio buttons and labels */
        .payment-method input[type="radio"] {
            margin-right: 5px;
        }

        .payment-method label {
            display: inline;
            font-weight: normal;
            margin-right: 10px;
        }

        /* Style the submit button */
        input[type="submit"] {
            width: 95%;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
            font-size: 20px;
            font-weight: 700;
            background-color: #000;
            border-radius:10px ;
            border: 2px solid #000;
            transition: 0.3s all;
        }

        input[type="submit"]:hover {
            background-color: transparent;
            color: #000;

        }

        /* Apply styles to the table */
        table {
            width: 95%;
            margin: 0 auto;
            color: white;
            border-collapse: collapse;

        }

        /* Style table headers */
        th {
            background-color: black;
            font-weight: bold;
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        /* Style table cells */
        td {
            height: 20px;
            padding: 8px;
            color: black;
            border: 1px solid #ffffff;
        }

        tr {
            height: 20px;
        }

        .errbox {
            margin-top: 11%;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            height: 40vh;
            background-color: white;
            border-radius: 10px;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
            text-align: center;

        }

        .errbox h3 {
            margin-top: 100px;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: 600;
            padding-bottom: 30px;
            /* 
    Cỡ chữ 20px cho thẻ h3 bên trong errbox */
        }

        .errbox>a {

            color: rgb(255, 0, 0);
            /* Màu chữ xanh dương cho các liên kết */
            text-decoration: none;
            transition: 0.3s;
            line-height: 50px;
            padding: 15px 50px;
            border-radius: 10px;
            color: #fff;
            border: 2px solid #000;
            background-color: black;
        }

        .errbox a:hover {
            color: #000;
            background-color: transparent;
            /* Gạch chân khi di chuột qua liên kết */
        }

        .errbox i {
            font-style: italic;
            /* Ký hiệu nghiêng cho thẻ i bên trong errbox */
        }
    </style>
</head>

<body>
    <?php
    include 'Views/Layouts/header.php';
    if (isset($_SESSION["username"])) {
        echo '<div class="container">
        <div class="l1 form1">
            <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]);
        echo  '?>" method = "POST">
                <h2>Customer Information</h2>
                <label for="address">Address: </label>
                <input type="text" name="address"> 
                <label for="address">Phone Number: </label>
                <input type="text" name="number">
                <label for="">Pay options: </label>
                <div class="payment-method">
                    <input type="radio" id="credit" name="payment" value="credit">
                    <label for="credit">Credit card</label>
                    <input type="radio" id="paypal" name="payment" value="paypal">
                    <label for="paypal">Apple Pay</label>
                    <input type="radio" id="paypal" name="payment" value="paypal">
                    <label for="paypal">Payment on delivery</label>
                </div>
                <input type="submit" value="Order Now">';
        // echo '<span style="color:blue;">' . $message . '</span>';
        echo  '</form>
        </div>
        <div class="l1 table">
            <h2 style="margin-top:10px;">The Orders</h2>
            <table>
                <tr>
                    <th>Product Id</th>
                    <th>Product name</th>
                    <th>Prices</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>TAP2</td>
                    <td>Apple Ipad pro 2020</td>
                    <td>23.000.000đ</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>AM1</td>
                    <td>Apple Macbook Air M1 </td>
                    <td>23.000.000đ</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>LAS2</td>
                    <td>Asus Zenbook 14 Oled</td>
                    <td>25.000.000đ</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>MAP2</td>
                    <td>Iphone 15 Pro Max</td>
                    <td>33.000.000đ</td>
                    <td>2</td>
                </tr>
            </table>
        </div>
    </div>';
    } else {
        echo '<div class="err">
        <div class="errbox">
            <h3>You must login to use this shopping cart function</h3>
            <a href="./index.php?controller=login&action=theme">Login Now</a><br><br>
        </div>
    </div>';
    }
    include ('Views/Layouts/footer.php')
    ?>

</body>

</html>
