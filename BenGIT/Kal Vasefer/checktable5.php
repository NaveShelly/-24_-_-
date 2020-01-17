<html>
<head>
	<title>Login Kal Vasefer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<title> קל וספר-אתר מלווה ספר קריאה </title>
<meta charset="UTF-8">
</head>
<body>
<div style="position: absolute; left:785px; top:210px;">
<button class="button button1" onclick="Frontpage()">דף עידכונים</button>
</div>
<div style="position: absolute; left:920px; top:210px;">
<button class="button button2" onclick="userguideparent()">מדריך שימוש באתר</button>
</div>
<div style="position: absolute; left:1100px; top:210px;">
<button class="button button3" onclick="ParentHomePage()">ראשי</button>
</div>
<div style="position: absolute; left:665px; top:210px;">
<button class="button button4" onclick="connectionparent()">צור קשר</button>
</div>
<div style="position: absolute; left:530px; top:210px;">
<button class="button button5" onclick=" takegrade()">משוב ציונים</button>
</div>
<div style="position: absolute; left:360px; top:210px;">
<button class="button button6" onclick="reportparent()">דווח לנו על תקלות</button>
</div>
<div style="position: absolute; left:230px; top:210px;">
<button class="button button7" onclick="logout()">התנתקות</button>
</div>
<div style="margin: auto;width: 60%;position: absolute; left:250px; top:300px;">
	<div class="form-group">
			<label for="pwd">הכנס מספר תעודת זהות של התלמיד</label>
			<input type="Child_ID" class="form-control" id="Child_ID_log" placeholder="הקלד כאן" name="Child_ID">
			<input type="button" name="save" class="btn btn-primary" value="קבל ציון" id="butlogin">
		</div>
</div>
<script>
$(document).ready(function() {
	$('#butlogin').on('click', function() {
		var Child_ID = $('#Child_ID_log').val();
		if(Child_ID!=""){
			$.ajax({
				url: "GradeTable2.php",
				type: "POST",
				data: {
					Child_ID: Child_ID,
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode>=0 && dataResult.statusCode<=100){
					   alert(dataResult.statusCode);
					}
					else
					{
					    alert("Grade Not Found!");
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
