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

<h3>Article Correction Policy</h3>
<hr>
<b>Online corrections</b>
<p>The version of an article which is published online is considered the final and complete version. Even though it is possible to correct this version, our policy (in common with other publishers) is not to do so, except in very limited circumstances.We are only able to correct typographical errors in the following: author names, affiliations, articles titles, and abstracts and keywords. In such cases, an erratum or corrigendum would be necessary as well (see below), so that there is a record to explain the difference between the online and print versions. We can publish a correction to your article if there is a serious error, for example with regard to scientific accuracy, or if your reputation or that of the journal would be affected. We do not publish corrections that do not affect the contribution in a material way or significantly impair the reader's understanding of the contribution (such as a spelling mistake or a grammatical error).</p>
<p>Send an email to <br> <a href="mailto:#">editor@email.com</a> <br><a href="mailto:#">submission@gmail.com</a></p>
<p>if you need any changes to be effected.</p>
<b>Errata</b>
<p>An erratum will be used if an important error has been introduced during the production of the journal article (one that affects the publication record, the scientific integrity of the paper, the reputation of the authors or of the journal), including errors of omission such as failure to make factual proof corrections requested by authors within the deadline provided by the journal and within journal policy.</p>
<p>We do not publish errata for typing errors except where an apparently simple error is significant (for example, an incorrect unit). A significant error in a figure or table is corrected by publication of a new corrected figure or table as an erratum. The figure or table is republished only if the editor considers it necessary.</p>
<b>Corrigenda</b>
<p>A corrigendum is a notification of an important error made by the authors of the article. All authors must sign corrigenda submitted for publication. In cases where co-authors disagree, the editors will take advice from independent peer-reviewers and impose the appropriate amendment, noting the dissenting author(s) in the text of the published version.</p>
<b>Addenda</b>
<p>An addendum is a notification of a peer-reviewed addition of information to a paper, for example in response to a reader's request for clarification. Addenda do not contradict the original publication, but if the author inadvertently omitted significant information available at the time, this material can be published as an addendum after peer review.</p>
<p>Addenda are published only rarely and only when the editors decide that the addendum is crucial to the reader's understanding of a significant part of the published contribution.</p>
<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
