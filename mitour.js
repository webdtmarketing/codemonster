$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/project.php",
      element: "#my-element",
      title: "Primer Paso",
      content: "Bienvenida a DT Monster Leads Campañas"
    }, {
      path: "/project.php",
      element: "#my-second-element",
      title: "Segundo Paso",
      content: "Crear Campaña"
    }, {
      path: "/project.php",
      element: "#my-tercer-element",
      title: "Este es el Tercer",
      content: "Siguiente Paso"
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
