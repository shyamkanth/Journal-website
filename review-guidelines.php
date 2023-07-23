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


<h3>Review Guidelines</h3>
<hr>
<b>The Responsibility of the Peer Reviewer</b>
<p>The peer reviewer is responsible for critically reading and evaluating a manuscript in their specialty field, and then providing respectful, constructive, and honest feedback to authors about their submission. It is appropriate for the Peer Reviewer to discuss the strengths and weaknesses of the article, ways to improve the strength and quality of the work, and evaluate the relevance and originality of the manuscript.</p>
<b>Before Reviewing</b>
<p>Please consider the following:</p>
<ul>
    <li>Does the article you are being asked to review match your expertise?<br>If you receive a manuscript that covers a topic that does not sufficiently match your area of expertise, please notify the editor as soon as possible. Please feel free to recommend alternate reviewer.</li>
    <li>Do you have time to review the paper?<br>Finished reviews of an article should be completed within two weeks. If you do not think you can complete the review within this time frame, please let the editor know and if possible, suggest an alternate reviewer. If you have agreed to review a paper but will no longer be able to finish the work before the deadline, please contact the editor as soon as possible.</li>
    <li>Are there any potential conflicts of interests?<br>While conflicts of interest will not disqualify you from reviewing the manuscript, it is important to disclose all conflicts of interest to the editors before reviewing. If you have any questions about potential conflicts of interests, please do not hesitate to contact the receiving editorial office.</li>
</ul>
<b>The Review</b>
<p>When reviewing the article, please keep the following in mind:</p>
<ul>
    <li>Content Quality and Originality,<br>Does the article say something new and interesting enough to warrant publication? Does it add to the body of knowledge? Is the research question an important one? In order to determine its originality and appropriateness for the journal, it might be helpful to consider the article in the context of the wider published research, using tools such as Web of Science, Scopus etc. How does it compare to the most highly cited or downloaded papers in the field? If the research has been covered previously, forward any relevant references to the Editor.</li>
    <li>Layout and format <br>Authors must comply fully with the journal's author guidelines, which include manuscript presentation. If the author has clearly failed to present the article according to these guidelines and the Editor has not already highlighted this in the invitation to review, you should either flag this to the Editor or note this in your review. If the paper is particularly original or interesting the Editor may choose to overlook the formatting issues throughout the peer review process and ask the author to address these only shortly prior to eventual acceptance; but at other times the Editor may ask the author to restructure the paper before progressing it any further.</li>
</ul>
<b>Organization and Clarity</b>
<ul>
    <li>Title: Does it clearly describe the manuscript/article? Does it include the most important keywords (consider how you search for research articles) and demonstrate the significance of the research? Does it make sense?!</li>
    <li>Abstract: Does it reflect the content of the article?</li>
    <li>Introduction: Does it describe what the author hoped to achieve accurately, and clearly state the problem being investigated? Normally, the introduction should summarize relevant research to provide context, and explain what other authors' findings, if any, are being challenged or extended. It should describe the experiment, the hypothesis and the general experimental design or method.</li>
    <li>Method: Does the author accurately explain how the data was collected? Is the design suitable for answering the question posed? Is there sufficient information present for you to replicate the research? Does the article identify the procedures followed? Are these ordered in a meaningful way? If the methods are new, are they explained in detail? Was the sampling appropriate? Have the equipment and materials been adequately described? Does the article make it clear what type of data was recorded; has the author been precise in describing measurements?</li>
    <li>Statistical errors: These are common and so close attention should be paid.</li>
    <li>Results: This is where the author/s should explain in words what he/she discovered in the research. It should be clearly laid out and in a logical sequence. You will need to consider if the appropriate analysis has been conducted. Are the statistics correct? If you are not comfortable with statistics, please advise the editor when you submit your report. Interpretation of results should not be included in this section.</li>
    <li>Conclusion/Discussion: Are the claims in this section reasonable and supported by the results? Are the findings consistent with the author's expectations? Do the conclusions adequately tie together the other elements of the paper? Does the article support or contradict previous theories? Does the author explain how the research has added to the body of knowledge?</li>
    <li>Graphics (Figures, Images) and Tables: Where these are included, please check the content and if possible make suggestions for improvements. Do the figures and tables inform the reader? Are they an important part of the manuscript? Do the figures describe the data accurately? Do they properly show the data? Are they easy to interpret and understand? Are they presented consistently?</li>
    <li>Language: Does the quality of English make it difficult to understand the author's argument? If this is the case, you do not need to correct the English but should instead mention this as part of your review. In extreme cases where an interesting or original contribution is undermined by poor quality of expression you may bring this to the attention of the Editor who can then advise of sub-editing services.</li>
    <li>Scope - Is the article in line with the aims and scope of the journal?</li>
