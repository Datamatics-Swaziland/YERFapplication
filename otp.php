<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
    $input3 = $_POST["input3"];
    $input4 = $_POST["input4"];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        .form {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: space-around;
            width: 300px;
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin: 0 auto;
            margin-top: 220px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            color: black
        }

        .message {
            color: #a3a3a3;
            font-size: 14px;
            margin-top: 4px;
            text-align: center
        }

        .inputs {
            margin-top: 10px
        }

        .inputs input {
            width: 32px;
            height: 32px;
            text-align: center;
            border: none;
            border-bottom: 1.5px solid #d2d2d2;
            margin: 0 10px;
        }

        .inputs input:focus {
            border-bottom: 1.5px solid royalblue;
            outline: none;
        }

        .action {
            margin-top: 28px;
            padding: 12px 16px;
            border-radius: 8px;
            border: none;
            background-color: black;
            color: white;
            cursor: pointer;
            align-self: center;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <form class="form">
        <div class="title">OTP</div>
        <div class="title">Verification Code</div>
        <p class="message">We have sent a verification code to your mobile number</p>
        <div class="inputs"> <input id="input1" type="text" maxlength="1"> <input id="input2" type="text" maxlength="1"> <input id="input3" type="text" maxlength="1"> <input id="input4" type="text" maxlength="1"> </div> <button class="action">verify me</button>
    </form>
</body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>© <?php echo date("Y"); ?> Bakhombisile Dlamini Task Tracker. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>


</html>