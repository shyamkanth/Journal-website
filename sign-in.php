<?php
session_start();
?>
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
<h2 style="color:indianred;">Login To Your Existing Account</h2>
<hr>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['pswd'];

  $email_search = "select * from new_users where email='$email'";
  $query = mysqli_query($con, $email_search);
  $email_count = mysqli_num_rows($query);

  if($email_count){
    $email_pass =  mysqli_fetch_assoc($query);
    $db_pass = $email_pass['password'];
    $_SESSION['username'] = $email_pass['user_name'];
    $pass_decode = password_verify($password, $db_pass);

    if($pass_decode){
      echo "login successful";
      echo ("<script LANGUAGE='JavaScript'>
        window.location.href='home.php';
    </script>");
    }else{
      echo "Password incorrect";
    }
  }
  else{
    echo "Invalid email";
  }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" name='submit' class="btn btn-primary">Log in</button>
</form>
<p></p>
<i>Don't have an account ? <a href="sign-up.php">Create new account</a></i>






<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
