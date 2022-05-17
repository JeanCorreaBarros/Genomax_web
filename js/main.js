
  function myOnLoad() {
    cargar_opciones();
  }

  
  function cargar_opciones() {
    var json = {
      Opcion1: "",
      Opcion2: "",
      Opcion3: "",
      Opcion4: "",
      Opcion5: "",
    };

    addOptions("opciones", json);
  }

  function addOptions(domElement, json) {
    var select = document.getElementsByName(domElement)[0];

    Object.keys(json).forEach(function (elm) {
      var option = document.createElement("option");
      option.text = elm;
      select.add(option);
    });
  }

