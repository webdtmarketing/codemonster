$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/smart-sequence.php",
      element: "#sprimero",
      title: "DT Monster Leads",
      content: "Información de pasos de secuencia"
    }, {
      path: "/smart-sequence.php",
      element: "#ssegundo",
      title: "DT Monster Leads",
      content: "Iniciar Campaña"
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
