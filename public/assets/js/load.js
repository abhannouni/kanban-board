var xhttp = new XMLHttpRequest();

window.addEventListener('load', (event) => {
    let progress = document.querySelectorAll(".progress");
    for(let i=0;i<progress.length; i++){
        let progress_bar = progress[i].querySelector('.progress-bar');
        let prcnt = progress[i].parentElement.querySelector(".pourcenatge");
        let num = parseInt(prcnt.innerHTML.replace("%", ""));
        let styles = window.getComputedStyle(progress[i]);
        let width = styles.getPropertyValue("width");
        let num1 = parseFloat(width.replace("px", ""));
        let w = num1 * (num/100);
        progress_bar.setAttribute("style", "width: " + w + "px;");
    }
});

function deleteTask(ev){
    let ab = ev.target.parentElement.parentElement;
    let element = ab.parentElement;
    let id = ev.target.parentElement.querySelector(".ID_task").innerHTML;
    element.removeChild(ab);
    let num = parseInt(id.replace("ID:", ""));
    xhttp.open("GET", "realtime?ID_DELETE=" + num , true);
    xhttp.send();
}

function show(event){
    let button = event.target.parentElement.parentElement;
    let ele = button.querySelectorAll(".ab")
    for(let k=0 ; k<ele.length ;k++)
    {
        button.querySelectorAll(".ab")[k].style.display = "block";
    }
    event.target.style.display = "none";
    button.querySelector(".bi-dash-square").style.display = "block";
    // button.querySelector(".progress").removeAttribute("style");

}

function hide(event){
    let button = event.target.parentElement.parentElement;
    let ele = button.querySelectorAll(".ab")
    for(let k=0 ; k<ele.length ;k++)
    {
        button.querySelectorAll(".ab")[k].style.display = "none";
    }
    event.target.style.display = "none";
    button.querySelector(".bi-plus-square").style.display = "block";
}

function checkDivExists(className) 
{
    var elements = document.getElementsByClassName(className);
    if (elements.length > 0) {
        return true;
    }
    else {
        return false;
    }
}
if(checkDivExists("alert"))
{
    setTimeout(function(){
    var x = document.getElementsByClassName("alert");
    x[0].style.display = "none";
    }, 3000);
}

const compareDates = (d1, d2) => {
    let date1 = new Date(d1).getTime();
    let date2 = new Date(d2).getTime();
  
    if (date1 < date2) {
      console.log(`${d1} is less than ${d2}`);
      return -1;
    } else if (date1 > date2) {
      console.log(`${d1} is greater than ${d2}`);
      return 1;
    } else {
      console.log(`Both dates are equal`);
      return 0;
    }
  };


function sortby_date(ev){
    let task_to_do = ev.target.parentElement.parentElement.querySelectorAll(".taskstodo");
    
    for(let i=0;i<task_to_do.length - 1;i++){
        console.log(task_to_do[i]);
        datei = task_to_do[i].querySelector(".deadline").innerHTML;
        for(let j=i+1 ; j < task_to_do.length ; j++){
            datej = task_to_do[j].querySelector(".deadline").innerHTML;
            if( compareDates(datei,datej) == -1){
                task_to_do[i].parentNode.insertBefore(task_to_do[j], task_to_do[i]);
            }
        }
    }
    
}

function searchA(ev){
    let all_tasks = document.querySelectorAll(".taskstodo");
    // let ab = ev.target.parentElement.querySelector("input").value;
    let ab = ev.target.value;
    console.log(ab);
    if(ab.length == 0){
        for(let i=0 ; i<all_tasks.length ; i++){
            // console.log(all_tasks);
            all_tasks[i].style.display = "";
        }
        return;
    }else{
        for(let i=0 ; i<all_tasks.length ; i++){
            let titre =  all_tasks[i].querySelector(".title").innerHTML;
            console.log(titre);
            let bc = 0;
            let j = 0;
            while( j<ab.length ) {
                console.log(titre[j]);
                console.log(ab[j]);
                if( titre[j] != ab[j]){
                    all_tasks[i].style.display = "none";
                    bc = 1;
                }else{
                    all_tasks[i].style.display = "";
                }
                if(bc == 1){
                    j = titre.length;
                }
                j++;
            }
        }
    }
}

function myfunction(ev)
{   
    console.log(ev.target.parentElement.parentElement);
    let a = ev.target.parentElement.parentElement;
    let checkboxes = a.querySelectorAll(".allcheckboxes");
    let prct = 100/checkboxes.length;
    let progress_bar = a.querySelector(".progress-bar");
    let progress = a.querySelector(".progress");
    let pourcenatge = a.querySelector(".pourcenatge");
    let ID = a.querySelector(".ID_task").innerHTML;
    let prctage = parseInt(pourcenatge.innerHTML.replace("%", ""));
    let ID_num = parseInt(ID.replace("ID:", ""));
    console.log(ID_num);
    let ID_check = ev.target.value;

    let styles = window.getComputedStyle(progress);
    let width = styles.getPropertyValue("width");
    let styles1 = window.getComputedStyle(progress_bar);
    let width1 = styles1.getPropertyValue("width");
    let num1 = parseFloat(width1.replace("px", ""));
    let num = parseFloat(width.replace("px", ""))/checkboxes.length;
    if (ev.target.checked){
        var ppr = Math.floor(prctage)+Math.floor(prct);
        console.log(checkboxes.length);
        console.log(num);
        let r =  num1 + num; 
        
        progress_bar.setAttribute("style", "width: " +r + "px;");
        xhttp.open("GET", "realtime?STATCHECKBOX=checked&ID_S_TASK=" + ID_check, true);
        xhttp.send();
        pourcenatge.innerHTML = ppr + "%";
    }else {
        let r =  num1 - num; 
        var ppr = Math.floor(prctage)-Math.floor(prct)
        progress_bar.setAttribute("style", "width: " + r + "px;");
        pourcenatge.innerHTML =  ppr + "%";
        xhttp.open("GET", "realtime?STATCHECKBOX=not_checke&ID_S_TASK=" + ID_check, true);
        xhttp.send();
    }
    // window.location.href = "kanban?progress=" + ppr + "&ID_TASK=" + ID_num;
    xhttp.open("GET", "realtime?progress=" + ppr + "&ID_TASK=" + ID_num, true);
    xhttp.send();
}


