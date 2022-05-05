<?php 
if(!isset($_POST[ 'submit'])) 
{ //this page should not be accessed directly,need to submit the form.
    echo "error; you need to submit the form!"; 
} 

$name=$_POST[ 'name']; 
$visitor_email=$_POST[ 'email'];
$message=$_POST [ 'message'];

//validate first 
if(empty($name)||($visitor_email)) 
{ echo
"Name and email are mandatory!"; 
} 


$email_form='schneho@thefreelancer.studio' ; // your email here 
$email_subject="New Form Submission"; 
$email_body="You have received a new email from the user $name.\n" .
"email adress: $visitor_emai\n". "Here is the message:\n $message";

$to="schneho@thefreelancer.studio" ; // your email here 
$header="Form: $email_form\r\n" ; 
//send the email- 
mail($to, $email_subject,$email_body,$header);
// done 



?>