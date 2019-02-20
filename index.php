<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php

$name = "";
$email ="";
$number ="";
$zipcode ="";
$password =  "";
$gender = "";


$nameErr ="" ;
$emailErr = ""; 
$numberErr = "";
$zipcodeErr = "";
$passwordErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required ";
          echo $nameErr . '<br>';
        }
          else{
    $name = test_input($_POST["name"]);
          }
    

            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
              echo $emailErr . '<br>';
            }
              else{
        $email = test_input($_POST["email"]);
              }

  
              
            if (empty($_POST["number"])) {
                $numberErr = "Phone Number is required";
                echo $numberErr . '<br>';
              }
                else{
          $number = test_input($_POST["number"]);
                }
    
                if (empty($_POST["zipcode"])) {
                    $zipcodeErr = "Zip code is required";
                    echo $zipcodeErr . '<br>' ;
                  }
                    else{
              $zipcode = test_input($_POST["zipcode"]);
                    }

                    if (empty($_POST["password"])) {
                        $passwordErr = "Password is required";
                        echo $passwordErr . '<br>';
                      }
                        else{
                  $password = test_input($_POST["password"]);
                        }
    

                        
                    if (empty($_POST["gender"])) {
                        $genderErr = "Gender is required";
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
    <h2>PHP Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Phone Number: <input type="text" name="number">
  <br><br>
  Zip Code: <input type="text" name="zipcode">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  
</form>
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
</body>
</html>