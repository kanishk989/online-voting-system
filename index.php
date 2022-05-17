<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:login.php');
    }
    $data = $_SESSION['data'];
    

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OVS - Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        li form input{
            background-color: transparent;
            border: none;
            color: white;
            font-size: medium;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="logo.png" alt="Logo" width="125px">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li>
                    <form action="mailto:kanishksony450@gmail.com" method="POST">
                        <input type="submit" value="Feedback">
                    </form>
                </li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="pro-sec">
                <h1>User's Details</h1><br>
                <table>
                    <tr>
                        <td colspan="2"><img src="images/<?php echo $data['photo']?>" alt="Profile Picture" width="200px" height="200px"></td>
                    </tr>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td><?php echo $data['name'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Mobile:</strong></td>
                        <td><?php echo $data['mobile'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status:</strong></td>
                        <td><?php echo $status ?></td>
                    </tr>
                </table>
            </div>
            <div class="grp-sec">
                <?php
                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                            <table>
                                <tr>
                                    <td rowspan="2"><img src="images/<?php echo $groups[$i]['photo'] ?>" alt="Symbol" width="100px" height="100px"></td>
                                    <td><strong>Group Name:</strong></td>
                                    <td><?php echo $groups[$i]['name']?></td>
                                </tr>
                                <tr>
                                    <td><strong>Votes:</strong></td>
                                    <td><?php echo $groups[$i]['votes']?></td>
                                </tr>
                            </table>
                            <form action="vote.php" method="POST">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php
                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                            </form>
                            <hr size="3" style="margin-top: 10px; margin-bottom: 10px; border:none; background-color:black">
                            <?php
                        }
                    }
                    else{
                        ?>
                        <h2 style="border-bottom: 1px solid #bdc3c7; padding-bottom: 30px;">
                            No Groups Available right now.
                        </h2>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>