<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <?php
    session_start();
	if(isset($_SESSION["name"]))
	{
		header('location:commontestquestion_quiz.php?q=1'); 
	}
    ?>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group" method="post" action="../php/login_process.php"  enctype="multipart/form-data">
                <input type="text" name="email"  class="input-field" placeholder="Email ID" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <!---<a class="toggle-btn2" href="forgotpass.html">Forgot Password?</a>-->
                <button type="submit" name="submit"  class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group" method="post" action="../php/register.php"  enctype="multipart/form-data">
                <input type="text" name="name" class="input-field" placeholder="User Name" required>
                <input type="email" name="email"  class="input-field" placeholder="Email Id" required>
                <input type="password"  name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>I agree to the terms &amp; conditions</span>
                <button type="submit" name="submit" class="submit-btn">Register</button>

            </form>
        </div>
    </div>
    
    <script>
    var x=document.getElementById("login");
    var y=document.getElementById("register");
    var z=document.getElementById("btn");
        
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
</body>
</html>