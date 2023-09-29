let body = document.body;
let profile = document.querySelector('.profile');
document.querySelector('#user-btn').onclick = () => {
    profile.classList.toggle('active');
}
window.onscroll = () => {
    profile.classList.remove('active');
}