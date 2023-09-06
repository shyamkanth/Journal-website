<style><?php include 'CSS\style.css'; ?></style>
<?php include 'SYNTAX\syntax.php'; ?>
<!-----------------------------Header Start------------------------------------->
<!-----------------------------Navigaition Bar Start------------------------------------->
<nav class="navbar navbar-expand-xl bg-dark navbar-dark">
    <div class="container-fluid" style="display: flex;justify-content: space-around;">
        <a class="navbar-brand" href="index.php">
            <img src="IMAGES\download.png" alt="Logo" style="width:60px;" class="rounded-pill">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aim-scope.php">Aim & Scope</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Editorial Board</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">For Author Guidelines</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="author-guidelines.php">Author Guidelines</a></li>
                        <li><a class="dropdown-item" href="research-areas.php">Research Areas</a></li>
                        <li><a class="dropdown-item" href="correction-policy.php">Correction Policy</a></li>
                        <li><a class="dropdown-item" href="plagiarism-policy.php">Plagrism Policy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review-process.php">Peer Review Process</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review-guidelines.php">Review Guidelines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ethics-and-malpractice.php">Ethics & Malpractice </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-in.php">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!----------------------------------Navigation Bar end---------------------------->
<!----------------------------------Banner Starts--------------------------------->
<div class="row banner-row">
    <div class="col-lg-4 banner-logo">
        <img src="IMAGES\download.png" alt="Sharda University logo">
    </div>
    <div class="col-lg-6 mt-auto">
        <h3>Sharda Journal of <br>Computer Science and Engineering</h3>
        <p>Scholarly, Peer-Reviewed and Fully Refereed Academic Journal</p>
    </div>
    <div class="col-lg-2 mt-auto user-dropdown">
        <div class="dropdown">
            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
                User
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="sign-up.php">Create Account</a></li>
                <li><a class="dropdown-item" href="sign-in.php">Sign In</a></li>
            </ul>
        </div>
    </div>
    <!--Github : @shyamkanth-->
</div>
</div>
<hr>
<!---------------------------------Banner Ends------------------------------------->
<!-----------------------------Header Ends------------------------------------->
