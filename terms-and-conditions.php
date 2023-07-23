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
<h3>Terms and Conditions</h3>
<hr>
<p>Sharda Journal is web site ("Site") is registered with ISSN International Center of Paris and National Science Library (NSL), E-ISSN: 2347-2693 ("Sharda," "we," "us" or "our").</p>
<p>By accessing or using the Site, you agree to be bound by the terms and conditions below ("Terms and Conditions"). If you do not agree with these Terms and Conditions, please do not use this Site.</p>
<p>Sharda Journal is committed to maintain your privacy, values and your trust.</p>
<ul>
    <li>Sharda Journal ensure that the information contained on this website is accurate to best of Sharda Journal efforts, procedure and terms and conditions for collecting information. However, the contents are provided as it is and only for general information purposes.</li>
    <li>Sharda Journal does not monitor, verify or endorse information submitted for posting on this Sharda Journal, reliability, completeness or usefulness of, or otherwise adopt or endorse, any information or services provided. No responsibility is accepted by or on behalf of Sharda Journal for any error, omission or misleading statement on this website or any website to which its pages connect or for any injury, loss or damage which occurs as a result of an opinion expressed or information provided. Neither can Sharda Journal guarantee that any information or services are still current and/or applicable and it is the sole responsibility of the user to ensure that any information they access from this website is accurate, complete and useful.</li>
    <li>Sharda Journal shall not be responsible for any information submitted for posting on this website by users and any such information shall be taken as user's own opinion. Sharda Journal reserve the power to remove any objectionable content without giving any information or notice to the concern user/users. Any such decision about objectionable information shall be on discretion of Sharda Journal as it sole right. Sharda Journal reserve right to decide time frame to take decision on removing/adding/editing any information on website.</li>
    <li>Sharda Journal does not provide guarantees or warranties and representations as to the accuracy of any information contained on this website. Sharda Journal also does not guarantee that this website will be free of faults due to the nature of electronic transmission of data over the Internet, and the number of users by whom data is posted onto this website.</li>
    <li>The information provided by Sharda Journal website is not in any way an invitation or recommendation to buy any products or services featured and Sharda Journal shall not be responsible or payable for any such expenses.</li>
    <li>Any payment to Sharda Journal using credit card/bank transfer/online transfer, or any other payment option, is through a third party. Sharda Journal shall not be responsible to maintain the privacy of bank account / credit card details. However, Sharda Journal will make reasonable efforts to ensure that the third party maintains all Data Security Standard.</li>
    <li>If the user submits information for display on this website then they are responsible for ensuring that it is true, accurate, complete and up to date, and for updating it whenever necessary. The user is also responsible for ensuring that no data are uploaded or submitted that are defamatory, obscene, abusive or otherwise objectionable or in breach of any applicable laws or third-party rights.</li>
    <li>By submitting data for display on this website, the user warrants that they have taken all reasonable precautions to ensure that they are free from viruses and anything else that might have a contaminating or destructive effect on any part of this website or any other technology.</li>
    <li>Any information other than personal data that are covered by Sharda Journal Privacy Policy will be treated as non-confidential and Sharda Journal shall be entitled to reproduce without restriction and without obligation.</li>
    <li>Sharda Journal reserves the right to change, alter or remove all or part of this website, temporarily or permanently, and without notice and without liability. Further, Sharda Journal reserves right to remove any published articles/information/paper/Journals/books /conference proceedings/ special issues at any time permanently.</li>
    <li>Sharda Journal will use its reasonable endeavors to allow uninterrupted access to this website but access may be suspended, restricted or terminated at any time.</li>
    <li>Sharda Journal reserves the right to amend these Terms and Conditions at any time. It is the responsibility of the user to check the Terms and Conditions frequently for changes.</li>
    <li>We do not provide any refund under any circumstance for any registered paper unless otherwise decided by Sharda Journal Managing Editor.</li>
</ul>



<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
