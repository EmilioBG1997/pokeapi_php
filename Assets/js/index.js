const submit_poke = async () => {
    const url = "controller/pokemonController.php"
    let post_data = new FormData();
    let dex_num = document.getElementById("dexNumber").value;
    post_data.append("dex",dex_num);
    let init = {
        method: "POST",
        body: post_data,
    };
    
    domsprite = document.getElementById("pSprite");
    domdex =document.getElementById("pDex");
    domname = document.getElementById("pName");
    domtype1 = document.getElementById("pType1");
    domtype2 = document.getElementById("pType2");
    
    domsprite.textContent = ""
    domdex.textContent =  ""
    domname.textContent = "";
    domtype1.textContent = "";
    domtype2.textContent = "";

    let result = await fetch(url, init);
    let pokemon = await result.json();
    console.log(pokemon);
    if (pokemon == "N/A"){
        alert("We're Sorry. there's No such pokemon. Maybe in the next gen?");
    }
    else{
        let dex = document.createElement("p");
        let sprite = document.createElement("img");
        let name = document.createElement("p");
        let type1 = document.createElement("p");
        let type2 = document.createElement("p");

        dex.innerHTML = pokemon.dex_number;
        sprite.src= pokemon.sprite;
        name.innerHTML = pokemon.name;
        type1.innerHTML = pokemon.type1;
        type2.innerHTML = pokemon.type2;

        domsprite.appendChild(sprite);
        domdex.appendChild(dex);
        domname.appendChild(name);
        domtype1.appendChild(type1);
        domtype2.appendChild(type2);
    }
    
    
}
document.getElementById("pokemon_form").onsubmit = () => { 
    submit_poke();
    return false;
};