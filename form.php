<?php

include("db.php");

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<form  action="form.php" method="post">

  <div style="border: 1px solid black; width: 800px;" class="container">
  <div class="row">
    <div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div></div>


  <div class="col-md-6">
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control"   placeholder="Enter address" required>
  </div></div>

<div class="col-md-6">
  <div class="form-group">
    <label for="number">Number</label>
    <input type="number" name="number" class="form-control"   placeholder="Enter number" required>
  </div></div>


  <div class="col-md-6">
  <div class="form-group">
    <label for="linkedin">Linked in Id</label>
    <input type="text" class="form-control" name="link"  placeholder="Enter linkedin id" required>
  </div></div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="skills">Skills</label>
    <input type="text" class="form-control" name="skills"  placeholder="Enter your akills" required>
  </div></div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="address"> Your Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter name" required>
  </div></div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="desc">Description</label>
    <input type="text" name="desct" class="form-control"   placeholder="Enter Description">
  </div></div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="Exp">Experience</label>
    <input type="text" class="form-control" name="Exps"  placeholder="Enter Experience" required>
  </div></div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="post">Post</label>
    <input type="text" class="form-control"   placeholder="Enter Post" name="post" required>
  </div></div>


  <div class="col-md-6">
  <div class="form-group">
    <label for="pode">Post Desc</label>
    <input type="text" class="form-control" name="pode"  placeholder="Enter address" required>
  </div></div>

<div class="col-md-6">
  <div class="form-group">
    <label for="org">Organizations</label>
    <input type="text" name="org" class="form-control" placeholder="Enter duration of work" required>
  </div></div>

<div class="col-md-6">
  <div class="form-group">
    <label for="edu">Education</label>
    <input type="text" class="form-control" name="edu"  placeholder="Enter Education detail" required>
  </div></div>

<div class="col-md-6">
  <div class="form-group">
    <label for="awr">Awards</label>
    <input type="text" class="form-control" name="awr"  placeholder="Enter honour detail" required>
  </div></div>

<div class="col-md-12">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
</form>
</div>
</div>
</div>


<?php

if(isset($_POST['submit'])){

$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];
$link = $_POST['link'];
$skills = $_POST['skills'];
$name = $_POST['name'];
$desct = $_POST['desct'];
$Exps = $_POST['Exps'];
$post = $_POST['post'];
$pode = $_POST['pode'];
$org = $_POST['org'];
$edu = $_POST['edu'];
$awr = $_POST['awr'];



$sql = "insert into data(email,address,number,link,skills,name,desct,Exps,post,pode,org,edu,awr) values('$email','$address','$number','$link','$skills','$name','$desct','$Exps','$post','$pode','$org','$edu','$awr')";

$print = mysqli_query($con, $sql);
if (mysqli_query($con, $sql)) {
  echo $print;
     echo "<script>alert('your data has been seved')</script>";
} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


}






?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




