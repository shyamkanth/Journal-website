<!------------------------------Template for Pages--------------------------------------->
<!---------------------Make a new page and Copy the whole code--------------------------->
<!------------------------------Stylesheeet and syntax----------------------------------->
<?php session_start(); ?>
<style><?php include 'CSS\style.css'; ?></style>
<?php include 'SYNTAX\divopen.php';?>
<!-------------------------------------Header-------------------------------------------->
<?php
if(!isset($_SESSION['username'])){
    include 'SECTION\header.php';
}else{
    include 'SECTION\home-header.php';
}
?>
<!-------------------------------------Sidebar ------------------------------------------>
<?php include 'SECTION\sidebar.php'; ?>
<!-----------------------------------Page Content Goes here----------------------------->
<div class="col-lg-9">
<!------.............................Dont touch Above Code--------------------------->
<!--------------------------------------  Your Code Goes here below ---------------------------------------->

<h3 style="color:indianred;">Contact Us</h3>
<hr>
<b>Office Address</b>
<p>
Sharda University,<br>
Knowledge Park 3, Gautam Buddha Nagar,<br>
Greater Noida, UP,<br>
201306<br>
India<br>
email: <a href="mailto:#">email@sharda.ac.in</a><br>
Website: <a href="https://sharda.ac.in">www.sharda.ac.in</a>
</p>
<p>
    Before contacting us, please read our FAQs <br>
    Editorial Board queries: <a href="mailto:#">sharda.submission@gmail.com</a><br>
    For any specific query you may send us an email or use the contact
</p>
<form action="#">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="phone">Mobile No:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter mobile number" name="phone" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address">
    </div>
    <div class="mb-3">
    <label for="message">Message:</label>
    <textarea class="form-control" rows="5" id="message" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
