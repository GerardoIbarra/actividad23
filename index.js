function showHide() {
  var div = document.getElementById("div1");
  var uno = document.getElementById('BotonAgregar');
  if (div.style.display == 'none') {
    div.style.display = '';
    uno.innerHTML='Ocultar Form';
  }
  else {
    div.style.display = 'none';
    uno.innerHTML='Agregar Usuario';

  }
}
function confirmacion(){
  if (confirm("Estas seguro de eliminar este usuario?")){
    return true;
  }else{
    return false;
  }

  }