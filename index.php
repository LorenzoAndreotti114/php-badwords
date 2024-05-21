<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <div>

        <h1>INSERISCI LA PAROLA DA CENSURARE</h1>

        <form action="censored.php" method="GET">

            <label for="badword">inserisci la parola</label>
            <input type="text" id="badword" name="badword">

            <div>
                <label for="">inserire testo</label>
                <input type="text" id="message" name="message">
            </div>
            
            <input type="submit" value="submit">

        </form>

    </div>

</body>
</html>