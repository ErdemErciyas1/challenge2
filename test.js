<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>
<div class="container">
    <div class="col-lg-6 m-auto d-block">
        
            <h3>Javascript Validation</h3>
            <form action="#" onsubmit="return validation()" class="bg-light">
  <form name="myForm" action='' onsubmit="return validateForm()" method="post">
      Name: <input type="text" name="fname">
      <input type="submit" value="Submit">
  Name: <input type="text" class="form-control" name="fname">
  E-mail: <input type="text" class="form-control" name="email">
  Phone number: <input type="text" class="form-control"  name="number">
  Zip Code: <input type="text" class="form-control" name="ZipCode">
  Password: <input type="password"  class="form-control" name="password">

  <input type="submit" value="Submit" class="btn btn-success" >

</form>
</div>
</div>

</body>
</html>
