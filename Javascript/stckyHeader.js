const mnlogo=document.getElementById("lg1");
const navBr=document.getElementById("nv");

    window.addEventListener('scroll',(e)=>{
        
        if (window.pageYOffset>0) {
            mnlogo.style.fontSize="20px";
            navBr.classList.add("scrolling");
        } else {
            mnlogo.style.fontSize="30px";
            navBr.classList.remove("scrolling");
        }


        /*let scroll=this.scrollY;
        if (window.pageYOffset<scroll) {
            mnlogo.style.fontSize="30px";
        }*/
    });

