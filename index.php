<!DOCTYPE html>
<html>
<head>
    <title>icon</title>
    <link rel="icon" href="/Proyecto-Mascota/img/icon.png">
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
    <div id="welcome-icon">
        <img src="/img/icon.png" alt="Icono de Bienvenida">
    </div>
    <script>
        setTimeout(function () {
            document.getElementById("welcome-icon").classList.add("hidden");
            setTimeout(function () {
                window.location.href = "principal.php";
            }, 1000);
        }, 5000);
    </script>
</html>

