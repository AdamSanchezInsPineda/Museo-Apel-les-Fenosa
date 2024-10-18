<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museu Apel·les Fenosa</title>
    <link rel="stylesheet" href="../resources/styles/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<header>
    <a href="/registers"><img src="../resources/images/logoBlancMuseu.png" alt="Logo del museo"></a>
    <nav>
        <?php
        switch ($_SESSION['rol']){
            case "admin":
                echo "<a href='/users'>Usuaris</a>";
                echo "<a href=''>Vocabulari</a>";
                echo "<a href=''>Ubicacions</a>";
                echo "<a href=''>Copies de seguretat</a>";
                break;
            case "tecnic":
                echo "<a href='/users'>Usuaris</a>";
                echo "<a href=''>Ubicacions</a>";
                echo "<a href=''>Copies de seguretat</a>";
                break;
            case "convidat":
                echo "<a href=''>Ubicacions</a>";
                break;
        }
        ?>
    </nav>
    <div>
        <div>
            <p><?php echo $_SESSION['nom']; ?></p>
            <p><?php echo $_SESSION['rol']; ?></p>
        </div>
        <a href="/logout"><img src="../resources/images/tancarSessió.svg" alt="Tancar sessió"></a>
    </div>
</header>