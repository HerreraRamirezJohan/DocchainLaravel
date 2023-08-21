document.addEventListener('DOMContentLoaded', function(){
    if(window.location.pathname === '/')
        startApp();
});

function startApp(){
    swapForms();
    scrollNav();
}
/* Generar una navegacion suve al usar los links */
function scrollNav(){
    const links = document.querySelectorAll('.principal-nav');
    links.forEach(enlace =>{
        enlace.addEventListener('click', function (e){
            e.preventDefault();

            const sectionScroll = e.target.attributes.href.value;
            const section = document.querySelector(sectionScroll);

            section.scrollIntoView({behavior: "smooth"});
        });
    });
}
/* Cambiar entre el formulario de registro y el de inicio de sesion */
function swapForms(){
    const changeForm = document.querySelectorAll('.changeForm');
    const forms = document.querySelectorAll('.form-container');

    changeForm.forEach(link =>{
        link.addEventListener('click', ()=>{
            forms.forEach(form =>{
                // Iterar entre formularios
                form.style.zIndex *= -1;
                // Eliminar .input-errors
                const errors = document.querySelectorAll('.input-error');
                errors.forEach(error => error.remove());
            });
        });
    });
}
