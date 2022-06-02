<?php
include 'Header.php';
require 'config.php';

$fname="";
$lname="";
$addr="";
$regno="";
$memEmail="";
$nic="";
$mob="";

if(isset($_POST['Member_Details_Find_Id'])){
$memberdel=$_POST['Member_Details_Find_Id'];


$sql="SELECT  i.FName,i.LName,i.Address,i.userID,i.email,i.NIC,i.phoneNumber
FROM user i
WHERE (userID = '$memberdel' OR NIC='$memberdel') AND memberValid=1";

$memberDetails = $con->query($sql);

if ($memberDetails->num_rows>0){
while ($row=$memberDetails->fetch_assoc()){
$fname=$row["FName"];
$lname=$row['LName'];
$addr=$row['Address'];
$regno=$row['userID'];
$memEmail=$row['email'];
$nic=$row['NIC'];
$mob=$row['phoneNumber'];
}
}
}

if(isset($_POST['Member_Details_Button_Remove'])){
    $delID=$_POST['Member_Details_Table_RegNo'];
    $sql_Delete="DELETE FROM user
    WHERE userID=$delID";
    $deleCon=$con->query($sql_Delete);
    if ($deleCon===TRUE){
    $msg_del = "REMOVED USER ! ID : ";
    $deleteok = "<script>alert(\"REMOVED USER ! \");</script>";
    echo $deleteok;
    }
    else{
    $errode="Not DELETED";
    echo "<script>console.log($errode);</script>";
    }   
}

if (isset($_POST['Member_Details_Button_Clear'])){
    $fname="";
    $lname="";
    $addr="";
    $regno="";
    $memEmail="";
    $nic="";
    $mob="";
}

if(isset($_POST['Member_Details_Button_Update'])){
    $memberID=$_POST['Member_Details_Table_RegNo'];
    $memfname=$_POST['Member_Details_Table_Fname'];
    $memlname=$_POST['Member_Details_Table_Lname'];
    $memAddr=$_POST['Member_Details_Table_Address'];
    $memMail=$_POST['Member_Details_Table_Email'];
    $memNIC=$_POST['Member_Details_Table_NIC'];
    $memMob=$_POST['Member_Details_Table_MobNo'];
echo $memberID;
    $sql_Update="UPDATE user
    SET NIC='$memNIC',phoneNumber='$memMob',email='$memMail',FName='$memfname',LName='$memlname',Address='$memAddr'
    WHERE userID='$memberID'";

    $conUpdate = $con->query($sql_Update);
    if ($conUpdate===TRUE){
        
        $updlok = "<script>alert(\"UPDATED USER INFORMATION! \");</script>";
        echo $updlok;
        }
        else{
        $errodexy="Not UPDATED";
        echo "<script>console.log($errodexy);</script>";
        }   
    $fname=$memfname;
    $lname=$memlname;
    $addr=$memAddr;
    $regno=$memberID;
    $memEmail=$memMail;
    $nic= $memNIC;
    $mob=$memMob;
}



?>


<div class="pop-memberDel">
    <div class="pop-content memContent">
      <div class="pop-close3"><b onclick="closeWindow()">+</b></div>
            <!----------------------------------Member_Details_HTML_START------------------------------------------------------------------------------------------>

            <div>
                <h3 class="pop-titel">Member Details</h3>
                <!----------------------------------Member_Details_HTML_Find------------------------------------------------------------------------------------------>

                <div>
                   <center>
                   <form method="post">
                        <input type="text" class="pop-search" name="Member_Details_Find_Id" size="25" placeholder="Reg No / NIC" required>
                        <input type="submit" id="Member_Details_Find_Submit" name="Member_Details_Find_Submit" class="btn-search" value="Search">
                    </form>
                   </center> 
                </div>

                <br>
                <hr>
                <br>
                <!----------------------------------Member_Details_HTML_Details------------------------------------------------------------------------------------------>

                <div>
                    <table class="pop-table Memdel">
                      <form  method="post">
                            <tr>
                                <td>
                                    <label>First Name</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Fname" size="30" value="<?php echo $fname; ?>">
                                </td>
                                <td>
                                    <label>Last Name</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Lname" size="26" value="<?php echo $lname; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Address</label>
                                </td>
                                <td colspan="3">
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_Address" size="93" value="<?php echo $addr; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Reg No</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_RegNo" size="30" value="<?php echo $regno; ?>" readonly>
                                </td>
                                <td>
                                    <label>SLIIT Email</label>
                                </td>
                                <td>
                                    <input type="email" class="pop-retbar membar"  name="Member_Details_Table_Email" size="27" value="<?php echo $memEmail; ?>" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>NIC</label>
                                </td>
                                <td>
                                    <input type="text" class="pop-retbar membar"  name="Member_Details_Table_NIC" size="30" value="<?php echo $nic; ?>">
                                </td>
                                <td>
                                    <label>Mobile</label>
                                </td>
                                <td>
                                    <input type="tel" class="pop-retbar membar"  name="Member_Details_Table_MobNo" size="27" value="<?php echo $mob; ?>">
                                </td>
                            </tr>
                        
                    </table>

                </div>

                <!----------------------------------Member_Details_HTML_Buttons------------------------------------------------------------------------------------------>
             
                <div class="Member_Details_Button">
                
                        <input type="submit" id="Member_Details_Button_Clear" name="Member_Details_Button_Clear"  class="btn-pop mem btn-clear" value="Clear">
                        <input type="submit" id="Member_Details_Button_Update" name="Member_Details_Button_Update"  class="btn-pop mem btn-update" value="Update">
                        <input type="submit" id="Member_Details_Button_Remove" name="Member_Details_Button_Remove"  class="btn-pop mem btn-remove" value="Remove">
                    </form>

                </div>

            </div>
            <!----------------------------------Member_Details_HTML_END------------------------------------------------------------------------------------------>


    </div>
</div>
<script src="./js/main.js"></script>
</body>
</html>