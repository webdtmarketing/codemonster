$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/messages.php",
      element: "#mprimero",
      title: "DT Monster Leads",
      content: "Filtrar Reporte"
    }, {
      path: "/messages.php",
      element: "#msegundo",
      title: "DT Monster Leads",
      content: "Sincronizar cuenta"
    }, {
      path: "/messages.php",
      element: "#mtercero",
      title: "DT Monster Leads",
      content: "Buscar Mensaje"
    }, {
      path: "/messages.php",
      element: "#mcuarto",
      title: "DT Monster Leads",
      content: "Seleccionar conversación"
    }, {
      path: "/messages.php",
      element: "#mquinto",
      title: "DT Monster Leads",
      content: "Mensajes de conversación"
    }, {
      path: "/messages.php",
      element: "#msexto",
      title: "DT Monster Leads",
      content: "Escribir mensaje"
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
