$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/campaigns.php",
      element: "#primero",
      title: "DT Monster Leads",
      content: "Información de los Pasos a Seguir"
    }, {
      path: "/campaigns.php",
      element: "#segundo",
      title: "DT Monster Leads",
      content: "Seleccionar Campaña"
    }, {
      path: "/campaigns.php",
      element: "#tercero",
      title: "DT Monster Leads",
      content: "Nombre de Campaña"
    }, {
      path: "/campaigns.php",
      element: "#cuarto",
      title: "DT Monster Leads",
      content: "Parametro de Registro"
    }, {
      path: "/campaigns.php",
      element: "#quinto",
      title: "DT Monster Leads",
      content: "Seleccionar Conexion"
    }, {
      path: "/campaigns.php",
      element: "#sexto",
      title: "DT Monster Leads",
      content: "Seleccionar Conexion"
    }, {
      path: "/campaigns.php",
      element: "#septimo",
      title: "DT Monster Leads",
      content: "Avanzar a crear Campaña"
    }

    ]
  });

  // init tour
  tour.init();

  // start tour
  $('#start-tour').click(function() {
    tour.restart();
  });
  

});
