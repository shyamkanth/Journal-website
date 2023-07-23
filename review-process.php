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



<h3>Review Process</h3>
<hr>
<p>All papers of the journal are peer reviewed by two independent reviewers. Acceptance is granted when both reviewer's recommendations are positive. Journal issues will be made available online for download (Section: Archives).</p>
<p><b>Initial review: </b>The Editor-in-Chief evaluates each paper to determine if its topic and content is suitable for consideration by the IJCSE. Papers that do not meet minimum criteria are returned to the authors within one week of receipt. This is in the best interest of the authors who could then decide to either correct the problems or to submit the paper to a more appropriate venue, avoiding delays from a lengthy review process that would nonetheless lead to rejection.</p>
<p><b>Peer review: </b>Papers that pass the initial review are assigned to an Associate Editor, who selects several referees based on their expertise in that particular field. Each paper is reviewed by at least two referees under a double-blind peer review process where both the referees and the authors are kept anonymous. Referees are asked to evaluate the paper based on the basis of their originality, novelty, clarity, completeness, significance, soundness of methodology and research contribution and relevance to design practices. Based on the Review Remarks, the papers may be placed in any one of the categories like Clear Reject, Reconsider after Major Revision, Reconsider after Minor Revision, Accept as it is. To facilitate timely publication, referees are asked to complete their reviews within 1-2 weeks. After collecting the referees' reports, the Associate Editor makes a recommendation on the acceptability of the paper to the Editor-in-Chief.</p>
<p><b>Recommendation: </b>Based on the referees' comments and the Associate Editor's recommendation, the Editor-in-Chief makes a final decision on the acceptability of the paper and communicates to the authors the decision, along with referees' reports. The final decision can be "Accept Submission", "Revisions Required", "Resubmit for Review", "Resubmit Elsewhere", or "Decline Submission." A revised paper should be re-submitted within 10 days of the decision. It will usually be returned to the original referees for evaluation.</p>
<p>If recommended by the Board of Referees (BoR), the papers may undergo multiple cycles of review, before finally being accepted. The corresponding authors of qualifying submissions shall be intimated accordingly. Final acceptance of a paper is based on the review remarks by the referees and decision of the editorial board. The review process may take 1 to 2 week depending upon the cycles of review required, before the paper is finally accepted. After this detailed review process, if a paper is finally accepted, the decision regarding the issue in which the paper will be published, will be taken by the Editorial Board; and the author will be intimated accordingly.</p>
<p><b>Peer review purpose:</b></p>
<ul>
    <li>To help select quality articles for publication (filter out studies/research that have been poorly conceived, designed, and executed) with the selection being based upon:
        <ul>
            <li>The scientific merit and validity of the article and its methodology</li>
            <li>The relevance of the article – select work that will be the greatest interest to the readership</li>
        </ul>
    </li>
    <li>To improve the manuscript whenever possible.</li>
    <li>To check against malfeasance/dishonesty within the scientific and research community.</li>
    <li>Provide editors with evidence to make judgments as to whether articles meet the selection criteria for their particular publication.</li>
</ul>
<p><b>Final Proof of the Paper: </b>One set of page proofs (as PDF files) will be sent by e-mail to the corresponding author or a link will be provided in the e-mail so that the authors can download the files themselves. These PDF proofs can be annotated; for this you need to download Adobe Reader version 7 (or higher) available free from http://get.adobe.com/reader. If authors do not wish to use the PDF annotations function, they may list the corrections and return them to IJCSE in an e-mail. Please list corrections quoting line number. If, for any reason, this is not possible, then mark the corrections and any other comments on a printout of the proof and then scan the pages having corrections and e-mail them back, within 05 days. Please use this proof only for checking the typesetting, editing, completeness and correctness of the text, tables and figures. Significant changes to the paper that has been accepted for publication will not be considered at this stage without prior permission. It is important to ensure that all corrections are sent back to us in one communication: please check carefully before replying, as inclusion of any subsequent corrections cannot be guaranteed. Proofreading is solely authors’ responsibility. Note that IJCSE will proceed with the publication of paper, if no response is received within 07 days.</p>
<p>The main functions of the peer review process are to help maintain standards and ensure that the reporting of research work is as truthful and accurate as possible.</p>



<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
