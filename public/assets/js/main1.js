var div1 = document.getElementsByClassName("taskstodo");

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


for (var i = 0; i < div1.length; i++) {
    var input = div1[i];



    checkboxes = input.querySelectorAll(".card-body .form-check .allcheckboxes");
    for (let j = 0; j < checkboxes.length; j++) {
        checkboxes[j].onchange = function () {
            let m =
                this.parentElement.parentElement.querySelectorAll(".allcheckboxes");
            let x = Math.floor( 304 / m.length);
            console.log("x "+x);
            let progress_bar =
                this.parentElement.parentElement.getElementsByClassName(
                    "progress-bar"
                )[0];
            let pourcenatge = this.parentElement.parentElement.querySelector(
                ".text-right .pourcenatge"
            );
            let prct = parseInt(pourcenatge.innerHTML.replace("%", ""));
        
            var styles = window.getComputedStyle(progress_bar);
            var width = styles.getPropertyValue("width");
            var num = Math.floor(parseFloat(width.replace("px", "")));
            console.log("num "+num);
            if (this.checked) {
                let r = x + num;
                console.log("r "+r);
            
                progress_bar.setAttribute("style", "width: " + r + "px;");
                prct  =  Math.floor(prct) +   (x * 100) / 304 ;
                if (prct >= 99) {
                    prct = 100;
                }
                pourcenatge.innerHTML = Math.floor(prct) + "%";
            } else {
                num = num - x;
                progress_bar.setAttribute("style", "width: " + num + "px;");
                prct  = prct - Math.floor((x * 100) / 304);
                if (prct < 0) {
                    prct = 0;
                }
                pourcenatge.innerHTML = prct + "%";
            }
        };
    }
    
}

