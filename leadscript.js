$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/leads.php",
      element: "#lprimero",
      title: "DT Monster Leads",
      content: "Ver las Campañas"
    }, {
      path: "/leads.php",
      element: "#lsegundo",
      title: "DT Monster Leads",
      content: "Exportar Datos"
    }, {
      path: "/leads.php",
      element: "#ltercero",
      title: "DT Monster Leads",
      content: "Exportar Leads"
    }, {
      path: "/leads.php",
      element: "#lcuarto",
      title: "DT Monster Leads",
      content: "Añadir Nuevos Leads"
    }, {
      path: "/leads.php",
      element: "#lquinto",
      title: "DT Monster Leads",
      content: "Ver Datos"
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
