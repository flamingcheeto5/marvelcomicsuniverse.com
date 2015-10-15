<?php

include ('header.php');

?>
<br><br>
<div id="movie-trailer">
<fieldset style="width:30%"><legend style="color:white">LOG-IN HERE</legend>
<form method="POST" action="connectivity.php">
<p style="color:white">
User<br><input type="text" name="user" size="40">

<br><br>

Password<br><input type="password" name="pass" size="40">
</p>
<input class="button" type="submit" name="submit" value="Log-In">
<br><br>
</form>
</fieldset>
</div>


<fieldset style="width:30%"><legend style="color:white">Registration Form</legend>
<form method="POST" action="connectivity-sign-up.php">
<p style="color:white">
Full Name<input type="text" name="name">
<br><br>
Email<input type="text" name="email">
<br><br>
UserName<input type="text" name="user">
<br><br>
Password<input type="password" name="pass">
<br><br>
Confirm Password<input type="password" name="cpass">
</p>
<input class="button" type="submit" name="submit" value="Sign-Up">
</form>


</fieldset>






<?php
include ('footer.php');
?>