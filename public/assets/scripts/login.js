import axios from "axios";

const form = document.querySelector('form');
const message = document.querySelector('#message');

form.addEventListener('submit', async (e) => {
    e.preventDefault();

    try {
        const formData = new FormData(form);
        const { data } = await axios.post('/login',formData);

        message.textContent = 'Logado com sucesso!';
        message.classList.add('alert-success');

        setTimeout(()=>{
            window.location.href = '/admin';
        },2000);

    } catch (error) {
        message.textContent = 'Erro ao fazer login!';
        message.classList.add('alert-error');
    }
});