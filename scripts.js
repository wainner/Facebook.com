document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de la manera tradicional
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Aquí puedes agregar la lógica para manejar el nombre de usuario y la contraseña
    console.log('Usuario:', username);
    console.log('Contraseña:', password);

    // Para propósitos de demostración, mostraré una alerta
    alert(`Bienvenido, ${username}`);
});
