<?php
    require('config.php');
    $output = "";
    if (isset($_POST['keyWord'])){
        $keyWord = $_POST['keyWord']; 
        
        $sqlSearch = "SELECT i.Name, i.free, i.itemImgLoc,  i.IID FROM inventory AS i WHERE i.Name LIKE '%$keyWord%' GROUP BY i.Name ORDER BY i.IID ASC LIMIT 20;";
        $resultSearch = $con -> query($sqlSearch);
        if ($resultSearch -> num_rows > 0){
            while ($rowSearch = $resultSearch -> fetch_assoc()){
                $bookName = $rowSearch['Name'];
                $bookFree = $rowSearch['free'];
                $bookImg = $rowSearch['itemImgLoc'];
                $bookID = $rowSearch['IID'];

                $output .= "<a href=\"bookView.php?IID=$bookID\"><div class=\"column mini\"><div class=\"card\"><img src=\"$bookImg\" class=\"searchimg\" alt=\"$bookName\" id=\"$bookName\"><div class=\"cardDetails\"><div class=\"row\"><p class=\"searchResult\">$bookName<br></p></div></div></div></div></a>";
            }
        }else{
            $output .= "<div class=\"column side\"></div><div class=\"column middle\"><div class=\"card\"><div class=\"cardDetails\"><div class=\"row\"><p class=\"searchResult\">No any result found</p></div></div></div></div>";
        }
    }else{
        header("Location: ./index.php?error=search");
    }

    //$con -> close();

    require('Header.php');

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
            <li><a class="logoL">Library</a></li>
            <li><a href="#news">Home</a></li>
            <li><a href="#contact">Articles</a></li>
            <li><a href="#about">Past Papers</a></li>
            <li><a href="#about">Reports</a></li>
            <li><a href="#about">Journals</a></li>
            <?php echo $adminShow; ?>
        </ul>
    </div>

    <div class="row">
        <?php echo $output; ?>
    </div>

    <div class="footer">
        <p>E - book | Reports | Journals | Library Police | Contact Us<br>Copyright SLIIT &copy; 2021 - All right reserved</p>
    </div>
    <script> carousel();</script>
</body>
</html>