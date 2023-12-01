$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/reports.php",
      element: "#rprimero",
      title: "DT Monster Leads",
      content: "Hora y Fecha del Reporte"
    }, {
      path: "/reports.php",
      element: "#rsegundo",
      title: "DT Monster Leads",
      content: "Fechas a ver"
    }, {
      path: "/reports.php",
      element: "#rtercero",
      title: "DT Monster Leads",
      content: "Ver Campañas"
    }, {
      path: "/reports.php",
      element: "#rcuarto",
      title: "DT Monster Leads",
      content: "Tipos de Reporte"
    }, {
      path: "/reports.php",
      element: "#rquinto",
      title: "DT Monster Leads",
      content: "Exportar PDF"
    }, {
      path: "/reports.php",
      element: "#rsexto",
      title: "DT Monster Leads",
      content: "Exportar CSV"
    }, {
      path: "/reports.php",
      element: "#rseptino",
      title: "DT Monster Leads",
      content: "Ver Grafica"
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
