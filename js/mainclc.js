var task1=document.getElementById("task1");
var task2=document.getElementById("task2");
var task3=document.getElementById("task3");
task1.onclick= function(){
    window.location='/task1/index?page=1';
}
task2.onclick= function(){
    window.location='/task2/index';
}
task3.onclick= function(){
    window.location='/task3/index';
}
