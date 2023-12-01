$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/integrations.php",
      element: "#iprimero",
      title: "DT Monster Leads",
      content: "Crear nuevo Webhook"
    }, {
      path: "/integrations.php",
      element: "#isegundo",
      title: "DT Monster Leads",
      content: "Ver campañas"
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
