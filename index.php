<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" id = "d_n">
        <button href = "#" id="sub" type="button">ENVIAR POKE</button>
    </form>
    <script>
        async function submit_poke(){
            const url = "controller/pokemonController.php"
            let post_data = new FormData();
            let dex_num = document.getElementById("d_n").value;
            post_data.append("dex",dex_num);
            let pokemon = "";
            let init = {
                method: "POST",
                body: post_data,
            };
            Response = await fetch(url, init)
            pokemon = await Response.json()
            console.log(pokemon["name"]);
        }
        document.getElementById("sub").onclick = submit_poke;
    </script>
</body>
</html>