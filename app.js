document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
  evento.preventDefault();
  var txt_nombre = document.getElementById('txt_nombre').value;
  if (txt_nombre.length == 0) {
    alert('No has escrito nada en el nombre');
    return;
  }
  var int_num = document.getElementById('int_num').value;
  if (int_num.length == 0) {
    alert('No has escrito nada en el numero');
    return;
  }
  var txt_usuario = document.getElementById('txt_usuario').value;
  if (txt_usuario.length == 0) {
    alert('No has escrito nada en el usuario');
    return;
  }
  var int_ced = document.getElementById('int_ced').value;
  if (int_ced.length == 0) {
    alert('No has escrito nada en el la Cedula');
    return;
  }
  var txt_email = document.getElementById('txt_email').value;
  if (txt_email.length == 0) {
    alert('No has escrito nada en el correo');
    return;
  }
  var int_contra = document.getElementById('int_contra').value;
  if (int_contra.length < 6) {
    alert('La clave no es válida, MINIMO 6 CARACTERES');
    return;
  }
  var int_contra1 = document.getElementById('int_contra1').value;
  if (int_contra1.length < 6) {
    alert('La clave no es válida, MINIMO 6 CARACTERES');
    return;
  }
  this.submit();
}