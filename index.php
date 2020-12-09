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
        <button href = "#" id="sub" onclick="submit_poke()" type="button">ENVIAR POKE</button>
    </form>
    <script>
        const submit_poke = async () => {
            const url = "controller/pokemonController.php"
            let post_data = new FormData();
            let dex_num = document.getElementById("d_n").value;
            post_data.append("dex",dex_num);
            let init = {
                method: "POST",
                body: post_data,
            };
            const result = await fetch(url, init);
            let pokemon = await result.json();
            console.log(pokemon["name"]);
        }
    </script>
</body>
</html>
