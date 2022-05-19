<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OVS - Login</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body{
            background-image: url(bg_img.png);
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="validation.php" method="POST">
                        <input type="number" class="input-box" name="mob" placeholder="Mobile No." required>
                        <input type="password" class="input-box" name="pass" placeholder="Password" required>
                        <select name="role" class="input-box">
                            <option value="1" style="color: black;">Voter</option>
                            <option value="2" style="color: black;">Group</option>
                        </select>
                        <button name="loginbtn" class="submit-btn" id="loginbtn" type="submit">Login</button>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">
                        Register here
                    </button>
                </div>
                <div class="card-back">
                    <div class="tooltip">
                        <h2>REGISTER</h2>
                        <span class="tooltiptext">For Group: 18</span>
                    </div>
                    <form action="registration.php" method="POST">
                        <input type="text" class="input-box" name="name" placeholder="Full Name" required>
                        <input type="number" style="width: 60%;" class="input-box" name="mob" placeholder="Mobile No." required>
                        <input type="number" style="width: 38%;" class="input-box" name="age" placeholder="Age" required>
                        <input type="password" class="input-box" name="pass" placeholder="Password" required>
                        <input type="password" class="input-box" name="cpass" placeholder="Confirm Password" required>
                        <span class="input-box">Upload image:</span><input type="file" name="image" id="upload" required>
                        <select name="role" class="input-box">
                            <option value="1" style="color: black;">Voter</option>
                            <option value="2" style="color: black;">Group</option>
                        </select>
                        <button name="loginbtn" class="submit-btn" id="loginbtn" type="submit">Register</button>
                    </form>
                    <button style="margin-top: 15px;" type="button" class="btn" onclick="openLogin()">
                        Login here
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
    </script>

</body>
</html>