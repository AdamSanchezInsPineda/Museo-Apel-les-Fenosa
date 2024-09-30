<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/styles/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto Serif' rel='stylesheet'>
</head>
<body>
    <div>
        <div>
            <img src="resources/images/logoMuseu.png" alt="Logo del museo">
        </div>
        <div>
            <form action="/login" method="post">

                <h1>Inici de Sesió</h1>

                <label for="nom">Usuari</label>
                <input type="text" id="nom" name="nom" class="text" required>

                <label for="password">Contrasenya</label>
                <input type="password" id="password" name="password" class="text" required>

                <p><?php echo $error; ?></p>
                
                <input type="submit" value="Entrar" >

            </form>
        </div>
    </div>
</body>
</html>