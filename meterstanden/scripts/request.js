// MAAK een nieuw request object aan
let xmlhttp = new XMLHttpRequest();

// STATUS bijhouden
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        // this.responseText is het teruggekomen JSON resultaat.
        let stand = JSON.parse(this.responseText);

        displayResultaat(stand);

    }
};

// OPEN en verstuur
xmlhttp.open("GET", "standen2json.php", true);
xmlhttp.send();

// MAAK het resultaat op basis van de teruggezonden gegevens
function displayResultaat(stand) {
    let tekst = '';

    for (let count = 0; count < stand.length; count++) {
            tekst = tekst +
                'Verbruik op ' +
                stand[count].datum +
                ' voor ' +
                stand[count].item +
                ' = ' +
                stand[count].stand +
                '<br>';

            document.getElementById("standen").innerHTML = tekst;
        }
}