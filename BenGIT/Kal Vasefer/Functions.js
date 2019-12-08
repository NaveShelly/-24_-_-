/**
 * 
 */
function frontpage()
{
	window.location= "FrontPageExample.html";
}
function secondpage()
{
	window.location="odot.html";
}
function howtouse()
{
	window.location="userguide.html"
}
function regpage()
{
	window.location="register.html";
}
function connectionpage()
{
	window.location="connection.html";
}
function savedetails(username1,Fname,Lname,pw,maildetail)
{
	var input1 = document.getElementById('username1').value;
	var input2 = document.getElementById('Fname').value;
	var input3 = document.getElementById('Lname').value;
	var input4 = document.getElementById('pw').value;
	var input5 = document.getElementById('maildetail').value;
	alert("Register Complete");
	//localStorage.setItem('username', username1);
	//localStorage.setItem('FName', Fname);
	//localStorage.setItem('LName', Lname);
	//localStorage.setItem('pw', pw);
	//localStorage.setItem('email', maildetail)
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