<?php 

    $badword = $_GET["badword"];

    $message = $_GET["message"];

    $censored_message = str_ireplace($badword, "***", $message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>

        <h2>Testo base</h2>
        <div><?php echo $message ?></div>

        <h2>Parola censurata</h2>
        <div> <?php echo $badword ?> </div>

        <h2>messaggio censurato</h2>
        <div> <?php echo $censored_message ?> </div>

    </div>

</body>

</html>