<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <style>
    span {color:red;}
    ::-webkit-input-placeholder {
   text-align: center;
 }
   #button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
  h1 {text-align: center;}
  div.buttons {text-align: center;}

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
 </head>
<body style="background: LightGray;">

<div class="container">
   <h1>Registarion</h1>
   <div class = "">
   <form action= "confirmation.php" method="POST" name = "form" onsubmit = "return validation()">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Name" name="name" autocomplete="off">
      <span id="nam" class = "danger"> </span>
    </div>
	
	<div class="form-group">
      <label for="usr">Father Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Father Name" name="father" autocomplete="off">
      <span id="fat" class = "danger"> </span>
    </div>
	
	<div class="form-group">
      <label for="usr">Address:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Address"  name="address" autocomplete="off">
      <span id="add" class = "danger"> </span>
    </div>
	
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"  name="email" autocomplete="off">
      <span id="ema" class = "danger"> </span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password"  name="pass">
      <span id="pass" class = "danger"> </span>
    </div>
	  <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm_password" placeholder="Enter password"  name="confirm">
      <span id="cnf" class = "danger"> </span>
    </div>
   
     <div class="form-group">
	 <label for="usr">College Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Collage Name" name="collage_name" autocomplete="off">
      <span id="col" class = "danger"> </span>
    </div>
     <div>
	 <label for="usr">Course Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Course Name" name="course_name" autocomplete="off">
      <span id="cou" class = "danger"> </span>
    </div>
      <div>
	 <label for="usr">DOB:</label>
      <input type="date" class="form-control" id="usr" placeholder="Enter DOB" name="dob">
      <span id="dat" class = "danger"> </span>
    </div>
	<div>
	 <label for="usr">Gender:</label><br>
	 <label class="radio-inline"> <input type="radio" value="male"  name="gender">Male</label>
    <label class="radio-inline"><input type="radio"   value="female"  name="gender">Female</label>
    <span id="gen" class = "danger"> </span>

	</div>
     <div>
	 <label for="usr">Mobile No:</label>
       <input type="number" id="UserMobile" maxlength="10"   autocomplete="off" placeholder="Mobile No. " class="form-control" pattern="^\d{10}$"  error-message name="mobile">
       <span id="mob" class = "danger"> </span>
    </div>

	<div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <div class = "buttons">
    <button type="submit" id = "button" class="btn btn-default">Submit</button>
	<button type="reset" id = "button" class="btn btn-default">Cancel</button>
</div>
  </form>
</div>
  <br />
  	<a href="login.php" class="btn btn-info" role="button">Back To Loogin Page</a>
    <hr />
