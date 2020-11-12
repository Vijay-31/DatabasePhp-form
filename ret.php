<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      table, th, td{
  border: 1px solid black;
  padding: 15px;


}
table :hover{
  background-color: #318fb5;
}

.container {
  padding: 40px;

}
body{
  background-color: skyblue;
}
    </style>
  </head>
  <body>
    <div class="container">
    <table >
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Address</th>
      <th>City</th>
      <th>Pin</th>
      <th>State</th>
      <th>country</th>
      <th>Userfile</th>
    <?php include "dab.php";
$displayQuery = "SELECT * FROM registration";
$result = mysqli_query($connection,$displayQuery);

while ($row = mysqli_fetch_assoc($result)) {
$Name= $row['Name'];
$Email = $row['Email'];
$Contact = $row['Contact'];
$Address= $row['Address'];
$City = $row['City'];
$Pin = $row['Pin'];
$State = $row['State'];
$Country = $row['Country'];
$userfile = $row['userfile'];

?>

<tr>
  <td> <?php echo $Name; ?></td>
  <td> <?php echo $Email ?></td>
  <td><?php echo $Contact ?></td>
  

<td> <?php echo $Address; ?></td>
<td> <?php echo $City; ?></td>

<td><?php echo $Pin; ?></td>
<td><?php echo $State; ?></td>
<td><?php echo $Country; ?></td>
<td><?php echo $userfile; ?></td>

</tr>

<?php } ?>


    </table>
  </div>
  </body>
</html>