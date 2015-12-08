<?php

include ('header.php');

?>
<br><br>
<head>
<!-- JSON EXAMPLE 2  -->
<meta charset="utf-8">
<title>JSON Log-in Example</title>
<link rel="stylesheet" href="/styles/ShoppingList.css">
<script type="text/javascript" src="javascript/login-js.js"></script>

</head>
<body>
    <div id="container">
        <div id="input">
            <p>Please input values for your exercises.</p>
    
            <p>Username: <input type="text" id="username"></p>
            <p>Password: <input type="text" id="password"></p>
            <button type = "button" onClick = "saveDataInLS()">Save User Info</button>
        </div>
        
            <table id=output></table>
        </div>          
<br>
<br>
<button class="wiggle" type = "button" onClick = "doShowAll()">Show User List</button>

<p></p>
<p>
    <label><input type=button value="Clear" onclick="ClearAll()">
    <i>* Removes all items</i></label>
</p>
    
</body>

<?php
include ('footer.php');
?>