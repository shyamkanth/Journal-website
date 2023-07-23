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
<h3>Sharda Journal FAQ's</h3>
<hr>
<ul>
    <li><b>How do I submit the paper?</b><br>The researcher needs to email the paper to <a href="mailto:#">sharda.submission@gmail.com</a> . Editorial support staffs shall acknowledge the receipt of the manuscript within 24 hours. Detailed information is available in the Call for Paper page.</li>
    <li><b>How much time to complete a review?</b><br>Each submission undergoes detailed review by appointed domain experts and peer-reviews by domain peers. A minimum of 4-6 days is required to complete the review process.</li>
    <li><b>How to correct an experimental data in my published paper?</b><br>Contact the editorial team at Sharda Journal.submission@gmail.com . Mention the changes and provide the revised manuscript. The revised manuscript shall be published in accordance to Sharda Journal article policies.</li>
    <li><b>I haven't received any Sharda Journal notification even after 30 days of submission!</b><br>Depending on your personal spam filter settings it is possible that the notification email may be directed to your spam folder rather than your inbox. If this is not the case, we request you to escalate the issue to Sharda.submission@gmail.com . You shall be informed on the status within 24 hours.</li>
    <li><b>My paper exceeds 20 pages!</b><br>Sharda Journal policies allow the publication of a paper consisting of maximum of 20 number of pages. However, depending upon the merit of the research, appropriate relaxations are granted by the Sharda Journal editorial panels.</li>
    <li><b>Do I need to submit the copyright form along with the manuscript?</b><br>No, copyright forms shall be accepted by Sharda Journal only if the submission is accepted for publication.</li>
</ul>
<h5>Conference Proceedings</h5>
<ul>
    <li><b>How can we publish our conference proceedings with Sharda Journal?</b><br>The conference organizers should email a request to sharda.submission@gmail.com . The conference shall be evaluated by Sharda Journal advisory panels. Once approval is granted by the panel, the conference organizers shall be asked to submit the conference proceedings with Sharda Journal. The proceedings shall be published and available in both print and online versions.</li>
    <li><b>How much time needed for approval?</b><br>If all the information (solicited by Sharda Journal) is furnished duly, the notifications shall be informed within 3-4 working days.</li>
    <li><b>How much does time is needed to publish the proceedings?</b><br>Sharda Journal typesetting teams shall require a minimum of 10 days (from the date of submission of the proceedings' papers) to complete the publication process in both print and online formats.</li>
    <li><b>Is there any particular paper format?</b><br>Sharda Journal recommends the conference organizers to accept the final papers according to the Sharda Journal template. The set of papers should be submitted to Sharda Journal in DOC/DOCX format.</li>
</ul>



<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
