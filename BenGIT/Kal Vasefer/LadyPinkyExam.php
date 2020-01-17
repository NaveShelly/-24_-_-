<html>
<script>
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "LadyPinkyUpdateGrade.php";
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
    var vars = "firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
</script>
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
<title> קל וספר-אתר מלווה ספר קריאה </title>
</head>
<meta charset="UTF-8">
<body>
<div style="position: absolute; left:125px; top:210px;">
<button class="button button1" onclick="Frontpageusers()">דף עידכונים</button>
</div>
<div style="position: absolute; left:395px; top:210px;">
<button class="button button2" onclick="play()">התחל לימוד קריאה</button>
</div>
<div style="position: absolute; left:565px; top:210px;">
<button class="button button3" onclick="connectionpageusers()">צור קשר</button>
</div>
<div style="position: absolute; left:695px; top:210px;">
<button class="button button4" onclick="userguideusers()">מדריך שימוש באתר</button>
</div>
<div style="position: absolute; left:1055px; top:210px;">
<button class="button button5" onclick="userpages()">ראשי</button>
</div>
<div style="position: absolute; left:875px; top:210px;">
<button class="button button6" onclick="report1()">דווח לנו על תקלות</button>
</div>
<div style="position: absolute; left:265px; top:210px;">
<button class="button button7" onclick="gradebutton()">משוב ציונים</button>
</div>
<div style="position: absolute; left:05px; top:210px;">
<button class="button button7" onclick="logout()">התנתקות</button>
</div>
<div style="position: absolute; left:800px; top:75px;">
    <h1>בוחן לתלמיד :מעשה בחמישה בלונים</h1>
</div>
<form id="Quize" name="Quize">
    <div style="position: absolute; left:1000px; top:300px;">
        <p>את מי חיפש מר אגודל? </p>
        <input id= "Q1"type="radio" name="Question1" value="Right" >את גברת זרת<br>
        <input id="Q2" type="radio" name="Question1" value="Wrong" >את גברת קמיצה<br>
        <input id="Q3"type="radio" name="Question1" value="Wrong" > את גברת אצבע<br>
        <input id="Q4"type="radio" name="Question1" value="Wrong" > גברת אמה<br>
    </div>
    <div style="position: absolute; left:1000px; top:500px;">
        <p>למה מר אגודל היה עצוב?</p>
        <input id= "Q6"type="radio" name="Question2" value="Wrong" >הוא קיבל מכה<br>
        <input id="Q7" type="radio" name="Question2" value="Wrong"  >הוא היה עייף<br>
        <input id="Q8"type="radio" name="Question2" value="Right"  > כי הוא לא מצא את גברת זרת<br>
        <input id="Q9"type="radio" name="Question2" value="Wrong"  >כי הוא לא מצא את גברת אצבע<br>

    </div>
    <div style="position: absolute; left:1000px; top:700px;">
        <p>מה לא אמרה למר אגודל גברת קמיצה?</p>
        <input id= "Q10"type="radio" name="Question3" value="Wrong" > שלום<br>
        <input id="Q11" type="radio" name="Question3" value="Right"  >שהיא יודעת איפה גברת זרת<br>
        <input id="Q12"type="radio" name="Question3" value="Wrong"  > להתראות<br>
        <input id="Q13"type="radio" name="Question3" value="Wrong"  >שהיא לא יודעת איפה גברת זרת<br>

    </div>

    <div style="position: absolute; left:1000px; top:900px;">
        <p>מי הלכו לטייל יחדיו? </p>
        <input id= "Q14"type="radio" name="Question4" value="Wrong" > אגודל וגברת זרת<br>
        <input id="Q15" type="radio" name="Question4" value="Right"  >כולם<br>
        <input id="Q16"type="radio" name="Question4" value="Wrong"  >גברת קמיצה ואמה<br>
        <input id="Q17"type="radio" name="Question4" value="Wrong"  >רק מר אגודל<br>

    </div>
    <div style="position: absolute; left:1000px; top:1100px;">
        <p>לאן הלכו כולם לטייל? </p>
        <input id= "Q18"type="radio" name="Question5" value="Right" >בגינה<br>
        <input id="Q19" type="radio" name="Question5" value="Wrong"  >בחדרו<br>
        <input id="Q20"type="radio" name="Question5" value="Wrong"  >בלונה פארק<br>
        <input id="Q21"type="radio" name="Question5" value="Wrong"  >בחוף<br>
        <p>                       </p>
        <p>                       </p>
    :שם משתמש<input id="first_name" name="first_name" type="hidden" value =30>  <br><br>
 <input id="last_name" name="last_name" type="text"> <br><br>
  <input name="myBtn" type="submit" value="הגש מבחן" onclick="CheckAnswer(),ajax_post(),moveexam();"> <br><br>

        <p>                       </p>
        <p id="ShowResult">    </p>
        <p>                       </p>
        <p>                       </p>

    </div>
    
<script src= "Functions.js"></script>
<script src= "Check.js"></script>
<div id="status"></div>
</body>
</html>