<?php
    require('config.php');
    if (isset($_POST['index_pg_mail'])){
        $MAIL=$_POST['index_pg_mail'];
        $PW=$_POST['index_pg_pwd'];
        $SQL_LOGIN="SELECT * FROM User WHERE email = '$MAIL'";
        $result_login = mysqli_query($con, $SQL_LOGIN);
		$resultCheck_login = mysqli_num_rows($result_login);
		if ($resultCheck_login > 0) {
			while ($row_login = mysqli_fetch_assoc($result_login)){
                $RPW=$row_login['Password'];
                $U_ID=$row_login['userID'];
                if ($PW==$RPW){
                    session_start();
                    $_SESSION['userID']=$U_ID;
                    $_SESSION['FName']=$row_login['FName'];
                    $_SESSION['LName']=$row_login['LName'];
                    $_SESSION['mail']=$row_login['email'];
                    $_SESSION['Mobile']=$row_login['phoneNumber'];
                    $_SESSION['NWI']=$row_login['NameWithInitial'];
                    $_SESSION['Address']=$row_login['Address'];
                    $_SESSION['DOB']=$row_login['DateOfBirth'];
                    $_SESSION['ProfileImg']=$row_login['profileImg'];
                    $_SESSION['userType'] = $row_login['userType'];
                    header("Location: ./user_page.php?msg=success");
                            
                }else{
                    header("Location: ./index.php?msg=error");
                }
			}
		}else{
            header("Location: ./index.php?msg=error");
        }
    }

?>