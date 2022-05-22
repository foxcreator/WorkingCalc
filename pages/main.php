<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once 'vendor/autoload.php';
require_once 'helper.php';

$a = calcDay($_POST['timein'], $_POST['timeout']);
?>
<div>
<form action="/" method="post">
    <input type="time"
           name="timein"
           class="form-control"
           id="timein"
    >
    <input type="time"
           name="timeout"
           class="form-control"
           id="timeout"
    >

    <button type="submit" class="btn btn-outline-primary form-control">OK</button>

    <span><?= $a ?></span>
</form>


</div>

<div>
    <?php $b = calcDay($_POST['timein'], $_POST['timeout']); ?>
    <form action="/" method="post">
        <input type="time"
               name="timein"
               class="form-control"
               id="timein"
        >
        <input type="time"
               name="timeout"
               class="form-control"
               id="timeout"
        >

        <button type="submit" class="btn btn-outline-primary form-control">OK</button>

        <span><?= $b ?></span>
    </form>


</div>

</body>
</html>