<?php
// declare(strict_types=1);

/*
 *--------------------------------------------------------------
 * Les fonctions
 *--------------------------------------------------------------
*/

// Les fonctions pouvant retourner une valeur
    // function calcul_du_poids(int $mass, $gravity = 9.81)
    // {
    //     $weight =  $mass * $gravity;
    //     return $weight;
    // }

    // echo calcul_du_poids("30") . "<br>";
    // echo calcul_du_poids(50) . "<br>";
    // echo calcul_du_poids(70) . "<br>";

    // $poids0 = 30 * 9.81;
    // echo $poids0 . "<br>";
    
    // $poids1 = 50 * 9.81;
    // echo $poids1 . "<br>";

    // $poids2 = 70 * 9.81;
    // echo $poids2 . "<br>";



    // var_dump(time());
    // $semaine_prochaine_en_secondes = time() + (7 * 24 * 60 * 60);

    // $data_prevue = date("l", $semaine_prochaine_en_secondes);

    // var_dump($data_prevue);




    // var_dump(time());

    // date("Y-m-d H:i:s");


    // $ville = "Paris";

    // if( empty($ville) )
    // {   
    //     echo "La ville est vide.";
    // }
    // else
    // {
    //     echo "La ville n'est pas vide.";
    // }

    // $first_name = "/Jean Claude/";
    // var_dump($first_name);
    
    // $first_name_clean = trim($first_name, "/");
    // var_dump($first_name_clean);


    // $phrase = "Hello World!";
    // $phrase_replace = str_replace("World", "Mardi", $phrase);
    // var_dump($phrase_replace);


    // $tab = ["Riri", "Fifi", "Loulou"];
    // $string = implode(" ", $tab);
    // var_dump($string);


    // $string = "1,2,3,4,5";
    // $tab = explode(",", $string);
    // var_dump($tab);
/*
 *--------------------------------------------------------------
 * Les boucles
 *--------------------------------------------------------------
*/



    // // Pour chaque 
    // $users = ["jb", "jc", "jm", "jp"];

    // foreach($users as $key => $user)
    // {
    //     if( $user == "jm" )
    //     {
    //         $key = "hello";
    //     }
    //     echo "A la clé numéro : $key, nous avons l'utilisateur : $user <br>";
    // }

    // foreach($users as $user)
    // {
    //     echo $user . "<br>";
    // }


    // $users = ["jb", "jc", "jm", "jp"];

    // $length = count($users);

    // for( $i=0; $i<$length; $i++ )
    // {
    //     echo $users[$i] . "<br>";
    // }

    // var_dump($users);


    // Faire tant que
    // $x = 5;
    // do
    // {
    //     echo "hello <br>";
    //     $x++;
    // }
    // while($x < 6);



    // Tant que
    // $x = 2;
    // while($x < 5)
    // {
    //     echo "hello <br>";
    //     $x += 2;
    // }





/*
 *--------------------------------------------------------------
 * Les structures de contrôle (Les conditions)
 *--------------------------------------------------------------
*/
    // $email = "jc1@gmail.com";

    // $message = ($email == "jc@gmail.com") ? "Hello admin" : "Hello user";

    // echo $message;


// ---------------------------------------------------

    // $pseudo = "jean77";

    // $pseudos = [
    //     0 => "jean77",
    //     1 => "jeane77",
    //     2 => "jeane78",
    // ];


    // $code_postal = "77000";
    // if( $code_postal === 77000)
    // {
    //     echo $code_postal;
    // }


    // $ville = "Paris";

    // if( $ville == "Paris" )
    // {
    //     echo "Nous sommes à Paris";
    // }
    // else if( $ville == "paris" )
    // {
    //     echo "Nous sommes à paris";
    // }
    // else
    // {
    //     echo "Nous sommes à Nice";
    // }


    // $nom;
    // if($nom) 
    // {
    //     echo "Zidane existe";
    // }
    // else
    // {
    //     echo "Zidane n'existe pas";
    // }













/*
 *--------------------------------------------------------------
 * Les différentes opérations possibles
 *--------------------------------------------------------------
*/

