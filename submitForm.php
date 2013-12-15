<?php 
include 'index.php';


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$_SESSION['currentName'] = "$name";



$goToActivity = new contacts('x');



$accessActivity = $goToActivity->get();


    printf ("<div class='text-center alert alert-success'>
                Contact <strong> ");
    printf($_SESSION['currentName']);

    printf("</strong> entered successfully! </div>");

    printf("	<table class='table table-hover table-bordered'>
                    <thead>
                        <tr>
                        <th>Contact Name</th>
                        <th>Contact Email</th>
                        <th>Message</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$message</td>
                    </tr>
			    </tbody>
			</table>");


echo "$accessActivity";



/*else{


	$html = file_get_contents('login.html');
	echo "$html";
    printf ("<div class='text-center alert alert-danger'>
                <strong>Incorrect Login!</strong> Please try again!
            </div>");
		
}*/
		




	








?>