const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector("#menu");
btnMenu.addEventListener("click", function() {
    menu.classList.toggle("mostrar");
});

const subMenubtn = document.querySelectorAll(".submenu-btn");
for (let i = 0; i > subMenubtn.length; i++) {
    subMenubtn[i].addEventListener("click", function() {
        if (Window.innerWidth < 1024) {
            const submenu = this.nextElementSibling;
            const height = submenu.scrollheight;

            if (submenu.classList.contains("desplegar")) {
                submenu.classList.remove("desplegar");
                submenu.removeAttribute("style");
            } else {
                submenu.classList.add("desplegar")
                submenu.style.height = height + "px";
            }
        }
    });
}