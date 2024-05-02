document.addEventListener("DOMContentLoaded", () => {
    const addMusicButton = document.querySelector('.add');
    const closeModalButton = document.querySelector('.close');
    const modal = document.querySelector('.modal');
    modal.classList.add("invisible");

    addMusicButton.addEventListener("click", (event) => {
        modal.classList.remove("invisible");
    })

    closeModalButton.addEventListener("click", () => {
        modal.classList.add("invisible");
    })
})