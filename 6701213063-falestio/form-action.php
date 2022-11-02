<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form hadling</title>
</head>

<body>
    <?php if (!empty($_POST)) : ?>
        Welcome, <?php echo htmlspecialchars($_POST["name"]); ?>!<br>
        Your email is <?php echo htmlspecialchars($_POST["email"]); ?>.<br>
    <?php else : ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Name: <input type="text" name="name"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit">
        </form>
    <?php endif; ?>

</html>