<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museu Apel·les Fenosa</title>
    <link rel="stylesheet" href="../resources/styles/css/main.css">
</head>
<header>
    <img src="resources/images/logoBlancMuseu.png" alt="Logo del museo">
    <nav>
        <a href="">Usuaris</a>
        <a href="">Vocabulari</a>
        <a href="">Ubicacions</a>
        <a href="">Copies de seguretat</a>
    </nav>
    <div>
        <p><?php echo $_SESSION['rol']; ?></p>
        <a href="/logout"><img src="resources/images/tancarSessió.svg" alt="Tancar sessió"></a>
    </div>
</header>