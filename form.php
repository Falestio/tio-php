<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas form</title>
</head>
<body>
    <?php
        $user = [
            "email" => "falestio@gmail.com",
            "password" => "admin123"
        ];

        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];
        $credentialMatch = false;
        $percobaan = false;

        if ($userEmail === $user["email"] and $userPassword === $user["password"]) {
            $credentialMatch = true;
            $percobaan = true;
        } elseif (!empty($userEmail)) {
            $percobaan = true;
        }
    ?>

    <?php if(!$credentialMatch and $percobaan): ?>
    Login Gagal
    <?php endif; ?>
    
    <?php if (!$credentialMatch): ?>        
    <h1>Login</h1>

    <form name="login" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Submit">
    </form>
    <?php endif; ?>

    <?php if ($credentialMatch): ?>
    <h1>Login Berhasil</h1>
    <?php endif; ?>

</body>
</html>

