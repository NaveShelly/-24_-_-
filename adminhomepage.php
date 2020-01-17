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
<title> קל וספר-אתר מלווה ספר קריאה </title>
<meta charset="UTF-8">
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
<script src= "Functions.js"></script>
</body>
</html>