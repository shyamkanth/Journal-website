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
<h3>Plagiarism Policy</h3>
<hr>
<p>Plagiarism is the unethical act of copying someone else's prior ideas, processes, results or words without explicit acknowledgement of the original author and source. Self-plagiarism occurs when an author utilizes large part of his/her own previously published work without using appropriate references. This can range from getting the same manuscript published in multiple journals to modifying a previously published manuscript with some new data.</p>
<p>International Journal of Computer Sciences and Engineering, is a peer reviewed indexed monthly online journal having ISSN 2347-2693, being published since 2013. The journal is strictly against any unethical act of copying or plagiarism in any form. Plagiarism is said to have occurred when large portions of a manuscript have been copied from existing previously published resources. All manuscripts submitted for publication to IJCSE are cross-checked for Plagiarism / Similarity Index using Turnitin / Plagiarism CheckerX software. Manuscripts found to be plagiarized during initial stages of review are out-rightly rejected and not considered for publication in the journal.</p>
<p>In case a manuscript is found to be plagiarized after publication, the Editor-in-Chief will conduct preliminary investigation, may be with the help of a suitable committee constituted for the purpose. If the manuscript is found to be plagiarized beyond the acceptable limits, the journal will contact the author's Institute / College / University and Funding Agency, if any. A determination of misconduct will lead IJCSE to run a statement bi-directionally linked online to and from the original paper, to note the plagiarism and provide a reference to the plagiarized material. The paper containing the plagiarism will also be marked on each page of the PDF. Upon determination of the extent of plagiarism, the paper may also be formally retracted.</p>
<b>Types of Plagiarism</b>
<p>The following types of plagiarism are considered by IJCSE:-</p>
<ol>
    <li>Full Plagiarism: Previously published content without any changes to the text, idea and grammar is considered as full plagiarism. It involves presenting exact text from a source as one's own.</li>
    <li>Partial Plagiarism: If content is a mixture from multiple different sources, where the author has extensively rephrased text, then it is known as partial plagiarism.</li>
    <li>Self-Plagiarism: When an author reuses complete or portions of their pre-published research, then it is known as self-plagiarism. Complete self-plagiarism is a case when an author republishes their own previously published work in a new journal.</li>
</ol>
<b>IJCSE Policy for Plagiarism</b>
<p>IJCSE respects intellectual property and aims at protecting and promoting original work of its authors. Manuscripts containing plagiarized material are against the standards of quality, research and innovation. Hence, all authors submitting articles to IJCSE are expected to abide ethical standards and abstain from plagiarism, in any form. In case, an author is found to be suspected of plagiarism in a submitted or published manuscript then:</p>
<ol>
    <li>IJCSE shall contact the author (s) to submit his / her (their) explanation within two weeks, which may be forwarded to the <b>Fact Finding Committee (FFC)</b> constituted for the purpose, for further course of action.</li>
    <li>If IJCSE does not receive any response from the author within the stipulated time period, then the Director / Dean / Head of the concerned College, Institution or Organization or the Vice Chancellor of the University to which the author is affiliated shall be contacted to take strict action against the concerned author.</li>
</ol>
<b>Policy and Action</b>
<p>IJCSE shall take serious action against published manuscripts found to contain plagiarism and shall completely remove them from IJCSE website and other third party websites where the paper is listed and indexed. The moment, any article published in IJCSE database is reported to be plagiarized, IJCSE will constitute a Fact Finding Committee (FFC) to investigate the same. Upon having established that the manuscript is plagiarized from some previously published work, IJCSE shall support the original author and manuscript irrespective of the publisher and may take any or all of the following immediate actions or follow the additional course of actions as recommended by the committee:-</p>
<ol>
    <li>IJCSE editorial office shall immediately contact the Director / Dean / Head of the concerned College, Institution or Organization or the Vice Chancellor of the University to which the author(s) is (are) affiliated to take strict action against the concerned author.</li>
    <li>IJCSE shall remove the PDF copy of the published manuscript from the website and disable all links to full text article.</li>
    <li>The term Plagiarized Manuscript shall be appended to the published manuscript title.</li>
    <li>IJCSE shall disable the author account with the journal and reject all future submissions from the author for a period of 03 / 07 / 14 years or even ban the authors permanently.</li>
    <li>IJCSE may also display the list of such authors along with their full contact details on the IJCSE website.</li>
    <li>Any other course of action, as recommended by the Committee or as deemed fit for the instant case or as decided by the Editorial Board, from time to time.</li>
</ol>

<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
