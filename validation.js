//alert("Yeahh")
var a=0;
function click1(){
    //alert("Changing");
    a=a+1;
}
function click2(){
    //alert("Changing");
    a=a+1;
}
function click3(){
    //alert("Changing");
    a=a+1;
}
function click4(){
    //alert("Changing");
    a=a+1;
}
function validate(){
    var resp=document.feedbackfrm.ra.value;
    //alert(resp);
    var rate=document.feedbackfrm.sel.value;
    //alert(rate);
    var txtarea=document.feedbackfrm.txtar.value;
    //alert(txtarea);
    if(resp==""){
        alert("You haven't selected any responsiveness option");
        return false;
    }
    if(rate=="Please select an option"){
        alert("You haven't selected any rating option!");
        return false;
    }
    if(a==0){
        alert("You haven't selected any likeliness");
        return false;
    }
    if(txtarea==""){
        alert("You haven't written any detailed feedback!");
        return false;
    }
return true;
}
