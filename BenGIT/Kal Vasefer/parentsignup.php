<!DOCTYPE html>
<html>
<head>
    <style type = "text/css">
    div.logo{
        text-align: center;
    }
       .button {
       background-color: #ffc320;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        opacity: 0.6;
        transition: 0.3s;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
}
.button:hover {opacity: 1}
</style>
<div class="logo">
    <img src="kalvaseferlogo[82].png"width="374" height="195" alt="kalVasefer logo"/>
</div>

	<title>Register Kal Vasefer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="position: absolute; left:25px; top:210px;">
<button class="button" onclick="Frontpage()">דף עידכונים</button>
</div>
<div style="position: absolute; left:159px; top:210px;">
<button class="button button2" onclick="adminlogin()">כניסת מנהל</button>
</div>
<div style="position: absolute; left:293px; top:210px;">
<button class="button button8" onclick="parent_login()">כניסת הורה</button>
</div>
<div style="position: absolute; left:426px; top:210px;">
<button class="button button9" onclick=" regpageparent()">הרשמה הורה</button>
</div>
<div style="position: absolute; left:570px; top:210px;">
<button class="button button5" onclick="funcLogin()">כניסת תלמיד</button>
</div>
<div style="position: absolute; left:711px; top:210px;">
<button class="button button4" onclick="regpage()">הרשמה תלמיד</button>
</div>
<div style="position: absolute; left:862px; top:210px;">
<button class="button button7" onclick="connectionpage()">צור קשר</button>
</div>
<div style="position: absolute; left:979px; top:210px;">
<button class="button button3" onclick="howtouse()">מדריך שימוש באתר</button>
</div>
<div style="position: absolute; left:1157px; top:210px;">
<button class="button button6" onclick="frontpage()">ראשי</button>
</div>

<div style="margin: auto;width: 60%;position: absolute; left:250px; top:290px;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="email">תעודת זהות של ילדך:</label>
			<input type="text" class="form-control" id="Child_ID" placeholder="הקלד כאן" name="ID">
		</div>
		<div class="form-group">
			<label for="pwd">אימייל:</label>
			<input type="email" class="form-control" id="email" placeholder="הקלד כאן" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">סיסמא:</label>
			<input type="text" class="form-control" id="password" placeholder="הקלד כאן" name="password">
		</div>
		<input type="button" name="save" class="btn btn-primary" value="הרשם" id="butsave">
	</form>
</div>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var Child_ID = $('#Child_ID').val();
		var email = $('#email').val();
		var password = $('#password').val();
		if(Child_ID!="" && email!="" && password!=""){
			$.ajax({
				url: "save3.php",
				type: "POST",
				data: {
					Child_ID: Child_ID,
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
						window.location=("https://kalvasefer.000webhostapp.com/parentlogin.php");
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
  