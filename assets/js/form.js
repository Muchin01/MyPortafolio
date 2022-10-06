(function () {
  "use strict";

  //TODO Se obtiene todos los formularios, el cual se aplicaran los estilos personalizados para el validate de Bootstrap
  var forms = document.querySelectorAll(".needs-validation");

  // TODO Bucle para la validacion de forms true and false text
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

