<?php
session_start();

$user= $_POST['user'];
$password = $_POST['pword'];
$hashed= password_hash($password,PASSWORD_DEFAULT);
echo $hashed;
//echo $user;
$answer= '$2y$10$PW2WAQPxnB0cO.T57PfnG.uBSGZHQ96JFOLdPU/lIrrTbCnAwdNYe';
$valid =  password_verify($password,$answer);


/*if ($valid ==true){
    echo "Password Correct.";
}else{
    echo "Password Incorrect.";
}
$_SESSION['user']= $user;
//header('Location:index.php');
?> */


// user = Will, pass= Password123, pass_hash = $2y$10$hj1vG980uGQSSXjhLFaExOKMTSBRGNRThGdH.ANprPQyKmnEMFM1u

// user = Lemons, pass= Letmein1 , pass_hash= $2y$10$CPFKbvzWeUVzREw4UwfjquJtyuwzJRLhVxxzGjQQ.px7veTDg3DXK

// pass =Mocktails123 hash =  $2y$10$RDr/MOZJ12aNVxMtCyYRpOeZaeXQ5cj2CNpcdO3sabGyuyClFvqcO