<?php 
    require('Header.php'); 
    require('config.php');


    if(isset($_POST['bname'])){
        $BookName = $_POST['bname'];
        $Auther = $_POST['auther'];
        $Publisher = $_POST['publisher'];
        $ISBN = $_POST['isbn'];
        $Catagory = $_POST['catagory'];
        $Copies = $_POST['copies'];
        $Published = $_POST['published'];
        $Date = $_POST['date'];
        $Price = $_POST['price'];
        
    
        $bookdetails = "INSERT INTO `inventory` (`BookName`, `Auther` , `Publisher` , `isbn` , `catagory` , `copies` , `published` , `date` , `price` ) VALUES ('$bookname', '$auther', '$publisher' , '$isbn' , '$catagory' , '$copies' , '$published' , '$date' , '$price' )";
        if ($con->query($bookdetails)) {
            header("Location: ./admin.php?msg=success");
        } else {
            header("Location: ./book_details.php?msg=error");
        }
    }
?>



    <h2 class="pop-titel"> BOOK DETAILS</h2>

                <div>
                   <center>
                   <form method="post">
                        <input type="text" class="pop-search" name="Book_Details_Find_Id" size="50" placeholder="Search by Code no, Book Name" required>

                        <input type="submit" id="Book_Details_Find_Submit" name="Book_Details_Find_Submit" class="btn-search" value="Search">
                    </form>
                   </center> 
                </div>
                <br><hr><br>
    
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

                            <td>
                                <label>ISBN</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="" size="30" value="">
                            </td>
                        </tr>

                        <tr>
							<td>
								<label> Catagory</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value=""> 
                            </td>
                        
                            <td>
                                <label> Copies </label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="" size="30" value=""> 
                            </td>
                        </tr>
                        
                        
                        
                        <tr>
                            <td>
                                <label>Publisher</label> 
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
                            </td>
                        
                            <td>
                                <label>Date</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
								<!--<input type="date" class="pop-retbar membar">--> 
                            </td>
                        </tr>



                        <tr>
                            <td>
                                <label>Price</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="" size="30" value="">
                            </td>
                        
                            <td>
                                <label>Published</label>
                            </td>
                            <td>
                                <input type="text" class="pop-retbar membar"  name="Publisher" size="30" value="">
                                <!--<input type="date" class="pop-retbar membar">-->
                            </td>
                        </tr>
                        
                    </table>

                    <div class="Book_Details_Button">
                        <input type="reset" id="Book_Details_Button" name="Book_Details_Button" class="btn-pop mem btn-clear" value="Clear">
                        <input type="reset" id="Book_Details_Button" name="Book_Details_Button" class="btn-pop mem btn-remove" value="Delete">
                        <input type="submit" id="Book_Details_Button" name="Book_Details_Button" class="btn-pop mem btn-update" value="update">
                    </div>

            </div> 

            <?php require('footer.php'); ?>




</body>

</html>