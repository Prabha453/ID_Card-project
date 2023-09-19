function cart(id){	
	sessionStorage.clear();
	sessionStorage.setItem('pid',id);
	$.post('cartItems.php', {pid:sessionStorage.getItem('pid')}, function(response){ 
	
      var txt;
  var r = confirm(response);
  if (r == true) {
	if(response.indexOf('Login') != -1){
		window.location.href="login.php";
	}else{
		window.location.href="index.php";
	}
  } else {
    window.location.href="index.php";
  }
});
	
}

function admin()
{
	var mail="prabha123456789@gmail.com";
	var pass="asprabha453";
	var m=document.getElementById('email').value;
	var p=document.getElementById('upass').value;
	if(mail==m && pass==p)
	{
		return true;
	}
	else
	{
		alert('Enter Correct email Or Password');
	}
}