<!doctype html>
<html lang="fr
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header class="header">

</header>
    <?php
        if (!isset($_POST['number'])) {
            include ('form.php');
        } else {
            include ('results.php');
        }
    ?>
<footer class="footer">

</footer>
</body>
</html>