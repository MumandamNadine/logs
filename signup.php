<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Signup</title>
</head>
<body>
    <form name="f1" method="post" action="process.php">
        <caption><b>SIGNUP PAGE</b></caption><br>
        <label>Username&nbsp;&nbsp;</label>
        <input type="text" name="Uname" required><br>
        <div>
            <label>Password&nbsp;&nbsp;</label>
            <input type="password" id="password" name="pwd" pattern="(?=.*\d)(?=.*)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain a lowercase and uppercase letter, a number, and at least 8 characters" required >
            <span class="password-toggle" onclick="togglePasswordVisibility()">
                <img src="eye.png" alt="Toggle Password Visibility" width="20">
            </span>
        </div><br>
        <input type="submit" name="submit" style="background-color: rgb(27, 184, 184);"><br>
        <hr>
        <br>
        <p>Already have an account? Click <a href="login.php">Login</a> to Sign in.</p>
    </form>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var passwordToggle = document.querySelector(".password-toggle img");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.src = "eye-off.png";
            } else {
                passwordField.type = "password";
                passwordToggle.src = "eye.png";
            }
        }
    </script>
</body>
</html>
