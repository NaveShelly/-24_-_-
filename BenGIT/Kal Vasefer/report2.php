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

	<title>דיווח על תקלות</title>
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
		<div class="form-group" >
			<label for="pwd">סוג משתמש</label>
			<select name="type" id="type" class="form-control">
				<option value="">בחר סוג משתמש</option>
				<option value="student">תלמיד</option>
				<option value="parent">הורה</option>
				<option value="admin">מנהל</option>
			</select>
		</div>
	    <div class="form-group" >
			<label for="pwd">עדיפות התקלה?:</label>
			<select name="priority" id="priority" class="form-control">
				<option value="">בחר עדיפות</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</div>
		<textarea rows="5" cols="80" name="msg" id="msg"></textarea>
		<input type="button" name="save" class="btn btn-primary" value="שלח" id="butsave">
		<label for="pwd">דווח לנו על תקלות באתר</label>
</div>
<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var type = $('#type').val();
		var priority = $('#priority').val();
		var msg = $('#msg').val();
		if(type!=""&&msg!="" &&priority!=""){
			$.ajax({
				url: "savereport.php",
				type: "POST",
				data: {
				    type: type,
					priority: priority,
					msg: msg
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('הדיווח שלך נשלח אלינו,תודה');
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