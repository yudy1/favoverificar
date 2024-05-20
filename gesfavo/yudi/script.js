document.addEventListener('DOMContentLoaded', function() {
    const signUpButton = document.querySelector('input[name="registro"]');

    signUpButton.addEventListener('click', function(event) {
        event.preventDefault(); // Previene el envío del formulario para validación

        const form = document.forms['shoppingcart'];

        // Validaciones de ejemplo
        if (form['usuarname'].value.trim() === '') {
            alert('Por favor, ingrese su nombre completo');
            form['usuarname'].focus();
            return;
        }
        if (form['usuarsurnames'].value.trim() === '') {
            alert('Por favor, ingrese sus apellidos completos');
            form['usuarsurnames'].focus();
            return;
        }
        if (form['usuarphone'].value.trim() === '') {
            alert('Por favor, ingrese su teléfono');
            form['usuarphone'].focus();
            return;
        }
        if (form['usuaraddress'].value.trim() === '') {
            alert('Por favor, ingrese su dirección');
            form['usuaraddress'].focus();
            return;
        }
        if (form['usuarmunicipality'].value.trim() === '') {
            alert('Por favor, ingrese su municipio');
            form['usuarmunicipality'].focus();
            return;
        }
        if (form['usuardepartment'].value.trim() === '') {
            alert('Por favor, ingrese su departamento');
            form['usuardepartment'].focus();
            return;
        }
        if (form['usuardocument'].value.trim() === '') {
            alert('Por favor, ingrese su número de documento');
            form['usuardocument'].focus();
            return;
        }
        if (form['usuaremail'].value.trim() === '') {
            alert('Por favor, ingrese su correo electrónico');
            form['usuaremail'].focus();
            return;
        }
        if (form['usuarbirthdate'].value.trim() === '') {
            alert('Por favor, ingrese su fecha de nacimiento');
            form['usuarbirthdate'].focus();
            return;
        }

        // Enviar los datos mediante AJAX
        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'prueba.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                alert('Formulario enviado exitosamente');
                // Aquí puedes añadir más acciones después de enviar el formulario exitosamente
            } else {
                alert('Error al enviar el formulario');
            }
        };
        xhr.send(formData);
    });
});
