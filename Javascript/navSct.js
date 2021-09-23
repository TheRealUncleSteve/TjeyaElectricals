let counter =1;
let tmr=4000;
setInterval((e)=>{
    document.getElementById('rad' + counter).checked=true;
    counter++;
    if (counter > 3) {
        counter=1;
        tmr=4000
    }
    else if (counter == 3) {
            tmr=5000;
        }

}, tmr);