// Concaténation

    // echo 1 + "1" . "<br>"; // 2
    // echo 1 + "1.5" . "<br>"; // 2.5
    // echo 1 + "1abc" . "<br>"; // 2 warning
    // echo 1 + "1.5abcd" . "<br>"; // 2.5 warning
    // echo 1 + "1.5 abcd" . "<br>"; // 2.5 warning
    // echo 1 + ".5" . "<br>"; // 1.5
    // echo 1 + "5" . "<br>"; // 6
    // echo 1 + "\t\n5"; // 6
    // echo 1 + "abc1"; // 2 warning

    // $first_name = "Cristiano";
    // $last_name = "Ronaldo";

    // $full_name = $first_name . " " . $last_name;

    // $welcome = "Bonhour $full_name! Nous vous souhaitons la bienvenue!";
    // echo $welcome;

    // $text0 = "Hello";
    // $text1 = "World";

    // $phrase = $text0 . " " . $text1;
    // echo $phrase;

    // echo $text0 . " " . $text1;
    // echo '$text0 $text1';
    // echo "$text0 $text1";





    // $nombre = 3;

    // $nombre = $nombre + 1; // 4
    // $nombre = $nombre - 1; // 3
    
    // $nombre++; // 4
    // $nombre--; // 3

    // $nombre += 2; // 5
    // $nombre -= 2; // 3

    // $nombre += 1;

    // echo $nombre;







/*
 *--------------------------------------------------------------
 * Les variables de type composé.
 * 
 * Les tableaux et les objects
 * 
 * Dans un premier temps, parlons des tableaux
 *--------------------------------------------------------------
*/


    // $pays_europe  = ["France", "Italie", "Suisse"];
    // $pays_afrique = ["Togo", "Algérie", "Maroc"];

    // $continents = [];

    // $continents['europe']  = $pays_europe;
    // $continents['afrique'] = $pays_afrique;

    // $continents['europe'][] = "Norvège";

    
    // echo $continents['europe'][3];

// -----------------------------------------------------------------------------------------


    // $tableau = ["Riri", "Fifi", "Loulou"];

    // echo $tableau[2] . "<br>";
    // $tableau[2] = "Picsou";
    // echo $tableau[2] . "<br>";

    // $tableau[] = "Donald";

    // echo $tableau;

    // var_dump($tableau);



// ------------------------------------------------------------------------------------
    // $tab = [
    //     "nom"    => "AZIAHA",
    //     "prenom" => "jc",
    // ];

    // echo "Hello, c'est " . $tab["nom"] . " " . $tab["prenom"];

    // $users = [
    //     0 => [
    //         "id" => 1,
    //         "first_name" => "John",
    //         "last_name" => "Doe",
    //     ],
    //     1 => [
    //         "id" => 2,
    //         "first_name" => "Jane",
    //         "last_name" => "Doe",
    //     ],
    // ];

    // var_dump($users);



    // // $tab = array();
    // $jour = "Lundi";
    // $tab = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    // // $tab = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

    // $tab = [
    //     0 => "Lundi", 
    //     1 => "Mardi", 
    //     2 => "Mercredi", 
    //     3 => "Jeudi", 
    //     4 => "Vendredi", 
    //     5 => "Samedi", 
    //     6 => "Dimanche"
    // ];

    // echo $tab;
    // echo $tab[5] . "<br/>";
    // echo $tab[3] . "<br/>";
    // echo $tab[5] . "<br/>";
    // echo $tab[6] . "<br/>";

    // echo $tab;
    // var_dump($tab);



    // $nombres = [1, 2, 3, 4];

    // $data = [1, "hello", true, "lundi"];
    // $data = [
    //     0 => 1, 
    //     1 => "hello", 
    //     2 => true, 
    //     3 => "lundi"
    // ];








/*
 *--------------------------------------------------------------
 * Les variables de type scalaire.
 *--------------------------------------------------------------
*/

    // // Les entiers
    // $chiffre_entier = 3; // positif
    // $nombre_entier = -1000; // négatif
    

    // // Les nombres flottants
    // $moyenne = 15.5; // positif
    // $nombre_decimal = -15.5; // négatif


    // // Les chaines de caractères
    // $phrase0 = "Hello World!"; // Avec les doubles griffes
    // $phrase1 = 'Hello World!'; // Avec de simples griffes

    // $phrase2 = "Hello! C'est vincent";
    // $phrase3 = 'Hello! C\'est vincent';

    // echo $chiffre_entier . "<br>";
    // echo $nombre_entier  . "<br>";
    // echo $phrase3  . "<br>";
    // // var_dump($chiffre_entier);

    // $bouteille = "eau";
    // // echo $bouteille . "<br>";

    // $bouteille = "jus";
    // echo $bouteille . "<br>";


    // // Les boolean
    // $test_covid  = true;
    // $test_grippe = false;

    // echo $test_covid;
    // echo $test_grippe;



?>

