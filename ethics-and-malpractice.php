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

<h3>Ethics and Malpractice</h3>
<hr>
<p>Our publication ethics and publication malpractice statement is mainly based on the Code of Conduct and Best-Practice Guidelines for Journal Editors (Committee on Publication Ethics, 2011).</p>
<b>Editors' Responsibilities</b>
<ul>
    <li>Publication decisions- The editor is responsible for deciding which of the papers submitted to the journal will be published. The editor will evaluate manuscripts without regard to the authors' race, gender, sexual orientation, religious belief, ethnic origin, citizenship, or political philosophy. The decision will be based on the paper's importance, originality and clarity, and the study's validity and its relevance to the journal's scope. Current legal requirements regarding libel, copyright infringement, and plagiarism should also be considered.</li>
    <li>Confidentiality- The editor and any editorial staff must not disclose any information about a submitted manuscript to anyone other than the corresponding author, reviewers, potential reviewers, other editorial advisers, and the publisher, as appropriate.</li>
    <li>Disclosure and conflicts of interest- Unpublished materials disclosed in a submitted paper will not be used by the editor or the members of the editorial board for their own research purposes without the author's explicit written consent.</li>
</ul>
<b>Reviewers' Responsibilities</b>
<ul>
    <li>Contribution to editorial decisions- The peer-reviewing process assists the editor and the editorial board in making editorial decisions and may also serve the author in improving the paper.</li>
    <li>Promptness- Any selected referee who feels unqualified to review the research reported in a manuscript or knows that its prompt review will be impossible should notify the editor and withdraw from the review process.</li>
    <li>Confidentiality- Any manuscripts received for review must be treated as confidential documents. They must not be disclosed to or discussed with others except as authorized by the editor.</li>
    <li>Standards of objectivity-Reviews should be conducted objectively. Personal criticism of the author is inappropriate. Referees should express their views clearly with supporting arguments.</li>
    <li>Acknowledgement of sources- Reviewers should identify cases in which relevant published work referred to in the paper has not been cited in the reference section. They should point out whether observations or arguments derived from other publications are accompanied by the respective source. Reviewers will notify the editor of any substantial similarity or overlap between the manuscript under consideration and any other published paper of which they have personal knowledge.</li>
    <li>Disclosure and conflict of interest- Privileged information or ideas obtained through peer review must be kept confidential and not used for personal advantage. Reviewers should not consider manuscripts in which they have conflicts of interest resulting from competitive, collaborative, or other relationships or connections with any of the authors, companies, or institutions associated with the papers.</li>
</ul>
<b>Authors' Duties</b>
<ul>
    <li>Reporting standards- Authors of original research reports should present an accurate account of the work performed as well as an objective discussion of its significance. Underlying data should be represented accurately in the paper. A paper should contain sufficient detail and references to permit others to replicate the work. Fraudulent or knowingly inaccurate statements constitute unethical behavior and are unacceptable.</li>
    <li>Data access and retention - Authors could be asked to provide the raw data of their study together with the paper for editorial review and should be prepared to make the data publicly available if practicable. In any event, authors should ensure accessibility of such data to other competent professionals for at least ten years after publication (preferably via an institutional or subject-based data repository or other data center), provided that the confidentiality of the participants can be protected and legal rights concerning proprietary data do not preclude their release.</li>
    <li>Originality, plagiarism and acknowledgement of sources - Authors will submit only entirely original works, and will appropriately cite or quote the work and/or words of others. Publications that have been influential in determining the nature of the reported work should also be cited.</li>
    <li>Multiple, redundant or concurrent publication - In general, papers describing essentially the same research should not be published in more than one journal. Submitting the same paper to more than one journal constitutes unethical publishing behavior and is unacceptable. Manuscripts which have been published as copyrighted material elsewhere cannot be submitted. In addition, manuscripts under review by the journal should not be resubmitted to copyrighted publications. However, by submitting a manuscript, the author(s) retain the rights to the published material. In case of publication they permit the use of their work under a CC-BY license [http://creativecommons.org/licenses/by/3.0/], which allows others to copy, distribute and transmit the work as well as to adapt the work and to make commercial use of it.</li>
    <li>Authorship of the paper - Authorship should be limited to those who have made a significant contribution to the conception, design, execution, or interpretation of the reported study. All those who have made significant contributions should be listed as co-authors. The corresponding author ensures that all contributing co-authors and no uninvolved persons are included in the author list. The corresponding author will also verify that all co-authors have approved the final version of the paper and have agreed to its submission for publication.</li>
    <li>Disclosure and conflicts of interest- All authors should include a statement disclosing any financial or other substantive conflicts of interest that may be construed to influence the results or interpretation of their manuscript. All sources of financial support for the project should be disclosed.</li>
    <li>Fundamental errors in published works - When an author discovers a significant error or inaccuracy in his/her own published work, it is the author's obligation to promptly notify the journal editor or publisher and to cooperate with the editor to retract or correct the paper in form of an erratum.</li>
</ul>





<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
