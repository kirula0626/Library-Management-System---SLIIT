<?php 
    require('Header.php'); 
    require('config.php');

    if(isset($_POST['bname'])){
        $bookName = $_POST['bname'];
        $auther = $_POST['auther'];
        $publisher = $_POST['publisher'];
        $isbn = $_POST['isbn'];
        $catagory = $_POST['catagory'];
        $copies = $_POST['copies'];
        $published = $_POST['published'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        
    
        $addnewbook = "INSERT INTO `book` (`BookName`, `Auther` , `Publisher` , `isbn` , `catagory` , `copies` , `published` , `date` , `price` ) VALUES ('$bookname', '$auther', '$publisher' , '$isbn' , '$catagory' , '$copies' , '$published' , '$date' , '$price' )";
        if ($con->query($addnewbook)) {
            header("Location: ./admin.php?msg=success");
        } else {
            header("Location: ./Add_new_book.php?msg=error");
        }
    }


?>        

    <center><h2 class="pop-titel">ADD NEW BOOKS</h2></center>

    <!--E - Book <button><a href="" class="button ">Choose file</a></button> <h6> No File Chosen </h6><br>-->
            

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
                               <select name="book" class="pop-retbar membar" name="book">
									<option value="Science Fiction (Sci-Fi)">Science Fiction (Sci-Fi)</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Programming/Scripting Books">Programming/Scripting Books</option>
                                    <option value="Mid Exam">Mid Exam</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Pleasure">Entertainment</option>
                                    <option value="Business">Business</option>
                                    <option value="Neture">Neture</option>
                                    <option value="Final Exam">Final Exam</option>
                                    <option value="Health">Health</option>
                                    <option value="Novel">Novel</option>


								</select> 
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
								<input type="date" id="Add_New_Book" name="Add_New_Book" class="pop-retbar membar" value="Today" readonly> 
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
                                <input type="date" class="pop-retbar membar">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                            
                                E-Book <input type="file" class="pop-retbar membar" id="myFile" name="filename" size="30" value="">
                             
                            </td> 
                        </tr>
                    </table>

            </div>      
            
            <div class="Add_new_book_Button" >
                <input type="reset" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-clear" value="Clear">
                <input type="button" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-preview" value="Preview">
                <input type="submit" id="Add_new_book_Button" name="Add_new_book_Button" p class="btn-pop mem btn-S_C" value="Save & Print"> 
                 
                
                </form>
            </div>

        

            <?php require('footer.php'); ?>


</body>
</html> 