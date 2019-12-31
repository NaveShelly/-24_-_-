<!DOCTYPE html>
<html>
<head>
	<title>Register Kal Vasefer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="position: absolute; left:100px; top:62px;">
<button id="button1" onclick="Frontpage()">דף עידכונים</button>
</div>
<div style="position: absolute; left:270px; top:62px;">
<button id="button2" onclick="adminpage()">כניסת מנהל</button>
</div>
<div style="position: absolute; left:400px; top:62px;">
<button id="button3" onclick="howtouse()">מדריך שימוש באתר</button>
</div>
<div style="position: absolute; left:600px; top:62px;">
<button id="button4" onclick="regpage()"הרשמה תלמיד</button>
</div>
<div style="position: absolute; left:720px; top:62px;">
<button id="button5" onclick="funcLogin()">כניסת משתמש</button>
</div>
<div style="position: absolute; left:1100px; top:62px;">
<button id="button6" onclick="frontpage()">ראשי</button>
</div>
<div style="position: absolute; left:900px; top:62px;">
    <button id="button7" onclick="connectionpage()">צור קשר</button>
</div>    
<div style="margin: auto;width: 60%;position: absolute; left:250px; top:200px;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">password:</label>
			<input type="text" class="form-control" id="password" placeholder="password" name="password">
		</div>
		<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
	</form>
</div>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		var password = $('#password').val();
		if(name!="" && email!="" && password!=""){
			$.ajax({
				url: "save3.php",
				type: "POST",
				data: {
					name: name,
					email: email,
					password: password,
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !');
						window.location=("https://kalvasefer.000webhostapp.com/parentlogin.html");
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
<script src= "Functions.js"></script>
</body>
</html>
  