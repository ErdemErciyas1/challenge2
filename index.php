<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> 
</head>
<body>

    
    <div class= "container">
    <div class="col-lg-6 m-auto d-block">
    <h2 class="text-primary">PHP Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
    
    Name: <input type="text" class="form-control" required placeholder="Enter your name" name="name">
    <br><br>
  E-mail: <input type="text" class="form-control" required placeholder="Enter a valid email address" name="email">
  <br><br>
  Phone Number: <input type="text" class="form-control" required placeholder="for example 06-12345678" name="number">
  <br><br>
  Zip Code: <input type="text" class="form-control" required placeholder="Enter your zip code" name="zipcode">
  <br><br>
  Password: <input type="password" class="form-control" required placeholder="Enter your password" name="password">
  <br><br>
  Gender: <br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" class="btn btn-primary" name="submit" value="Submit"><br><br>


</form>

<?php


$name = "";
$email ="";
$number ="";
$zipcode ="";
$password =  "";
$gender = "";
$phone = "";


$nameErr ="" ;
$emailErr = ""; 
$numberErr = "";
$zipcodeErr = "";
$passwordErr = "";
$genderErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is empty field ";
          echo $nameErr . '<br>';
        }
          else{
    $name = test_input($_POST["name"]);
          }
    

            if (empty($_POST["email"])) {
              $emailErr = "Email is empty field";
              echo $emailErr . '<br>';
            }
              else{
        $email = test_input($_POST["email"]);
              }

              if(filter_has_var(INPUT_POST,'email')){
                if(filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)){
                  
                }
                else{
                  echo 'Email is NOT valid'. '<br>';
                }
              }

  
              
            if (empty($_POST["number"])) {
                $numberErr = "Phone Number is empty field";
                echo $numberErr . '<br>';
              }
                else{
          $number = test_input($_POST["number"]);
                }

                if(preg_match("/^[0-9]{2}-[0-9]{8}$/", $number)) {
                  
                }
                else {
                  echo $number . 'is not valid';
                }
    
                if (empty($_POST["zipcode"])) {
                    $zipcodeErr = "Zip code is empty field";
                    echo $zipcodeErr . '<br>' ;
                  }
                    else{
              $zipcode = test_input($_POST["zipcode"]);
                    }

                    if (empty($_POST["password"])) {
                        $passwordErr = "Password is empty field";
                        echo $passwordErr . '<br>';
                      }
                        else{
                  $password = test_input($_POST["password"]);
                        }
    

                        
                    if (empty($_POST["gender"])) {
                        $genderErr = "Gender is empty field";
                        echo $genderErr;
                      }
                        else{
                  $gender = test_input($_POST["gender"]);
                        }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    ?>
    <?php

echo "<h2>My input:</h2>";

echo $name;

echo "<br>";

echo $email;

echo "<br>";

echo $number;

echo "<br>";

echo $zipcode;

echo "<br>";

echo $password;

echo "<br>";

echo $gender;

echo "<br>";

?>
</div>


</body>
</html>