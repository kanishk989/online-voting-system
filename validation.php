<?php
    session_start();
    include("connect.php");

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    $check = mysqli_query($conn, "select * from user where mobile='$mobile' and password='$pass' and role='$role' ");

    if(mysqli_num_rows($check) > 0){
        $getGroups = mysqli_query($conn, "select name, votes, id, photo from user where role=2 ");
        if(mysqli_num_rows($getGroups) > 0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "index.php";
            </script>';
    }
    else{
        echo '<script>
                alert("Invalid Credentials!");
                window.location = "login.php";
            </script>';
    }
?>