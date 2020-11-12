<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Alice', serif;
  font-size: 20px;

}

* {
  box-sizing: border-box;
}


.container {
  padding: 20px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: solid 2px #3c2c3e;
  background: #8675a9;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #c3aed6;
  outline: none;
}


hr {
  border: 2px dotted #8675a9;
  margin-bottom: 25px;
}

.btn{
  text-align: center;
}

.button1 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: black;
  background-color: #86c4ba;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {
  background-color: #318fb5
}

.button1:active {
  background-color: #318fb5;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



</style>

</head>
<body>
   <?php include "dab.php"; 
  

if(isset($_POST['submit1'])){ 
  $Name = $_POST['Name'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Pin = $_POST['Pin'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$userfile = $_POST['userfile'];
$qury1 = "INSERT INTO registration (Name,Email,Contact,Address,City,Pin,State,Country,userfile) VALUES ('$Name','$Email','$Contact','$Address','$City','$Pin','$State','$Country','$userfile')";
$result = mysqli_query($connection,$qury1);
if($result){
  // echo "success";
  header('location:ret.php');
 
} else {
  die('failure' . mysqli_error($connection));
}
}
?>

 



<form action="f.php" method="post">
  <div class="container">
    <h1>Registration Form!</h1>
    <p>Register your Details here!</p>
    <hr>
    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="Name" id="Name" required autocomplete="off">

    <label for="Email"><b>Email Id</b></label>
    <input type="text" placeholder="Email Id" name="Email" id="Email" required autocomplete="off">
    <label for="Contact"><b>Contact</b></label>
    <input type="text" placeholder="Contact" name="Contact" id="Contact" required autocomplete="off">

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="Address" id="Address" required autocomplete="off">


    <label for="City"><b>City</b></label>
    <input type="text" placeholder="City" name="City" id="City" required autocomplete="off">

    <label for="Pin code"><b>Pin code</b></label>
    <input type="text" placeholder="Pin code" name="Pin" id="Pin code" required autocomplete="off">

    <label for="State"><b>State</b></label>
    <input type="text" placeholder="State" name="State" id="State" required autocomplete="off">

    <label for="Country"><b>Country</b></label>
    <input type="text" placeholder="Country" name="Country" id="Country" required autocomplete="off">
    <label for="userfile"><b>Adhar and PanCard</b></label>
   <input  type="file" class="button1" name="userfile" accept="application/pdf, application/vnd.ms-excel" />
    
  </div>
    <hr>

    <div class="btn">
      <input class="button1" type="reset">
       <button type="submit" class="button1" name="submit1" >Register</button>
    </div>



  </div>



</form>

</body>
</html>
