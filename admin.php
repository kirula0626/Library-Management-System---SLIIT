<?php
    require('Header.php');

//---------------------------------------------------------------------------------
$adminShow = "";
if (isset($_SESSION['userID'])){
    if ($_SESSION['userType'] == 1){
        $adminShow = "<li><a href=\"admin.php\">Admin</a></li>";
    }else{
        header("Location: ./index.php");
    }
}else{
    header("Location: ./index.php");
}
//---------------------------------------------------------------------------------
?>

    <div class="nav">
        <ul>
            <li><a href="#Library">Library</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="past_papers.php">Past Papers</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="journals.php">Journals</a></li>
            <?php echo $adminShow; ?>
        </ul>
    </div>

    <div class="row">

        <div class="right">
            <button type="button" class="btn primary">Overrides</button>
            <i class="far fa-envelope fa-2x"></i>
        </div>
    </div>
    
    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <a href="LendBK.php" target="blank" id="lendBk" class="btn danger btn-lg">Lend Book</a>
            <a href="RetrieveBK.php" target="blank" id="retriveBk" class="btn warning btn-lg">Retrive Book</a>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Member</h3>
            <a href="MemberVal.php" target="blank" id="nmVal" value="New Member Validation" class="btn border colorprimary">New Member Validation</a>
            <a href="register.php" target="blank" id="" value="Add Memeber" class="btn border colorprimary">Add Memeber</a>
            <a href="MemberDel.php" target="blank" id="memDel" value="Member Details" class="btn border colorprimary">Member Details</a>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">Books</h3>
            <a href="Add_new_book.php" target="blank" class="btn border colorprimary">Add New Books</a>
            <a href="book_details.php" target="blank" class="btn border colorprimary">Book Details</a>
            <a href="Request_New_Books.php" target="blank" class="btn border colorprimary">Request New Books</a>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <h3 align="left">IT Technician</h3>
            <input type="button" value="Error Submission" class="btn border colorprimary">
            <input type="button" value="Contact Detail" class="btn border colorprimary">
        </div>
    </div>

    <?php require('Footer.php'); ?>
    <script> carousel();</script>


<script>popup();</script>
</body>
</html>