/**
 * Author: Piera Blum
 * Date: 21.02.2024
 * Description: These functions update the lists for motorcycle types and colors
 * it redirects the user to the appropriate page based on age, motorcycle type and color.
 */
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
    "Roller"
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

  // Remove existing color options
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
  ];

  // Add the color options
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

  // Map for the redirect URLs based on age and motorcycle type
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
    },
  };

  // Default URL if no match is found
  var redirectURL = "match.html";

  // Check whether the age, motorcycle type and color are present on the map
  if (
    redirectMap.hasOwnProperty(alter) &&
    redirectMap[alter].hasOwnProperty(motorradTyp) &&
    redirectMap[alter][motorradTyp].hasOwnProperty(color)
  ) {
    redirectURL = redirectMap[alter][motorradTyp][color];
  }

  // Redirection to the determined URL
  window.location.href = redirectURL;
  return false;
}
