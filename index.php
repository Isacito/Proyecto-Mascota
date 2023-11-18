<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <title>Mi Página Web</title>
    <link rel="icon" type="image/png" href="/Proyecto_mascotas/img/icon.png">
    <style>
        #welcome-icon {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgb(190,241,208);
            background: rgb(190,241,208);
            background: linear-gradient(315deg, rgba(190,241,208,1) 0%, rgba(0,194,255,1) 27%, rgba(58,255,127,1) 50%, rgba(0,207,255,1) 67%, rgba(255,255,255,1) 100%);            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 1; 
            transition: opacity 1s ease; 
        }

        #welcome-icon.hidden {
            opacity: 0;
        }
    </style>
</head>
<body>
    <div id="welcome-icon">
        <img src="/Proyecto_mascotas/img/icon.png" alt="Icono de Bienvenida">
    </div>

    <script>
        setTimeout(function () {
            document.getElementById("welcome-icon").classList.add("hidden");
            setTimeout(function () {
                window.location.href = "principal.php";
            }, 1000);
        }, 5000);
    </script>
</body>
</html>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png">
</head>
<body>
    <main class="Tasks">
        <header class="links">
            <picture class="icon">
                <img src="./images/logo.png" alt="">
            </picture>
            <input type="submit" name="sign_in" value="Sign in">
            <input type="submit" name="check_in" value="Check in">
        </header>

    </main>
    
</body>
</html>






<?php



?>
>>>>>>> 3f2b420cba14d07ed805fec4804447e871eaee4b
