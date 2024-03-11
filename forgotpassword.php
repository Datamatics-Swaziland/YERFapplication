<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Send email to the user for resetting the password
    $to = $email;
    $subject = "Password Reset";
    $message = "Please click the link below to reset your password.";
    $headers = "From: siyamukeladlamini1@gmail.com"; // Replace with your email address

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Email sent successfully!'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Failed to send email. Try again Later'); window.location='forgotpassword.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>

    <style>
        .form-container {
            width: 450px;
            background-color: #ffffff;
            padding: 30px;
            font-size: 14px;
            font-family: inherit;
            color: #212121;
            display: flex;
            flex-direction: column;
            gap: 10px;
            box-sizing: border-box;
            border-radius: 20px;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.084), 0px 2px 3px rgba(0, 0, 0, 0.168);
            margin: 0 auto;
            margin-top: 220px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
         
   

        .form-container button:active {
            scale: 0.95;
        }

        .form-container .logo-container {
            text-align: center;
        }

        .form-container .form {
            display: flex;
            flex-direction: column;
        }

        .form-container .form-group {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .form-container .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container .form-group input {
            width: 100%;
            padding: 12px 0px;
            border-radius: 6px;
            font-family: inherit;
            border: 1px solid #ccc;
        }

        .form-container .form-group input::placeholder {
            opacity: 0.5;
        }

        .form-container .form-group input:focus {
            outline: none;
            border-color: #1778f2;
        }

        .form-container .form-submit-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inherit;
            color: #fff;
            background-color: #212121;
            border: none;
            width: 100%;
            padding: 12px 16px;
            font-size: inherit;
            gap: 8px;
            margin: 12px 0;
            cursor: pointer;
            border-radius: 6px;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.084), 0px 2px 3px rgba(0, 0, 0, 0.168);
        }

        .form-container .form-submit-btn:hover {
            background-color: #313131;
        }

        .form-container .link {
            color: #1778f2;
            text-decoration: none;
        }

        .form-container .signup-link {
            align-self: center;
            font-weight: 500;
        }

        .form-container .signup-link .link {
            font-weight: 400;
        }

        .form-container .link:hover {
            text-decoration: underline;
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
    <div class="form-container">
        <div class="logo-container">
        <h1>Forgot Password</h1>  
        </div>

        <form class="form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required="">
            </div>

            <button class="form-submit-btn" type="submit">Send Email</button>
        </form>

        <p class="signup-link">
            Don't have an account?
            <a href="#" class="signup-link link"> Sign up now</a>
        </p>
    </div>
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