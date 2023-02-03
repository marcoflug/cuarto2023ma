<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN SESION</title>
</head>
<body>
    <script type="text/javascript";>
        var usuario = "Chancusig";
        var ape=document.getElementById('apeU').value;
        function comprobar(){
                <?php
                $_SESSION['APE_USU']=$usuario;
                session_start();
                echo "<a href='../../models/salir.php'>SALIR</a>"; 
                ?>
        }

    </script>
    <center>
    <form action = "loguearse.php" method="POST">
            <div style="margin-bottom:10px">
                <input type="text" id="apeU" name="APE_USU" placeholder="apellido">
            </div>
                <button type="button" onclick="comprobar()">ENTRAR</button>
        </form>
    </center>
</body>
</html>