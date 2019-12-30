/**
 * 
 */
function funcLogin()
{
    window.location="login.html";
}
function frontpage()
{
	window.location= "FrontPageExample.html";
}
function adminpage()
{
    window.location="adminloginpage.html";
}
function secondpage()
{
	window.location="odot.html";
}
function adminlogin(pw) 
{
    var input = document.getElementById('pw').value;
    if(input=='admin12345')
    {
        location.href = "https://il.000webhost.com/members/website/kalvasefer/database";
        alert("Moving to Database");
    }
    else
    {
        alert("Worng Password");
    }
}
function howtouse()
{
	window.location="userguide.html"
}
function userpages()
{
    location.href = "userHomePage.html";
}
function regpage()
{
	window.location="https://kalvasefer.000webhostapp.com/signup.php"
}
function connectionpage()
{
	window.location="connection.html";
}
function play()
{
    window.location=("https://kalvasefer.000webhostapp.com/Levels.html");
}
function LionExam()
{
	window.location="LionExam.html"
}
function CheckAnswer(Question,Check)
{
	if (Question == 1) alert("yes")
	else alert("nono")
}