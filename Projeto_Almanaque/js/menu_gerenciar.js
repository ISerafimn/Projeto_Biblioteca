const gerenciar_cont = document.querySelectorAll(".gerenciar_cont");

gerenciar_cont.forEach(gerenciar_cont => {
    gerenciar_cont.addEventListener("click", () => {
        gerenciar_cont.classList.toggle("active");
    })
})