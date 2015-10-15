<?php
include ('../views/header.php');

$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    
		<form  action="%20" method="POST" enctype="multipart/form-data">
			<div id="contact">
				<input type="hidden" name="action" value="submit">
				<p style="color:white">Your name:<br> </p>
				<input name="name" type="text" value="" size="30"/><br>
				<p style="color:white"> Your email:<br> </p>
				<input name="email" type="text" value="" size="30"/><br>
				<p style="color:white"> Your message:<br> </p>
				<textarea name="message" rows="7" cols="30"></textarea><br>
				<br>
				<input type="submit" value="Send email"/>
			</div>	
		</form>

    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "<a href=\"\">All fields are required, please fill the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("david.banks0889@gmail.com", $subject, $message, $from);
        echo "<a href=\"\">Email sent successfully! Return to Contact Page.</a> again.";
        }
    }
?>

<?php
include ('../views/footer.php');	
?> 