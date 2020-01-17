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

	<title>עדכון פרטי משתמש-הורים</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="position: absolute; left:209px; top:210px;">
<button class="button button1" onclick="Frontpageusers()">דף עידכונים</button>
</div>
<div style="position: absolute; left:525px; top:210px;">
<button class="button button2" onclick="adminupdateadult()">עדכן פרטי הורים</button>
</div>
<div style="position: absolute; left:695px; top:210px;">
<button class="button button4" onclick="userguideadmin()">מדריך שימוש באתר</button>
</div>
<div style="position: absolute; left:1055px; top:210px;">
<button class="button button5" onclick="adminhomepage()">ראשי</button>
</div>
<div style="position: absolute; left:875px; top:210px;">
<button class="button button6" onclick="report2()">דווח לנו על תקלות</button>
</div>
<div style="position: absolute; left:345px; top:210px;">
<button class="button button7" onclick="adminupdatechild()">עדכן פרטי תלמידים</button>
</div>
<div style="position: absolute; left:85px; top:210px;">
<button class="button button8" onclick="logout()">התנתקות</button>
</div>    
<div style="margin: auto;width: 60%;position: absolute; left:250px; top:290px;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="email">הכנס מספר תעודת זהות</label>
			<input type="text" class="form-control" id="Child_ID" placeholder="הקלד כאן" name="ID">
		</div>
		<div class="form-group">
			<label for="pwd">הכנס את הסיסמה החדשה</label>
			<input type="text" class="form-control" id="password" placeholder="הקלד כאן" name="password">
		<input type="button" name="save" class="btn btn-primary" value="עדכן פרטים" id="butsave">
	</form>
</div>
<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var Child_ID = $('#Child_ID').val();
		var password = $('#password').val();
		if(Child_ID!=""&& password!=""){
			$.ajax({
				url: "updateparent.php",
				type: "POST",
				data: {
				    Child_ID: Child_ID,
					password: password
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data updated successfully !');
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
  