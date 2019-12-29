
function LionExam()
{
    window.location="LadyPinkyExam.html"
}
function CheckAnswer()
{var Correct=0
    var Question1=document.Quize.Question1.value
    var Question2=document.Quize.Question2.value
    var Question3=document.Quize.Question3.value
    var Question4=document.Quize.Question4.value
    var Question5=document.Quize.Question5.value
    if(Question1=="Right")
    {
        Correct++
    }
    if(Question2=="Right")
    {
        Correct++
    }
    if(Question3=="Right")
    {
        Correct++
    }
    if(Question4=="Right")
    {
        Correct++
    }
    if(Question5=="Right")
    {
        Correct++
    }
    alert("Your Grade Is "+ Correct*20)
    document.getElementById("ShowResult").innerHTML="Your Grade Is "+ Correct*20



}
