<?php
    $usuario = $_POST['vUser'];
    $pass = $_POST['vPass'];

    if(empty($usuario) || empty($pass)){
        print('<script>alert("Los campos no pueden estar vacios")</script>');
        header("Location: index.php");
    exit();
    }

    mysql_connect('localhost','admin','admin') or die("Error al conectar " . mysql_error());
    mysql_select_db('mspasteleriaprueba') or die ("Error al seleccionar la Base de datos: " . mysql_error());

    $result = mysql_query("SELECT * FROM clientes WHERE email='" . $usuario . "'");

    if($row = mysql_fetch_array($result)){
    if($row['clave'] == $pass){
        session_start();
        $_SESSION['email'] == $usuario;
        header("Location: Principal.html");
    }else{
        print('<script>alert("contraseña incorrecta")</script>');
        header("Location: index.php");
    exit();
    }
    }else{
        print('<script>alert("Datos incorrectos!")</script>');
        header("Location: index.php");
    exit();
    }
?>