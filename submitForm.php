<?php 
include 'index.php';


$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];


$_SESSION['userName'] = "$username";


if ($username == 'cleverGuy' && $password == 'cleverPassword' && $email=='clever@email.com')
{
$goToActivity = new activity(activity);



$accessActivity = $goToActivity->get();


    printf ("<div class='text-center alert alert-success'>
                Welcome to your account,<strong> ");
    printf($_SESSION['userName']);

    printf("</strong>! </div>");


echo "$accessActivity";
}else{


	$html = file_get_contents('login.html');
	echo "$html";
    printf ("<div class='text-center alert alert-danger'>
                <strong>Incorrect Login!</strong> Please try again!
            </div>");
		
}
		




	








?>