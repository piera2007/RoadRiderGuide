function updateMotorradTypen() {
  var motorradTypSelect = document.getElementById("motorrad-typ");

  while (motorradTypSelect.options.length > 0) {
    motorradTypSelect.options.remove(0);
  }

  var motorradTypen = [
    "Strasse",
    "Motocross / Trial",
    "Supermoto",
    "Enduro",
    "Naked-Bike",
    "Touring",
    "Roller",
    "Chopper",
    "Custom Bike",
    "Gespanne",
  ];

  for (var i = 0; i < motorradTypen.length; i++) {
    var option = document.createElement("option");
    option.value = motorradTypen[i];
    option.text = motorradTypen[i];
    motorradTypSelect.add(option);
  }
}
function updateColor() {
  var colorSelect = document.getElementById("color");

  // Entferne vorhandene Farboptionen
  while (colorSelect.options.length > 0) {
    colorSelect.options.remove(0);
  }
  var color = [
    "Schwarz",
    "Blau",
    "Weiss",
    "Rot",
    "Gruen",
    "Andere"
    // Weitere Farboptionen hier hinzufügen, falls erforderlich
  ];
  // Füge die Farboptionen hinzu
  for (var i = 0; i < color.length; i++) {
    var option = document.createElement("option");
    option.value = color[i];
    option.text = color[i];
    colorSelect.add(option);
  }
}

