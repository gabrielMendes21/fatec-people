document.addEventListener("DOMContentLoaded", () => {
    const addUserButton = document.querySelector('.add');
    const editUserButton = document.querySelector('.edit');
    const closeAddModal = document.querySelector('.close-add');
    const addUserModal = document.querySelector('.modal-cadastro');
    const editUserModal = document.querySelector('.modal-edicao');
    addUserModal.classList.add("invisible");

    addUserButton.addEventListener("click", (event) => {
        addUserModal.classList.remove("invisible");
    })

    closeAddModal.addEventListener("click", () => {
        addUserModal.classList.add("invisible");
    })

    editUserButton.addEventListener("click", (event) => {
        addUserModal.classList.remove("invisible");
    })

    closeModalButton.addEventListener("click", () => {
        editUserModal.classList.add("invisible");
    })
})