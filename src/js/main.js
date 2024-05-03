document.addEventListener("DOMContentLoaded", () => {
    const addUserButton = document.querySelector('.add');
    // const editUserButton = document.querySelector('.edit');
    const closeAddModal = document.querySelector('.close-add');
    // const closeEditModal = document.querySelector('.close-edit');
    const addUserModal = document.querySelector('.modal-cadastro');
    // const editUserModal = document.querySelector('.modal-edicao');
    addUserModal.classList.add("invisible");
    // editUserModal.classList.add("invisible");

    addUserButton.addEventListener("click", (event) => {
        addUserModal.classList.remove("invisible");
    })

    closeAddModal.addEventListener("click", () => {
        addUserModal.classList.add("invisible");
    })

    // editUserButton.addEventListener("click", (event) => {
    //     editUserModal.classList.remove("invisible");
    // })

    // closeEditModal.addEventListener("click", () => {
    //     editUserModal.classList.add("invisible");
    // })
})