function redirectToAdventurePage() {
  var alter = document.getElementById("alter").value;
  var motorradTyp = document.getElementById("motorrad-typ").value;
  var color = document.getElementById("color").value;

  // Map für die Weiterleitungs-URLs basierend auf Alter und Motorradtyp
  var redirectMap = {
    "15-17": {
      "Strasse": {
        Blau: "varianten/variante1.1.blau.html",
        Weiss: "varianten/variante1.1.weiss.html",
        Schwarz: "varianten/variante1.1.schwarz.html",
        Rot: "varianten/variante1.1.rot.html",
        Gruen: "varianten/variante1.1.gruen.html",
        Andere: "varianten/variante1.1.andere.html"

      },
      "Motocross / Trial": {
        Blau: "varianten/variante1.2.blau.html",
        Weiss: "varianten/variante1.2.weiss.html",
        Schwarz: "varianten/variante1.2.schwarz.html",
        Rot: "varianten/variante1.2.rot.html",
        Gruen: "varianten/variante1.2.gruen.html",
        Andere: "varianten/variante1.2.andere.html"

      },
      "Supermoto": {
        Blau: "varianten/variante1.3.blau.html",
        Weiss: "varianten/variante1.3.weiss.html",
        Schwarz: "varianten/variante1.3.schwarz.html",
        Rot: "varianten/variante1.3.rot.html",
        Gruen: "varianten/variante1.3.gruen.html",
        Andere: "varianten/variante1.3.andere.html"

      },"Enduro": {
        Blau: "varianten/variante1.4.blau.html",
        Weiss: "varianten/variante1.4.weiss.html",
        Schwarz: "varianten/variante1.4.schwarz.html",
        Rot: "varianten/variante1.4.rot.html",
        Gruen: "varianten/variante1.4.gruen.html",
        Andere: "varianten/variante1.4.andere.html"

      },"Naked-Bike": {
        Blau: "varianten/variante1.5.blau.html",
        Weiss: "varianten/variante1.5.weiss.html",
        Schwarz: "varianten/variante1.5.schwarz.html",
        Rot: "varianten/variante1.5.rot.html",
        Gruen: "varianten/variante1.5.gruen.html",
        Andere: "varianten/variante1.5.andere.html"

      },"Touring": {
        Blau: "varianten/variante1.6.blau.html",
        Weiss: "varianten/variante1.6.weiss.html",
        Schwarz: "varianten/variante1.6.schwarz.html",
        Rot: "varianten/variante1.6.rot.html",
        Gruen: "varianten/variante1.6.gruen.html",
        Andere: "varianten/variante1.6.andere.html"

      },"Roller": {
        Blau: "varianten/variante1.7.blau.html",
        Weiss: "varianten/variante1.7.weiss.html",
        Schwarz: "varianten/variante1.7.schwarz.html",
        Rot: "varianten/variante1.7.rot.html",
        Gruen: "varianten/1.7.gruen.html",
        Andere: "varianten/variante1.7.andere.html"

      },
       "Chopper":{
        Blau: "varianten/variante1.8.blau.html",
        Weiss: "varianten/variante1.8.weiss.html",
        Schwarz: "varianten/variante1.8.schwarz.html",
        Rot: "varianten/variante1.8.rot.html",
        Gruen: "varianten/variante1.8.gruen.html",
        Andere: "varianten/variante1.8.andere.html"

      },
      "Custom Bike": {
        Blau: "varianten/variante1.9.blau.html",
        Weiss: "varianten/variante1.9.weiss.html",
        Schwarz: "varianten/variante1.9.schwarz.html",
        Rot: "varianten/variante1.9.rot.html",
        Gruen: "varianten/variante1.9.gruen.html",
        Andere: "varianten/variante1.9.andere.html"

      },
      "Gespanne": {
        Blau: "varianten/variante1.10.blau.html",
        Weiss: "varianten/variante1.10.weiss.html",
        Schwarz: "varianten/variante1.10.schwarz.html",
        Rot: "varianten/variante1.10.rot.html",
        Gruen: "varianten/variante1.10.gruen.html",
        Andere: "varianten/variante1.10.andere.html"
      },
    },
    "18+": {
        "Strasse": {
            Blau: "varianten/variante2.1.blau.html",
            Weiss: "varianten/variante2.1.weiss.html",
            Schwarz: "varianten/variante2.1.schwarz.html",
            Rot: "varianten/variante2.1.rot.html",
            Gruen: "varianten/variante2.1.gruen.html",
            Andere: "varianten/variante2.1.andere.html"

          },
          "Motocross / Trial": {
            Blau: "varianten/variante2.2.blau.html",
            Weiss: "varianten/variante2.2.weiss.html",
            Schwarz: "varianten/variante2.2.schwarz.html",
            Rot: "varianten/variante2.2.rot.html",
            Gruen: "varianten/variante2.2.gruen.html",
            Andere: "varianten/variante2.2.andere.html"

          },
          "Supermoto": {
            Blau: "varianten/variante2.3.blau.html",
            Weiss: "varianten/variante2.3.weiss.html",
            Schwarz: "varianten/variante2.3.schwarz.html",
            Rot: "varianten/variante2.3.rot.html",
            Gruen: "varianten/variante2.3.gruen.html",
            Andere: "varianten/variante2.3.andere.html"

          },"Enduro": {
            Blau: "varianten/variante2.4.blau.html",
            Weiss: "varianten/variante2.4.weiss.html",
            Schwarz: "varianten/variante2.4.schwarz.html",
            Rot: "varianten/variante2.4.rot.html",
            Gruen: "varianten/variante2.4.gruen.html",
            Andere: "varianten/variante2.4.andere.html"

          },"Naked-Bike": {
            Blau: "varianten/variante2.5.blau.html",
            Weiss: "varianten/variante2.5.weiss.html",
            Schwarz: "varianten/variante2.5.schwarz.html",
            Rot: "varianten/variante2.5.rot.html",
            Gruen: "varianten/variante2.5.gruen.html",
            Andere: "varianten/variante2.5.andere.html"

          },"Touring": {
            Blau: "varianten/variante2.6.blau.html",
            Weiss: "varianten/variante2.6.weiss.html",
            Schwarz: "varianten/variante2.6.schwarz.html",
            Rot: "varianten/variante2.6.rot.html",
            Gruen: "varianten/variante2.6.gruen.html",
            Andere: "varianten/variante2.6.andere.html"

          },"Roller": {
            Blau: "varianten/variante2.7.blau.html",
            Weiss: "varianten/variante2.7.weiss.html",
            Schwarz: "varianten/variante2.7.schwarz.html",
            Rot: "varianten/variante2.7.rot.html",
            Gruen: "varianten/variante2.7.gruen.html",
            Andere: "varianten/variante2.7.andere.html"
          },
           "Chopper":{
            Blau: "varianten/variante2.8.blau.html",
            Weiss: "varianten/variante2.8.weiss.html",
            Schwarz: "varianten/variante2.8.schwarz.html",
            Rot: "varianten/variante2.8.rot.html",
            Gruen: "varianten/variante2.8.gruen.html",
            Andere: "varianten/variante2.8.andere.html"
            
          },"Custom Bike": {
            Blau: "varianten/variante2.9.blau.html",
            Weiss: "varianten/variante2.9.weiss.html",
            Schwarz: "varianten/variante2.9.schwarz.html",
            Rot: "varianten/variante2.9.rot.html",
            Gruen: "varianten/variante2.9.gruen.html",
            Andere: "varianten/variante2.9andere.html"

          },"Gespanne": {
            Blau: "varianten/variante2.10.blau.html",
            Weiss: "varianten/variante2.10.weiss.html",
            Schwarz: "varianten/variante2.10.schwarz.html",
            Rot: "varianten/variante2.10.rot.html",
            Gruen: "varianten/variante2.10.gruen.html",
            Andere: "varianten/variante2.10.andere.html"
          },
    },
  };

  // Standard-URL, falls keine Übereinstimmung gefunden wird
  var redirectURL = "match.html";

  // Überprüfen, ob das Alter, der Motorradtyp und die Farbe in der Map vorhanden sind
  if (
    redirectMap.hasOwnProperty(alter) &&
    redirectMap[alter].hasOwnProperty(motorradTyp) &&
    redirectMap[alter][motorradTyp].hasOwnProperty(color)
  ) {
    redirectURL = redirectMap[alter][motorradTyp][color];
  }

  // Weiterleitung zur ermittelten URL
  window.location.href = redirectURL;
  return false;
}
