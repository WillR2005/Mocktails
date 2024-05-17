<?php
include 'includes/connDB.php';

 
 


$sql = "SELECT id, uname FROM mocktail_users";
$result = mysqli_query($conn, $sql);

$pas = "SELECT uid,pass_hash FROM mocktail_passwords";
$presult = mysqli_query($conn, $pas);


$user= $_POST['user'];
$pass = $_POST['pword'];
//$hashpass= password_hash($pass,PASSWORD_DEFAULT);

while($row = mysqli_fetch_assoc($result)) {
    if ( $row["uname"] == $user)
    {
        $userid = $row["id"];
       
        while($prow = mysqli_fetch_assoc($presult))
        {
            if ( $userid ==$prow["uid"] )
            {
                $trpass =$prow["pass_hash"];
            }
        }
    }
  
}

if (password_verify($pass, $trpass)){
    echo "Password Valid";
}else{
    echo "invalid password";
}


mysqli_close($conn);


/*if ($valid ==true){
    echo "Password Correct.";
}else{
    echo "Password Incorrect.";
}
$_SESSION['user']= $user;
//header('Location:index.php');
?> */


 //user = WillR2005, pass= Password123, pass_hash = $2y$10$hj1vG980uGQSSXjhLFaExOKMTSBRGNRThGdH.ANprPQyKmnEMFM1u

// user = Lemons1465, pass= Letmein1 , pass_hash= $2y$10$CPFKbvzWeUVzREw4UwfjquJtyuwzJRLhVxxzGjQQ.px7veTDg3DXK

// user = Willo345,pass =Mocktails123 hash =  $2y$10$RDr/MOZJ12aNVxMtCyYRpOeZaeXQ5cj2CNpcdO3sabGyuyClFvqcO