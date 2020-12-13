const submit_poke = async () => {
    const url = "controller/pokemonController.php"
    let post_data = new FormData();
    let dex_num = document.getElementById("dexNumber").value;
    post_data.append("dex",dex_num);
    let init = {
        method: "POST",
        body: post_data,
    };
    
    let domsprite = document.getElementById("pSprite");
    let domtype1 = document.getElementById("pType1");
    let domtype2 = document.getElementById("pType2");
    
    domsprite.textContent = "";
    domtype1.textContent = "";
    domtype2.textContent = "";

    let result = await fetch(url, init);
    let pokemon = await result.json();
    console.log(pokemon);
    if (pokemon == "N/A"){
        alert("We're Sorry. there's No such pokemon. Maybe in the next gen?");
    }
    else{
        let sprite = document.createElement("img");
        sprite.className = "responsive-img";
        let type1 = document.createElement("p");
        let type2 = document.createElement("p");
        let dexName = document.createElement("span");
        dexName.className= "card-title poke-title";
        dexName.innerText= pokemon.dex_number + " - " + pokemon.name;

        sprite.src= pokemon.sprite;
        type1.innerHTML = "Primary Type: " + pokemon.type1;
        type2.innerHTML = "Secondary Type: " + pokemon.type2;

        domsprite.appendChild(sprite);
        domsprite.appendChild(dexName)
        domtype1.appendChild(type1);
        domtype2.appendChild(type2);
    }
    
    
}
document.getElementById("pokemon_form").onsubmit = () => { 
    submit_poke();
    return false;
};


