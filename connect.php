<?php
   $conn = mysqli_connect('localhost','root','','test');

    $firstName = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
    $lastName = mysqli_real_escape_string($conn, $_GET['lastname']);
    $emailId= mysqli_real_escape_string($conn, $_GET['mailid']);
    $passWord = mysqli_real_escape_string($conn, $_GET['password']);


	// Database connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	  }
	   else {
		$sql = "INSERT INTO bank (firstName, lastName, emailId, passWord)VALUES('$firstName','$lastName','$emailId','$passWord')";
		/*$stmt = $conn->prepare("insert into registration(firstName, lastName, emailId, passWord) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $emailId, $passWord);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();*/
	}
    
	if (mysqli_query($conn,$sql)) {
		
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	  
	  mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="banklogo.png" type="image/icon type">
    <title>Home</title>
    <link rel="stylesheet" href="tthcss.css">
    <!--css js links-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="tthjs.js"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>

<body>
    <div class="whole-page">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#"><img src="img/bank-solid-24.png"></a>
                <div class="logoname">Bank of Baroda</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item " id="first" style="margin-left: 30px;">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contactus.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://rzp.io/l/moD2epe" style="margin-left: 900px;background-color:blanchedalmond; height:30px;margin-top: 6px">Donate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="heading">Bank of Baroda</h1>
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form action="login.php" method="POST">
                    <div id="login" class='input-group-login'>
                        <input type='text' class='input-field' placeholder='Email Id' name="mailid" required>
                        <input type='password' class='input-field' placeholder='Enter Password' name="password" required>
                        <input type='checkbox' class='check-box'><span>Remember Password</span>
                        <button type='submit' class='submit-btn' >Log in</button>
                    </div>
                </form>
                <div id='register' class='input-group-register'>
	  					<h1 class="acco" >Account Created Succesfully</h1>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');

    function register() {
        x.style.left = '-400px';
        y.style.left = '50px';
        z.style.left = '110px';
    }

    function login() {
        x.style.left = '50px';
        y.style.left = '450px';
        z.style.left = '0px';
    }
</script>
<script>
    var modal = document.getElementById('login-form');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</html>