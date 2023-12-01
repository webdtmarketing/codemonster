$(function() {
  
  // define tour
  var tour = new Tour({
    debug: true,
    basePath: location.pathname.slice(0, location.pathname.lastIndexOf('/')),
    steps: [{
      path: "/settings.php",
      element: "#sprimero",
      title: "DT Monster Leads",
      content: "Opciones de Linkedin"
    }, {
      path: "/settings.php",
      element: "#ssegundo",
      title: "DT Monster Leads",
      content: "Salud de la Cuenta"
    }
    , {
      path: "/settings.php",
      element: "#stercero",
      title: "DT Monster Leads",
      content: "Escoger conexiones"
    }
    , {
      path: "/settings.php",
      element: "#scuarto",
      title: "DT Monster Leads",
      content: "Borrar invitaciones pendientes"
    }
    , {
      path: "/settings.php",
      element: "#squinto",
      title: "DT Monster Leads",
      content: "Acciones Semanales"
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
