<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="asset/css/login.css">
</head>

<body>
    <div class="loginbox">
        <h2 class="title"><b><i>Login Page</i></b></h2>

        <form method="POST" action="<?php echo base_url('login/p'); ?>" id="login">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Masukkan Username">
            <?= form_error('username', '<small class="error"></small>'); ?>
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Masukkan Password">
            <?= form_error('password', '<small class="error"></small>'); ?>
            <button type="submit" class="lgn" name="login">LOGIN</button>
            <br />
        </form>

    </div>

</body>

</html>