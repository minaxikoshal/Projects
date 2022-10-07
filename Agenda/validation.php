<?php
    session_start();
    $con = mysqli_connect('localhost','root');
    if($con)
    {
        echo" connection successsfull";
    }
    else
    {
        echo"no connection";
    }

    mysqli_select_db($con, 'event');
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    $q = " select * from users where name = '$name' && password = '$pass'";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);

    if($num == 1)
    {
    
       header('location:events.php');

    }
    else
    {
        header('location:login.php');
    }


?>