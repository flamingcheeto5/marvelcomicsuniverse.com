function SaveUsernamePassword() {
			
	var name = document.forms.UserPass.name.value;
	var data = document.forms.UserPass.data.value;
	localStorage.setItem(name, data);
	combineFunctions();
	
}

function ModifyUsernamePassword() {
	var name = document.forms.UserPass.name.value;
	document.forms.UserPass.data.value = localStorage.getItem(name);
	combineFunctions();
}

function RemoveUsernamePassword() {
	var name = document.forms.UserPass.name.value;
	document.forms.UserPass.data.value = localStorage.removeItem(name);
	combineFunctions();
}

function ClearAll() {
	localStorage.clear();
	combineFunctions();
}

// dynamically draw the table

function combineFunctions() {
	if (CheckBrowser()) {
		var key = "";
		var list = "<tr><th>Name</th><th>Value</th></tr>\n";
		var i = 0;
		for (i = 0; i <= localStorage.length - 1; i++) {
			key = localStorage.key(i);
			list += "<tr><td>" + key + "</td>\n<td>"
					+ localStorage.getItem(key) + "</td></tr>\n";
		}
		if (list == "<tr><th>Name</th><th>Value</th></tr>\n") {
			list += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
		}
		document.getElementById('list').innerHTML = list;
	} else {
		alert('Cannot store username and password information as your browser do not support local storage');
	}
}

function CheckBrowser() {
	if ('localStorage' in window && window['localStorage'] !== null) {
		// we can use localStorage object to store data
		return true;
	} else {
			return false;
	}
}