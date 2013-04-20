<?php
//PHP E-Mail
//The simplest way to send an email with PHP is to send a text email.
//In the example below we first declare the variables ($to, $subject, $message, $from, $headers), then we use the variables in the mail() function to send an e-mail:
    
$to = "leeirvinfarmer@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "leeirvinfarmer@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?> 

<?php //With PHP, you can create a feedback-form on your website. The example below sends a text message to a specified e-mail address: ?>
<html>
<body>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("info@2ko.com", "$subject",$message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>

</body>
</html> 