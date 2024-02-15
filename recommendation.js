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
    "Grün",
    "andere"
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
        Weiss: "variante1.1.weiss.html",
        Schwarz: "variante1.1.schwarz.html",
        Rot: "variante1.1.rot.html",
        Gruen: "variante1.1.gruen.html",
        andere: "variante1.1.andere.html"

      },
      "Motocross / Trial": {
        Blau: "varianten/variante1.2.blau.html",
        Weiss: "variante1.2.weiss.html",
        Schwarz: "variante1.2.schwarz.html",
        Rot: "variante1.2.rot.html",
        Gruen: "variante1.2.gruen.html"

      },
      "Supermoto": {
        Blau: "variante1.3.blau.html",
        Weiss: "variante1.3.weiss.html",
        Schwarz: "variante1.3.schwarz.html",
        Rot: "variante1.3.rot.html",
        Gruen: "variante1.3.gruen.html"

      },"Enduro": {
        Blau: "variante1.4.blau.html",
        Weiss: "variante1.4.weiss.html",
        Schwarz: "variante1.4.schwarz.html",
        Rot: "variante1.4.rot.html",
        Gruen: "variante1.4.gruen.html"

      },"Naked-Bike": {
        Blau: "variante1.5.blau.html",
        Weiss: "variante1.5.weiss.html",
        Schwarz: "variante1.5.schwarz.html",
        Rot: "variante1.5.rot.html",
        Gruen: "variante1.5.gruen.html"

      },"Touring": {
        Blau: "variante1.6.blau.html",
        Weiss: "variante1.6.weiss.html",
        Schwarz: "variante1.6.schwarz.html",
        Rot: "variante1.6.rot.html",
        Gruen: "variante1.6.gruen.html"

      },"Roller": {
        Blau: "variante1.7.blau.html",
        Weiss: "variante1.7.weiss.html",
        Schwarz: "variante1.7.schwarz.html",
        Rot: "variante1.7.rot.html",
        Gruen: "variante1.7.gruen.html"

      },
       "Chopper":{
        Blau: "variante1.8.blau.html",
        Weiss: "variante1.8.weiss.html",
        Schwarz: "variante1.8.schwarz.html",
        Rot: "variante1.8.rot.html",
        Gruen: "variante1.8.gruen.html"

      },
      "Custom Bike": {
        Blau: "variante1.9.blau.html",
        Weiss: "variante1.9.weiss.html",
        Schwarz: "variante1.9.schwarz.html",
        Rot: "variante1.9.rot.html",
        Gruen: "variante1.9.gruen.html"

      },
      "Gespanne": {
        Blau: "variante1.10.blau.html",
        Weiss: "variante1.10.weiss.html",
        Schwarz: "variante1.10.schwarz.html",
        Rot: "variante1.10.rot.html",
        Gruen: "variante1.10.gruen.html"
      },
    },
    "18+": {
        "Strasse": {
            Blau: "variante2.1.blau.html",
            Weiss: "variante2.1.weiss.html",
            Schwarz: "variante2.1.schwarz.html",
            Rot: "variante2.1.rot.html",
            Gruen: "variante2.1.gruen.html"

          },
          "Motocross / Trial": {
            Blau: "variante2.2.blau.html",
            Weiss: "variante2.2.weiss.html",
            Schwarz: "variante2.2.schwarz.html",
            Rot: "variante2.2.rot.html",
            Gruen: "variante2.2.gruen.html"

          },
          "Supermoto": {
            Blau: "variante2.3.blau.html",
            Weiss: "variante2.3.weiss.html",
            Schwarz: "variante2.3.schwarz.html",
            Rot: "variante2.3.rot.html",
            Gruen: "variante2.3.gruen.html"

          },"Enduro": {
            Blau: "variante2.4.blau.html",
            Weiss: "variante2.4.weiss.html",
            Schwarz: "variante2.4.schwarz.html",
            Rot: "variante2.4.rot.html",
            Gruen: "variante2.4.gruen.html"

          },"Naked-Bike": {
            Blau: "variante2.5.blau.html",
            Weiss: "variante2.5.weiss.html",
            Schwarz: "variante2.5.schwarz.html",
            Rot: "variante2.5.rot.html",
            Gruen: "variante2.5.gruen.html"

          },"Touring": {
            Blau: "variante2.6.blau.html",
            Weiss: "variante2.6.weiss.html",
            Schwarz: "variante2.6.schwarz.html",
            Rot: "variante2.6.rot.html",
            Gruen: "variante2.6.gruen.html"

          },"Roller": {
            Blau: "variante2.7.blau.html",
            Weiss: "variante2.7.weiss.html",
            Schwarz: "variante2.7.schwarz.html",
            Rot: "variante2.7.rot.html",
            Gruen: "variante2.7.gruen.html"
          },
           "Chopper":{
            Blau: "variante2.8.blau.html",
            Weiss: "variante2.8.weiss.html",
            Schwarz: "variante2.8.schwarz.html",
            Rot: "variante2.8.rot.html",
            Gruen: "variante2.8.gruen.html"
            
          },"Custom Bike": {
            Blau: "variante2.9.blau.html",
            Weiss: "variante2.9.weiss.html",
            Schwarz: "variante2.9.schwarz.html",
            Rot: "variante2.9.rot.html",
            Gruen: "variante2.9.gruen.html"

          },"Gespanne": {
            Blau: "variante2.10.blau.html",
            Weiss: "variante2.10.weiss.html",
            Schwarz: "variante2.10.schwarz.html",
            Rot: "variante2.10.rot.html",
            Gruen: "variante2.10.gruen.html",
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
