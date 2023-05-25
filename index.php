<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content=”IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Gmail</title>
    <style>
        /* Override "Email or Phone" text */
        .inputLabel:before {
            content: "Email or Phone";
        }
    </style>
</head>

<body>
    <main class="inputContainer">
        <img src="google.png" alt="” width=”87" height="33">
        <h2 class=”login“>Login</h2>
        <h4 class="use">Use your Google Account</h4>
        <input type="email" class="gInput">
        <label class="inputLabel"></label>
        <div class="forgotContainer">
            <h5 class="forgot">Forgot Email?</h5>
        </div>
        <h4 class="guest"> Not your computer? Use guest mode to sign in privately.<span> Learn More </span></h4>
        <div class="buttonContainer">
            <a href="" class="btnCreate">Create account</a>
            <a href="" class="btnNext">Next</a>
        </div>
    </main>
    <script> // Bugfix: hide "Email or Phone" when user has inputted text
        const gInput = document.querySelector('.gInput');
        const inputLabel = document.querySelector('.inputLabel');

        gInput.addEventListener('input', function() {
            if (gInput.value !== '') {
                inputLabel.classList.add('active');
            } else {
                inputLabel.classList.remove('active');
            }
        });
    </script>
</body>

</html>