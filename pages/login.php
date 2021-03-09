<?php require "../php-scripts/login_script.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/styles/index.css" />
    <link rel="stylesheet" type="text/css" href="/styles/footer.css" />
    <link rel="stylesheet" href="/styles/login.css" />
    <title>CPS-ASSIGNMENT</title>
</head>

<body>
    <?php include './pages/header.php'; ?>
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
                <div class="form-group">
                    <input type="submit" class="fadeIn fourth" value="Login">
                </div>
            </form>

            <div id="formFooter">
                <p>Don't have an account? <a class="underlineHover" href="/pages/register.php">Sign up now</a>.</p>
            </div>

        </div>
    </div>

    <?php include './pages/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>