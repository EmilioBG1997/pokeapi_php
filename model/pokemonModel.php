<?php
class Pokemon{
    public $API_ENDPOINT = "https://pokeapi.co/api/v2/pokemon/";
    public $pokemon = [];

    public function __construct($monster){ 
        /*THIS FUNCTION WILL RETURN THE DATA OF A POKEMON
        *GIVEN ITS POKEDEX NUMBER (POKEMON FROM ALL GENERATIONS ARE VALID)
        *OR ITS NAME
        */
        $ch = curl_init("$this->API_ENDPOINT".$monster);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_exec($ch); //GETTING THE DATA FROM THE API
        $status = curl_getinfo($ch,CURLINFO_HTTP_CODE); //VERYFING IF THE POKEMON IS IN THE API's DATABASE
        if($status == 200){ //IF THE POKEMON EXISTS, RETURNS AN ASSOCIATIVE ARRAY CONTAINING THE POKEMON'S DATA
            $POKE_ARRAY = json_decode(curl_multi_getcontent($ch)); //TURNS THE JSON RESPONSE FROM THE API INTO AN A.A.
            $dex_number = $POKE_ARRAY->id; //gets the national pokedex number of the pokemon in question 
            $name = $POKE_ARRAY->name; //gets the name of the pokemon in question
            $sprite = $POKE_ARRAY->sprites->front_default; //gets the sprite of the pokemon
            $type1 = $POKE_ARRAY->types[0]->type->name; //gets the primary type of the pokemon
            if(array_key_exists(1,$POKE_ARRAY->types)){
                $type2= $POKE_ARRAY->types[1]->type->name; //gets the secondary type (if any) of the pokemon
            }
            else{
                $type2 = "N/A"; //if there's no second type, makes it "N/A" in order to standarize the queries
            }
            $this->pokemon = Array(
                "dex_number"=> $dex_number,
                "name"=> $name,
                "sprite" =>$sprite,
                "type1" => $type1,
                "type2"=> $type2
            );
        }
       else{
           $this->pokemon = -1 ; //if the pokemon doesn't exist in the API's database, this will be set
           //as -1, indicating an inexistence.
       }

    }

    public function getDex(){
        if($this->pokemon == -1){
            return "N/A";
        }
        return $this->pokemon["dex_number"];
    }

    public function getName(){
        /*
        * RETURNS THE POKEMON NAME
        */
        if($this->pokemon == -1){
            return "N/A";
        }
        return $this->pokemon["name"];
    }
    public function getSprite(){
        /*
        * RETURNS THE POKEMON SPRITE
        */
        if($this->pokemon == -1){
            return "N/A";
        }
        return $this->pokemon["sprite"];
    }
    public function getType1(){
        /*
        * RETURNS THE POKEMON TYPE1 
        */
        if($this->pokemon == -1){
            return "N/A";
        }
        return $this->pokemon["type1"];
    }
    public function getType2(){
        /*
        * RETURNS THE POKEMON TYPE2 (N/A if none)
        */
        if($this->pokemon == -1){
            return "N/A";
        }
        return $this->pokemon["type2"];
    }

    public function getPokemon(){
        /*
        * RETURNS AN ASSOCIATIVE ARRAY CONTAINING THE DATA PULLED FROM THE API
        */
        if($this->pokemon == -1){
            return "N/A";
        }
        return $this->pokemon;
    }

}
//UNCOMMENT THE FOLLOWING LINES TO TEST THE MODEL


//$prueba = new Pokemon(150);
//print_r($prueba->getPokemon());
?>