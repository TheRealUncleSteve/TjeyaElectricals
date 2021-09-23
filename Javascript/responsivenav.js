const burger=document.querySelector('.hamburger');
const navlinks=document.querySelector('.nav_links');
const links= document.querySelectorAll('.nav_links li');

burger.addEventListener('click',()=>{
    navlinks.classList.toggle("nav-active");
    links.forEach((link,index) =>{
        if (link.style.animation) {
            link.style.animation=''
        } else {
            link.style.animation=`navLinksFade 0.5s ease forwards ${index/7+0}s`;
        }
    })
})