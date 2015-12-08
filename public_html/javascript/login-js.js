function shUsers(str) {
    if (str.length === 0) {
        document.getElementById("usrAry").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("usrAry").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "getusername.php?u=" + str, true);
        xmlhttp.send();
    }
}
// Save 
    function saveUsrPass(){
    var obj={};
        obj.username=document.getElementById('username').value;
        obj.password=document.getElementById('password').value;

    var listObj=localStorage.getItem('DATA');
    if(listObj!=null){
      listObj=JSON.parse(listObj); //this will give array of object
      listObj.push(obj);
    }else{
      listObj=[obj]; //first time 
    }
   // Save Data in Local Storage 
    localStorage.setItem('DATA',JSON.stringify(listObj)); 
   
}



function showUsrPass() {
	if (CheckBrowser()) {
		var dataArr= localStorage.getItem('DATA');
                dataArr=JSON.parse(dataArr);//returns Array
                var results = "";
                var i = 0;
                for (i=0; i<=dataArr.length - 1; i++) {
                    var username, password;
                    username = dataArr[i]['username'];
                    password = dataArr[i]['password'];       
                    results += "<tr><th></th><th> </th></tr>\n\
                                <tr><td>Username:</td>\n<td>" + username + 
                                "</td></tr>\n<tr><td>Password:</td>\n<td>"
                                + password +
                                "</td></tr>\n";
                    
                }
                //below is an example of DOM replace
                var container = document.getElementById("container");
                var old = document.getElementById("input");
                var newdiv = document.getElementById("history");
                container.replaceChild(newdiv, old);
                document.getElementById('output').innerHTML = results;
           } else {
		alert('Local Storage is supported in your browser!');
	}
}

function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// localStorage object to stores data
		return true;
	} else {
			return false;
	}
}

function ClearAll() {
	localStorage.clear();
	showUsrPass();
}