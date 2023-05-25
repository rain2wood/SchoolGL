<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content=”IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <title>Sign in - Google Accounts</title>
    <style>
        /* Override "Email or Phone" text */
        .inputLabel:before {
            content: "Email or phone";
        }
    </style>
</head>

<body>
    <div class="inputContainer">
        <img src="google.png" alt="” width=”87" height="33">
        <h2 class=”login“>Sign in</h2>
        <h4 class="use">Use your Google Account</h4>
        <input type="email" class="gInput">
        <label class="inputLabel"></label>
        <div class="forgotContainer">
            <h5 class="forgot">Forgot Email?</h5>
        </div>
        <h4 class="guest">Not your computer? Use Guest mode to sign in privately.<span>Learn more</span></h4>
        <div class="buttonContainer">
            <p class="btnCreate">Create account</p>
            <p class="btnNext">Next</p>
        </div>
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
</body>

</html>