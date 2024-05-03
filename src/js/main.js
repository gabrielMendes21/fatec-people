document.addEventListener("DOMContentLoaded", () => {
    const addUserButton = document.querySelector('.add');
    const closeModalButton = document.querySelector('.close');
    const modal = document.querySelector('.modal-cadastro');
    modal.classList.add("invisible");

    addUserButton.addEventListener("click", (event) => {
        modal.classList.remove("invisible");
    })

    closeModalButton.addEventListener("click", () => {
        modal.classList.add("invisible");
    })
})