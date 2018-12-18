<?php
include ('connexion.php'); 
$appliDB = new Connexion();



if ($appliDB->getConnexion() != NULL) {
    echo 'Connexion BD réussie </BR>';    
} else {
    echo 'Connexion BD échouée';
}
// insertHobby ("Lecture");
// insertHobby ("Cinema");
// insertHobby ("Autres...");
// insertMusique ("Rock");
// insertMusique ("Jazz");
// insertMusique ("Chill-Out");
// insertMusique ("Classique");
// insertMusique ("Autres...");
// insertPersonne ("Erdoğan", "Recep Tayyip", "url", "1954-02-26", "En couple");
// insertPersonne ("Xi", "Jinping", "url", "1953-06-15", "En couple");
// insertPersonne ("Hollande", "François", "url", "1954-08-12", "Celibataire");
// insertPersonne ("Poutine", "Vladimir", "url", "1952-10-07", "En couple");

// if(insertMusique ("Jazz")) {
//     echo 'Saisie réussie';    
// } else {
//     echo 'Echec de Saisie';
// }
// $resultat = selectAllMusique();
//     echo "Musique"."<br>";
//         foreach ($resultat as $value){
//         echo "<li>".$value->Type."</li>";
    
// }

/// Recherche du Hobby par ID de la Personne !!!!

// $toutHobby = $appliDB->selectAllHobbies(1);
//     echo "Hobby"."<br>";
//         foreach ($toutHobby as $value){
//         echo '<input type="checkbox">'.$value->Type.'</input></br>';
    
// }

//// Affichage de Hobby par ID Personne

// $hobbyParId = $appliDB->getPersonneHobby(1);
//     // echo $hobbyParId[6]->Type;
//     echo "Hobby <br>";
//          foreach ($hobbyParId as $hobbyBase){
//         echo $hobbyBase->Type.'</br>';
    
// }   

// $touteMusique = $appliDB->selectAllMusique();
//     echo "Musique"."<br>";
//         foreach ($touteMusique as $value){
//         echo '<input type="checkbox">'.$value->Type.'</input></br>';
    
// }

// $resultat = selectPersonneById(3);
// displayPersonne ($resultat);

// $personnes = $appliDB->selectPersonneByNomPrenomLike("Trump");
// var_dump ($personnes);
// $myHobbies = $appliDB->getPersonneHobby(1);
// var_dump ($myHobbies);

// $musicParId = $appliDB->getPersonneMusique(1);
//     // echo $musicParId[1]->Type;
//     echo "Musique <br>";
//          foreach ($musicParId as $musiques){
//         echo $musiques->Type.'</br>';
// }

// $relations = $appliDB->getRelationPersonne(1);
// // echo $musicParId[1]->Type;
// echo "Relations <br>";
// foreach ($relations as $relation){
//     echo $relation->Nom . $relation->Prenom . '</br>';
// } 
/* 
$relations = $appliDB->selectAllMusiqueById(1);
echo "<pre>";
print_r($relations);
echo "</pre>";
 */

/* $relations = $appliDB->selectAllHobbiesById(1);
echo "<pre>";
print_r($relations);
echo "</pre>";
 */
$relations = $appliDB->selectAllRelationById(1);
echo "<pre>";
print_r($relations);
echo "</pre>";

echo "hello world"

?>