</div>
	<script type="text/javascript">
    function validation() {
    var a = document.forms["form"]["name"].value;
    var b = document.forms["form"]["father"].value;
    var c = document.forms["form"]["address"].value;
    var d = document.forms["form"]["email"].value;
    var e = document.forms["form"]["pass"].value;
    var f = document.forms["form"]["confirm"].value;
    var g = document.forms["form"]["collage_name"].value;
    var h = document.forms["form"]["course_name"].value;
    var i = document.forms["form"]["dob"].value;
    var j = document.forms["form"]["gender"].value;
    var k = document.forms["form"]["mobile"].value;
    ////////////////////  Name  ////////////////////// 
    if(a == "") {
      document.getElementById("nam").innerHTML = "Please fill the feild";
      return false;
    }
    if((a.length <= 2) || (a.length > 20)) {
      document.getElementById("nam").innerHTML = "Fill in the given range";
      return false;
    }
    if(!/^[A-Za-z\s]+$/.test(a)) {
      document.getElementById("nam").innerHTML = "Only Allhabets allowed";
      return false;
    }
    document.getElementById("nam").innerHTML = "";
    ///////////////////  Father Name ///////////////
    if(b == "") {
      document.getElementById("fat").innerHTML = "Please fill the feild";
      return false;
    }
    if((b.length <= 2) || (a.length > 20)) {
      document.getElementById("fat").innerHTML = "Fill in the given range";
      return false;
    }
    if(!/^[A-Za-z\s]+$/.test(b)) {
      document.getElementById("fat").innerHTML = "Olny Allhabets allowed";
      return false;
    }
    document.getElementById("fat").innerHTML = "";
    //////////////////  Address  ///////////////////
    if(c == "") {
      document.getElementById("add").innerHTML = "Please fill the feild";
      return false;
    }
    if(!isNaN(c)) {
      document.getElementById("add").innerHTML = "Only Numbers Not Allowed";
      return false;
    }
    if((c.length <= 5) ){
      document.getElementById("add").innerHTML = "Too Short";
      return false;
    }
    document.getElementById("add").innerHTML = "";
    /////////////////  Email  ///////////////////////
    if(d == "") {
      document.getElementById("ema").innerHTML = "Please fill the feild";
      return false;
    }
    if(d.indexOf('@') <= 0) {
      document.getElementById("ema").innerHTML = "Please Enter valid email";
      return false;
    }
    if(d.charAt(d.length - 4) != '.') {
      document.getElementById("ema").innerHTML = "Only .com is allowed";
      return false;
    }
	var s = d.substring(0,d.indexOf('@'));
	var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
	if(format.test(s)){
		document.getElementById("ema").innerHTML = "Special Characters are not allowed";
		return false;
	}
	////////////////Test for @gmail.com////////////////
    var substr = d.substring(d.indexOf('@'),d.indexOf('@')+9);
    var actualsub = "@gmail.co"
    if(substr != actualsub) {
      document.getElementById("ema").innerHTML = "Enter @gmail.com";
      return false;
    }
    document.getElementById("ema").innerHTML = "";
    ////////////////  Password  /////////////////////
    if(e == "") {
      document.getElementById("pass").innerHTML = "Please fill the feild";
      return false;
    }
    if((e.length <= 3)) {
      document.getElementById("pass").innerHTML = "Too Short";
    }
    document.getElementById("pass").innerHTML = "";
    /////////////// Cnfirm Passwrd  //////////////////
    if(f == "") {
      document.getElementById("cnf").innerHTML = "Please fill the feild";
      return false;
    }
    if(e != f) {
      document.getElementById("cnf").innerHTML = "Password not matching";
      return false;
    }
    document.getElementById("cnf").innerHTML = "";
    ///////////////  College  //////////////////////
    if(g == "") {
      document.getElementById("col").innerHTML = "Please fill the feild";
      return false;
    }
    if(!/^[A-Za-z\s]+$/.test(g)) {
      document.getElementById("col").innerHTML = "Numbers not allowed";
      return false;
    }
    document.getElementById("col").innerHTML = "";
    ///////////////  Course name  ///////////////////
    if(h == "") {
      document.getElementById("cou").innerHTML = "Please fill the feild";
      return false;
    }
    document.getElementById("cou").innerHTML = "";
    ////////////////  DOB  /////////////////////////
    if(i == "") {
      document.getElementById("dat").innerHTML = "Please fill the feild";
      return false;
    }
    document.getElementById("dat").innerHTML = "";
    /////////////////  Gender  /////////////////////
    if(j == "") {
      document.getElementById("gen").innerHTML = "Please fill the feild";
      return false;
    }
    document.getElementById("gen").innerHTML = "";
    ////////////////  Mobile  //////////////////////
    if(k == "") {
      document.getElementById("mob").innerHTML = "Please fill the feild";
      return false;
    }
    if(isNaN(k)) {
      document.getElementById("mob").innerHTML = "Only Numbers are allowed";
      return false;
    }
    if(k.length != 10) {
      document.getElementById("mob").innerHTML = "Must be 10 digits long";
      return false;
    }
    document.getElementById("mob").innerHTML = "";
    //////////////////////////////////////////////////////////
    if(confirm("Do you really want to Submit?"))
      document.forms["form"].submit();
    else
      return false;
  }
	</script>
</body>
</html>
