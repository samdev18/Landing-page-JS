var modal = document.querySelector("#simpleModal");
var modalBtn = document.querySelector("#modalBtn");
var closeBtn = document.querySelector(".closeBtn");
var btnMenu = document.querySelector(".btn");
var sideBar = document.querySelector('.sidebar')

//Evento para abrir o modal
modalBtn.addEventListener('click', openModal);
//Evento para fechar o modal ao clicar no botão "x"
closeBtn.addEventListener('click', closeModal);
//Evento para fechar o modal ao clicar fora
window.addEventListener('click', outsideClick)
//Alterar botão hamburger
btnMenu.addEventListener('click', toggleClass);
//Função para abrir o modal
function openModal() {
    modal.classList.remove('modalFechado');
    modal.classList.add('modalAtivo');
}
//Função para fehcar o modal ao clicar no botão "x"
function closeModal() {
    modal.classList.remove('modalAtivo');
    modal.classList.add('modalFechado');
}
//Função para fehcar o modal ao clicar fora
function outsideClick(e) {
    if (e.target == modal) {
        modal.classList.remove('modalAtivo');
        modal.classList.add('modalFechado');
    }
}
//Alterar botão hamburger
function toggleClass() {
    btnMenu.classList.toggle('btnc');
    sideBar.classList.toggle('side');
}
