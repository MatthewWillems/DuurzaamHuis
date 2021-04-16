<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thor</title>
    <link rel="stylesheet" href="CSS.css">
    <script src="ChartVoorBO/js/grafiek.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <style>
        body {
            margin: 0;
        }
    #dashboard {
        display: grid;
        height: 100vh;
        grid-template-columns: 25% 25% 25% 25%;
        grid-template-rows: 10% 25% 1fr;
        grid-gap: 10px;
    }

    .header {
        grid-column-start: 1;
        grid-column-end: 5;
    }
    
    .grafiek {
        grid-row: 3;
        grid-column-start: 1;
        grid-column-end: 3;
    }

    .besturing {
        grid-row: 3;
        grid-column-start: 3;
        grid-column-end: 5;
    }

    .totaal {
        grid-row: 2;
        grid-column-start: 1;
        grid-column-end: 2;
    }

    .apparaten {
        grid-row: 2;
        grid-column-start: 2;
        grid-column-end: 3;
    }

    .verlichting {
        grid-row: 2;
        grid-column-start: 3;
        grid-column-end: 4;
    }

    .bespaard {
        grid-row: 2;
        grid-column-start: 4;
        grid-column-end: 5;
    }

    </style>
</head>
<body>
    


<div id="dashboard">
    <div class="item header"><img src="Images/THOR.png" alt=""></div>
    
    <div class="item grafiek">
        <div id="grafiek">Per maand 1<br><object data="/DuurzaamHuis/ChartVoorBO/index.html" width="420" height="320" style="border: none;">
            <embed src="ChartVoorBo/index.html" width="420" height="320"> </embed>
            </object></div>
    </div>

    <div class="item besturing">Besturing</div>


   
    <div class="item totaal">Totaal Verbruik Deze Maand<br><br> <div id="container">
        <div id="total"></div>
    </div>
    <script src="script.js"></script></div>
    
    
    <div class="item apparaten">Verbruik Apparaten<br><br> <div id="container">
        <div id="app"></div>
    </div>
    <script src="script.js"></script></div>


    <div class="item verlichting">Verbruik Verlichting<br><?php include 'ChartVoorBO/standen2.php'?><div id="container">
        <div id="licht"></div>
    </div>
    <script src="script.js"></script></div>

    
    <div class="item bespaard">Bespaard Deze Maand<br><br> <div id="container">
        <div id="besp"></div>
    </div>
    <script src="script.js"></script></div>

    
</div>



</body>
</html>

