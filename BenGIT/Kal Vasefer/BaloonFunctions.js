function BaloonExam()
{
    window.location="FiveBaloonsExam.php"
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
    //document.getElementById('first_name').innerHTML=Correct*20
    //return Correct*20

}