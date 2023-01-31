var xhttp = new XMLHttpRequest();
var to_do = document.getElementById("backlog");
var progress = document.getElementById("in-progresse");
var done = document.getElementById("done");

function load_js()
{
    var head= document.getElementsByTagName('head')[0];
    var script= document.createElement('script');
    script.src= 'main1.js';
    console.log(script.src);
    head.appendChild(script);
}



var arrow = document.querySelectorAll(".arrow");



function move_task_left(ev){
    let ch = ev.target.parentElement.parentElement;
    let newTask = ch.cloneNode(true);
    let idT =ch.querySelector(".ID_task");
    let num = parseInt(idT.innerHTML.replace("ID:", ""));
    
    if(ch.parentElement == progress){
        console.log(ch);

        to_do.appendChild(newTask);
        progress.removeChild(ch);
        xhttp.open("GET", "realtime?STAT=to_do&ID_TASK=" + num, true);
        xhttp.send();
        
    }
    if(ch.parentElement == done){
        progress.appendChild(newTask);
        done.removeChild(ch);
        xhttp.open("GET", "realtime?STAT=doing&ID_TASK=" + num, true);
        xhttp.send();
    }
    

}
function move_task_right(ev){
    let ch = ev.target.parentElement.parentElement;
    let newTask = ch.cloneNode(true);
    let idT =ch.querySelector(".ID_task");
    let num = parseInt(idT.innerHTML.replace("ID:", ""));
    if(ch.parentElement == progress){
        console.log(ch.parentElement);
        done.appendChild(newTask);
        progress.removeChild(ch);
        xhttp.open("GET", "realtime?STAT=done&ID_TASK=" + num, true);
        xhttp.send();
    }
    if(ch.parentElement == to_do){
        progress.appendChild(newTask);
        to_do.removeChild(ch);
        xhttp.open("GET", "realtime?STAT=doing&ID_TASK=" + num, true);
        xhttp.send();
    }
    

}

for(let i=0;i<10;i++){
    if((i+1)%2 == 0){
        console.log(i+1);
    }
}