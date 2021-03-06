<?php require "../php-scripts/register_script.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="/styles/login.css" />
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <h2>Welcome to P.2.S</h2>
            </div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input type="text" id="login" class="fadeIn second" name="username" placeholder="Login">
                    <label for="login" class="help-block"><?php echo $username_err; ?></label>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" value="<?php echo $username; ?>">
                    <label for="password" class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="fadeIn second" value="<?php echo $confirm_password; ?>">
                    <label for="confirm_password" class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="fadeIn fourth" value="Submit">
                    <input type="reset" class="fadeIn fourth" value="Reset">
                </div>
            </form>

            <div id="formFooter">
                <p>Already have an account? <a class="underlineHover" href="login.php">Login here</a>.</p>
            </div>

        </div>
    </div>
</body>

</html>