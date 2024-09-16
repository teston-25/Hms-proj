// HashChangeEventmburger and close access
const toggle=document.querySelector('.menu');
const primaryNav=document.querySelector('.primary-nav');

toggle.addEventListener('click', () =>{
    const visibility=primaryNav.getAttribute('data-visible');
    if(visibility === "false"){
        primaryNav.setAttribute('data-visible',true);
        toggle.setAttribute('aria-expanded',true);
    }
    else if(visibility === "true"){
        primaryNav.setAttribute('data-visible',false);
        toggle.setAttribute('aria-expanded',false);
    }
})


