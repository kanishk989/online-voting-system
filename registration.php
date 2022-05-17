<?php
    include("connect.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"images/$image");
        $insert = mysqli_query($conn, "insert into user (name, mobile, photo, password, status, votes, role) values('$name', '$mobile', '$image', '$pass', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                </script>';
        }
    }
    
?>