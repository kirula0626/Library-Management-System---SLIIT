<?php
    require('Header.php');
    require('config.php');

    if (isset($_REQUEST['IID'])){
        $IID = $_REQUEST['IID'];

        $sqlSelectBook = "SELECT i.Name, i.free, i.itemImgLoc, i.pdfPath, i.Description, p.publisherName, a.authorName, c.catName, i.totalView, i.totalDownload FROM inventory AS i , publisher AS p ,author AS a, category AS c WHERE i.pubID = p.pubID AND i.A_ID = a.AID AND i.CID = c.CID AND i.IID = '$IID' ORDER BY i.IID ASC LIMIT 1;";
        $resultSelectBook = $con -> query($sqlSelectBook);
        if ($resultSelectBook -> num_rows > 0){
            while ($rowSelectBook = $resultSelectBook -> fetch_assoc()){
                $Name = $rowSelectBook['Name'];
                $free = $rowSelectBook['free'];
                $totalView = $rowSelectBook['totalView'];
                $totalDownload = $rowSelectBook['totalDownload'];
                $publisherName = $rowSelectBook['publisherName'];
                $authorName = $rowSelectBook['authorName'];
                $pdfPath = $rowSelectBook['pdfPath'];
                $description = $rowSelectBook['Description'];
                $catName = $rowSelectBook['catName'];
                $itemImgLoc = $rowSelectBook['itemImgLoc'];
            }
        }
    }else{
        header("Location: ./index.php?error=bookView");
    }


    //-----------------------------------------------------------------------------

    if (isset($_SESSION['userID'])){
        $userID = $_SESSION['userID'];
        $userType = $_SESSION['userType'];
    }elseif ($free == 1){
        //
    }else{
        //echo $_SESSION['userID'];
        echo "<script>alert('This is not a free book');window.location.replace('./index.php?msg=notFree')</script>";

        //header("Location: ./index.php?msg=notFree");
    }
//---------------------------------------------------------------------------------
$adminShow = "";
if (isset($_SESSION['userID'])){
    if ($_SESSION['userType'] == 1){
        $adminShow = "<li><a href=\"admin.php\">Admin</a></li>";
    }
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

        <div class="row">
            <div class="column side"></div>
            <div class="column middle">
                <form action="searchResult.php" method="post">
                    <input type="text" class="txtSearch" name="keyWord" placeholder="Search...">
                    <input type="submit" value="Search" class="btn primary">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="column middle">
                <h2 align="left"><?php echo $Name; ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="column side">
                <img src="<?php echo $itemImgLoc; ?>" alt="<?php echo $Name; ?>" class="bookView">
            </div>
            <div class="column middle">
                <div class="bookData">
                    <table>
                        <tr>
                            <td class="title">Author</td>
                            <td class="data"><?php echo $authorName; ?></td>
                        </tr>

                        <tr>
                            <td class="title">Publisher</td>
                            <td class="data"><?php echo $publisherName; ?></td>
                        </tr>

                        <tr>
                            <td class="title">Category</td>
                            <td class="data"><?php echo $catName; ?></td>
                        </tr>

                        <tr>
                            <td class="title">Total Views</td>
                            <td class="data">
                                <?php echo $totalView; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="title">Total Downloads</td>
                            <td class="data">
                                <?php echo $totalDownload; ?>
                            </td>
                        </tr>

                        <tr>
                            <td class="title">Description</td>
                            <td class="data">
                                <?php echo $description; ?>
                            </td>
                        </tr>
                    </table>
                    <?php
                        $show = 0;
                        if ($free == 1 && (!isset($userType))){
                            $show = 1;
                        }else if (isset($userType)){
                            $show = 1;
                        }
                        if ($show == 1){
                            echo "<a href=\"./updatetotal.php?link=$pdfPath&IID=$IID&type=read\" class=\"btn primary\">Read</a>
                            <a href=\"./updatetotal.php?link=$pdfPath&IID=$IID&type=download\" class=\"btn warning\">Download</a>";
                        }else{
                            echo "<a href=\"#\" class=\"btn primary\" disabled>Read</a>
                            <a href=\"#\" class=\"btn info\" disabled>Reserve</a>
                            <a href=\"#\" class=\"btn warning\" disabled>Download</a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        

    </div>
    

    <div class="footer">
        <p>E - book | Reports | Journals | Library Police | Contact Us<br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>
</body>
</html>