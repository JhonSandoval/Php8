<?php
  if(empty($_POST['email']) || empty($_POST['titulo']) || empty($_POST['Contenido'])){  //si esta vacio?
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_POST['title'] ?></title>
</head>
<body>
    <h1>Mensaje de correo</h1>
    <table>
        <tr>
            <td>Correo:</td>
            <td>
                <?php echo $_POST['email'] ?>
            </td>
        </tr>
        <tr>
            <td>Titulo:</td>
            <td>
                <?php echo $_POST['titulo'] ?>
            </td>
        </tr>
        <tr>
            <td>Mensaje:</td>
            <td>
                <?php echo $_POST['Contenido'] ?>
            </td>
        </tr>
    </table>
</body>
</html>