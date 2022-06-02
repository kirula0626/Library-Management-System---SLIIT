<?php 
    require('Header.php'); 
    require('config.php');

    if(isset($_POST['bname'])){
        $bookname = $_POST['bname'];
        $auther = $_POST['auther'];
        $publisher = $_POST['publisher'];
        $reqnewbookSql = "INSERT INTO `inventory` (`BookName`, `Auther` , `Publisher`) VALUES ('$bookname', '$auther', '$publisher')";
        if ($con->query($reqnewbookSql)) {
            header("Location: ./admin.php?msg=success");
        } else {
            header("Location: ./Request_New_Books.php?msg=error");
        }
    }
    
    ?>    

    <center><h2 p class="pop-titel">REQUEST NEW BOOKS</h2></center>

    <div>  

		<table class="pop-table Memdel">
            <form  method="post">
                <tr>
					<td>
						<label>Book Name</label>
                    </td>
                    <td colspan="3">
                         <input type="text" class="pop-retbar membar"  name="Book_Name" size="93" value="">
                    </td>
                </tr>
                
                <tr>
					<td>
						<label>Auther</label>
                    </td>
                    <td>
                        <input type="text" class="pop-retbar membar"  name="Author" size="30" value="">     
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Publisher</label> 
                    </td>
                    <td>
                        <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        E-Book <input type="radio" class="radio" name="yes" checked>Yes <input type="radio" class="radio" name="no">No
                    </td>
                </tr>

        </table>            

                <div class="Request_New_Book_Button">
                    <input type="reset" id="Request_New_Book_Button" name="Request_New_Book_Button" class="btn-pop mem btn-clear" value="Clear">
                    <input type="submit" id="Request_New_Book_Button" name="Request_New_Book_Button" class="btn-pop mem btn-request" value="Request">
            
                </div>


                <?php require('footer.php'); ?>

     

</body>
</html>





