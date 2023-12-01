$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/manage-campaigns.php",
      element: "#cprimero",
      title: "DT Monster Leads",
      content: "Seleccionar Tipo de Campaña"
    }, {
      path: "/manage-campaigns.php",
      element: "#csegundo",
      title: "DT Monster Leads",
      content: "Información de pasos a seguir"
    }, {
      path: "/manage-campaigns.php",
      element: "#ctercero",
      title: "DT Monster Leads",
      content: "Crear Secuencia"
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
