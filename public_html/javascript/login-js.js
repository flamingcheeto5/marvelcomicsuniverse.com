function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}


// Save 
    function saveDataInLS(){
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



function doShowAll() {
	if (CheckBrowser()) {
		var dataArr= localStorage.getItem('DATA');
                dataArr=JSON.parse(dataArr);//returns Array
                var results = "";
                var i = 0;
                for (i=0; i<=dataArr.length - 1; i++) {
                    var username, password;
                    username = dataArr[i]['username'];
                    password = dataArr[i]['password'];
                    squats = dataArr[i]['squats'];          
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
	doShowAll();
}