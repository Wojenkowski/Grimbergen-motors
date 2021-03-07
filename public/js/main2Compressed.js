"use strict";

document.addEventListener('DOMContentLoaded', init);


function init() {
    const scrolOn = document.querySelectorAll(".nav-menu a, .mobile-nav a, .scrollto");
    for (let i = 0 ; i < scrolOn.length; i++) {
        scrolOn[i].addEventListener("click", SmoothScroll);
    }
    window.onscroll = function() {scrollFunction()};
}

function SmoothScroll(e) {
    if(location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        e.preventDefault();
        const yOffset = -190;
        const element = document.getElementById(this.hash.substring(1));
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({top: y});
    }
}

function scrollFunction() {
    const mybutton = document.querySelectorAll(".back-to-top")[0];
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
