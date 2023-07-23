<!------------------------------Template for Pages--------------------------------------->
<!---------------------Make a new page and Copy the whole code--------------------------->
<!------------------------------Stylesheeet and syntax----------------------------------->
<style><?php include 'CSS\style.css'; ?></style>
<?php include 'SYNTAX\divopen.php';?>
<!-------------------------------------Header-------------------------------------------->
<?php include 'SECTION\header.php'; ?>
<!-------------------------------------Sidebar ------------------------------------------>
<?php include 'SECTION\sidebar.php'; ?>
<!-----------------------------------Page Content Goes here----------------------------->
<div class="col-lg-9">
<!------.............................Dont touch Above Code--------------------------->
<!--------------------------------------  Your Code Goes here below ---------------------------------------->
<h2 style="color:indianred;">Create New Account</h2>
<hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3 mt-3">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="mname">Middle Name:</label>
      <input type="text" class="form-control" id="mname" placeholder="Enter middle name" name="mname">
    </div>
    <div class="mb-3 mt-3">
      <label for="lname">Enter last name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="uname">Create Username:</label>
      <input type="text" class="form-control" id="lname" placeholder="Create Username" name="uname" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Phone:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="mb-3">
      <label for="cpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter password again" name="cpswd" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Create new account</button>
</form>
<p></p>
<i>By creating new acoount, you have to agree with our terms and conditions.</i> 
<p><i>Already have an account ? <a href="sign-in.php">Log in</a></i></p>

<?php 
include 'connection.php';
if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pass = $_POST['pswd'];
  $cpass = $_POST['cpswd'];
  if($pass != $cpass){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password did not matched. Try again');
    window.location.href='sign-up.php';
    </script>");
  }else{
    $enc_pass = password_hash($pass,PASSWORD_BCRYPT);
    $insertquery = "INSERT into new_users(first_name,middle_name,last_name,user_name,email,phone,password) values('$fname','$mname','$lname','$uname','$email','$phone','$enc_pass')";
    $res = mysqli_query($con,$insertquery);
    if($res){
      echo ("<script LANGUAGE='JavaScript'>
        window.location.href='sign-in.php';
        window.alert('Succesfully inserted data.You can now Log In.');
    </script>");
  }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Failed to insert data. Try agaim');
    window.location.href='sign-up.php';
    </script>");
  }
  }
}

?>



<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