</ul>
<p><b>Guidelines for Written Comments </b></p>
<p>Please prepare detailed evaluative comments for the author(s). Remember that journal will send this entire section to the author(s). It is important to be polite when providing comments supporting your recommendation, even when you must be critical of the manuscript. Try to be as comprehensive, specific, and constructive as possible in your comments to the author(s). Your comments should be helpful to the author(s) in improving the manuscript, even if you believe that the manuscript does not merit publication in the journal.</p>
<p>When writing comments, please indicate the section of comments intended for only the editors and the section of comments that can be returned to the author(s). Please never hesitate to contact the receiving editorial office with any questions or concerns you may have.</p>
<p>The following format is suggested for preparing comments for the author(s):</p>
<ul>
    <li>Identification of the contribution and major strengths of the paper. Is this paper appropriate for Journal? What is the incremental contribution to existing marketing science and practice? What are the strengths of the paper? If, in your assessment, the paper does not make a contribution or have any strengths, a politely worded opening paragraph summarizing the essence of the paper would be appropriate.</li>
    <li>Major weaknesses of the paper. The following are some questions you should try to address: 
        <ol>
            <li>Does the manuscript provide sufficient information to make an evaluation? If not, what information is needed? Be specific. </li>
            <li>Does the manuscript have mistakes? If so, are they correctable? How? Would removing problematic sections be a solution? If the mistake is not correctable, please state why. </li>
            <li>Do the authors achieve their stated objectives? If not, what do they still need to do? </li>
            <li>What are the major changes that should be made and/or major issues that should be addressed in a revision?</li>
        </ol>
    </li>
    <li>Other changes that would potentially strengthen the manuscript and/or minor issues that should be addressed in a revision. When discussing minor issues, it is usually helpful to indicate the place in the manuscript (page and paragraph) where the change should be made.</li>
    <li>Readability. Some questions you might consider: 
        <ol>
            <li>Is the length-to-contribution ratio appropriate? A "desirable" length is 25 pages of text, excluding references, tables, and figures.</li>
            <li>Are there sections of the manuscript that can be eliminated or condensed? Are there sections of the manuscript that might be moved to a technical appendix?</li>
            <li>Will the paper be interesting to both academicians and practitioners? If not, how can it be strengthened? Do you see managerial implications that the authors have overlooked or failed to treat in sufficient depth?</li>
        </ol>
    </li>
    <li>Originality: Does the paper contain new and significant information adequate to justify publication?</li>
    <li>Abstract and Title. Comments and suggestions, if any, regarding the abstract (whether it is an accurate and useful summary of the content of the paper) and title (whether it is appropriate given the content of the paper).</li>
    <li>Relationship to Literature: Does the paper demonstrate an adequate understanding of the relevant literature in the field and cite an appropriate range of literature sources? Is any significant work ignored?</li>
    <li>Methodology: Is the paper's argument built on an appropriate base of theory, concepts or other ideas? Has the research or equivalent intellectual work on which the paper is based been well designed? Are the methods employed appropriate?</li>
    <li>Results: Are results presented clearly and analysed appropriately? Do the conclusions adequately tie together the other elements of the paper?</li>
    <li>Implications for research, practice and/or society: Does the paper identify clearly any implications for research, practice and/or society? Does the paper bridge the gap between theory and practice? How can the research be used in practice (economic and commercial impact), in teaching, to influence public policy, in research (contributing to the body of knowledge)? What is the impact upon society (influencing public attitudes, affecting quality of life)? Are these implications consistent with the findings and conclusions of the paper?</li>
    <li>Quality of Communication: Does the paper clearly express its case, measured against the technical language of the field and the expected knowledge of the journal's readership? Has attention been paid to the clarity of expression and readability, such as sentence structure, jargon use, acronyms, etc.</li>
</ul>
<p>After you have completed the review process, you are required to make a recommendation to the Editor as to the next step for the journal. The Recommendation criteria may vary from journal to journal. The Editor will take your overall recommendation into account.</p>
<b>Recommendations:</b>
<ul>
    <li>Accept</li>
    <li>Minor Revisions</li>
    <li>Major Revisions</li>
    <li>Reject</li>
</ul>
<b>Reviewers' Responsibilities </b>
<ul>
    <li>Contribution to editorial decisions- The peer-reviewing process assists the editor and the editorial board in making editorial decisions and may also serve the author in improving the paper.</li>
    <li>Promptness- Any selected referee who feels unqualified to review the research reported in a manuscript or knows that its prompt review will be impossible should notify the editor and withdraw from the review process.</li>
    <li>Confidentiality- Any manuscripts received for review must be treated as confidential documents. They must not be disclosed to or discussed with others except as authorized by the editor.</li>
    <li>Standards of objectivity-Reviews should be conducted objectively. Personal criticism of the author is inappropriate. Referees should express their views clearly with supporting arguments.</li>
    <li>Acknowledgement of sources- Reviewers should identify cases in which relevant published work referred to in the paper has not been cited in the reference section. They should point out whether observations or arguments derived from other publications are accompanied by the respective source. Reviewers will notify the editor of any substantial similarity or overlap between the manuscript under consideration and any other published paper of which they have personal knowledge.</li>
    <li>Disclosure and conflict of interest- Privileged information or ideas obtained through peer review must be kept confidential and not used for personal advantage. Reviewers should not consider manuscripts in which they have conflicts of interest resulting from competitive, collaborative, or other relationships or connections with any of the authors, companies, or institutions associated with the papers.</li>
</ul>

<!---------------------------------------  Your Code Goes till here   --------------------------------------->
<!------------------------------  Dont touch Below code   ---------------------------------->   
        </div>  
    </div>
<!-------------------------------------Footer----------------------------------------------->
<?php include 'SECTION\footer.php'; ?>
<?php include 'SYNTAX\divclose.php'; ?>
<!-------------------------------------Page Ends-------------------------------------------->
