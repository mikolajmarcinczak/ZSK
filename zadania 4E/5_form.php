<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Podaj imię" autofocus autocomplete="off"><br><br>
        <input type="number" name="age" placeholder="Podaj wiek"><br><br>
        <input type="submit" name="button" value="Zatwierdź">
    </form>

    <?php 
        if (!empty($_POST['name']) && !empty($_POST['age'])) {
            $name = $_POST['name'];
            $corname = substr(ucfirst(strtolower(trim($name))), 0, 10);
            $age = $_POST['age'];

            echo <<< TABLE
            <table><tr><td>Przed poprawą:</td><td> $name  </td><td>  $age  </td></tr><tr><td>Po poprawie:</td><td>  $corname  </td><td>  $age  </td></tr></table>
            TABLE;
        }
    ?>

</body>
</html>