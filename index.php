<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
    <link rel="stylesheet" href="Assets/css/index.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class = "row">
            <div class = "pokemon-input col s12 m6 center-align" id="input">
                <form id = "pokemon_form">
                    <input type="text" id = "dexNumber">
                    <button class = "waves-effect waves-light btn" id="sub">Search!</button>
                </form>
            </div>

            <div class = "pokemon-output col s12 m6 center-align" id="output">
                <span class = "pokemon-sprite" id= "pSprite">
                </span>
                <span class = "pokemon-dex" id = "pDex">
                </span>
                <span class = "pokemon-name" id = "pName">
                </span>
                <span class = "pokemon-type" id = "pType1">
                </span>
                <span class = "pokemon-type" id = "pType2">
                </span>
            </div>
        </div>
    </main>
    <script src = "Assets/js/materialize.min.js"></script>
    <script src= "Assets/js/index.js"></script>

</body>
</html>