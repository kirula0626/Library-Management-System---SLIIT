<?php
include 'Header.php';
require 'config.php';

$sql="SELECT NameWithInitial,userID,email
FROM user 
WHERE memberValid=0";

$validateResult = $con->query($sql);
$validatePrint="";

if ($validateResult->num_rows>0){
    while($row=$validateResult->fetch_assoc()){
        $regno=$row['userID'];
        $namein=$row['NameWithInitial'];
        $mail=$row['email'];
        $validatePrint .= "<tr><td>$regno</td><td>$namein</td><td>$mail</td><td>
        <a  href=\"MemberVal.php?userID=$regno&action=rej\" id=\"Member_Validation_Table_Reject\" name=\"Member_Validation_Table_Reject\" class=\"btn-pop mem btn-reject\">Reject</a>
        <a href=\"MemberVal.php?userID=$regno&action=conf\"  id=\"Member_Validation_Table_Confirm\" name=\"Member_Validation_Table_Confirm\" class=\"btn-pop mem btn-confirm\">Confirm</a>
        </td></tr>";
    }
}

else{
    $disErro = "<script>console.log('No Recode founded')</script>";
    echo $disErro;
 }
 if (isset($_REQUEST['action'])){
    if ($_REQUEST['action'] == 'rej'){
       $conf_rej=$_REQUEST['userID'];
       $sql_reject="UPDATE user
       SET memberValid = -1
       WHERE userID='$conf_rej'";
       $contr=$con->query($sql_reject);
       header("Location: ./memberVal.php?reject=success");
   }
}
   
if (isset($_REQUEST['action'])){    
   if ($_REQUEST['action'] == 'conf'){
       $conf_n=$_REQUEST['userID'];
       $sql_connect="UPDATE user 
       SET memberValid=1 
       WHERE userID='$conf_n'";
   
       $cont = $con->query($sql_connect);
   
       header("Location: ./memberVal.php?confirm=success");
   
   
   }
}

?>

<div class="pop-memberVal">
    <div class="pop-content memvalContent">
        <div class="pop-close4"><b onclick="closeWindow()">+</b></div>
            <div>
                <h2 class="pop-titel">New Member Validation</h2>
                    <div>
                        <table class="pop-table memberval">
                            
                            <tr>
                    <th>Reg No</th>
                    <th>Name with Initial</th>
                    <th>Email</th>
                        </tr>
                        <?php echo$validatePrint; ?>
                        </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>