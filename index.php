<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
    <link rel="stylesheet" href="Assets/css/index.css">
    <title>PokeAPI PHP</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper red darken-2">
            <a href="#" class="brand-logo">PokeAPI PHP</a>
        </nav>
    </header>
    <main>
        <div class = "row">
            <div class = "pokemon-input col s12 m4 center-align offset-m3" id="input">
                <form id = "pokemon_form">
                    <div class = "card">
                        <div class = "card-content red white-text">
                            <h4 class = "center-align">National Pokedex</h4>
                            <input type="text" class = "center-align white-text"id = "dexNumber">
                        </div>
                        <div class = "card-action">
                            <button class = "waves-effect waves-light btn red darken-2" id="sub">Search!</button>
                        </div>
                    
                    </div>
                </form>
            </div>

            <div class = "pokemon-output col s12 m3 center-align" id="output">
                <div class = "card">
                     <div class = "card-image red" id = "pSprite">
                        <span class = "card-title" id = "pDex"></span>
                    </div>
                    <div class = "card-content">
                        <span class = "pokemon-type" id = "pType1">
                        </span>
                        <span class = "pokemon-type" id = "pType2">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class ="page-footer red darken-2">
        <div class = "container">
            <div class = "row">
                <div class = "col s12 m6">
                    <div class= "section">
                        <h3>Atuhors</h3>
                        <div class = "divider"></div>
                        <ul>
                            <li>Emilio Barrera González</li>
                        </ul>
                    </div> 
                </div>
                <div class = "col s12 m6">
                    <div class= "section">
                        <h3>Technologies</h3>
                        <div class = "divider"></div>
                        <ul>
                            <li>PHP</li>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
        <div class = "row red darken-3 center-align powered">
            <span>Powered by <a href= "https://materializecss.com/">Materialize</a> and <a href="https://pokeapi.co/">PokeAPI</a></span>
        </div>
    </footer>
    <script src = "Assets/js/materialize.min.js"></script>
    <script src= "Assets/js/index.js"></script>
</body>
</html>