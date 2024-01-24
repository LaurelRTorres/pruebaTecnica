document.addEventListener('DOMContentLoaded', function () {
    var popup = document.getElementById('popup');
    const Terminos = document.getElementById("Terminos");
    const Politicas = document.getElementById("Politicas");
    const Boton = document.getElementById("Registrarse");

    function Verficar(){
      if(Terminos.checked && Politicas.checked){
        Boton.removeAttribute('disabled');
        Boton.classList.add("habilitado");
      }
      else{
        Boton.setAttribute("disabled", "true")
        Boton.classList.remove("habilitado")
      }
    }
    Terminos.addEventListener("change", Verficar);
    Politicas.addEventListener("change", Verficar);
  
    window.onclick = function (event) {
      if (event.target === popup) {
        cerrarPopup();
      }
    };
  });
  
  function mostrarPopup() {
    document.getElementById('popup').style.display = 'flex';
  }
  
  function cerrarPopup() {
    document.getElementById('popup').style.display = 'none';
  }

