$(document).ready(function() {
	var tab = document.cookie.split("\\");
	var i = tab.length - 1;
	while (i > 0)
	{
		var div = document.createElement('div');
		div.textContent = tab[i];
		ft_list.insertBefore(div, ft_list.firstChild);
		div.setAttribute("onclick", "todoDel(this)");
		i--;
	}
});


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "\\" + cvalue + ";" + expires + ";path=/";
}

function saveADeliciousCake(ft_list)
{
	var str = "";
	for (var i = 0; i < ft_list.childNodes.length; i++)
	{
		if (i != 0)
			str += "\\";
		str += ft_list.childNodes[i].innerHTML;
	}
	console.log(str);
	setCookie("cake", str, 30);
}

function newTodo() {
	var task = prompt();
	if (task != null) {
		var div = document.createElement('div');
		div.textContent = task;
		ft_list.insertBefore(div, ft_list.firstChild);
		div.setAttribute("onclick", "todoDel(this)");
		saveADeliciousCake(ft_list);
    }
}
function todoDel(todo) {
	if (confirm("Êtes-vous sûr de vouloir supprimer ce todo ?")) {
		ft_list.removeChild(todo);
		saveADeliciousCake(ft_list);
	}
}