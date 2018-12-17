<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link rel="stylesheet" href="inscription.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Annuaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

</head>

<body>
    <button id="myButton">Retour</button>
    <h1>INSCRIPTION</h1>
    <div class="inscription">
        <form method="get" id="inscription" action="">
            <label class="text">Nom de Famille :</label><br>
            <input type="text" name="Fname" id="NomDeFamille" class="meme" placeholder="Inserez ici votre nom"><br>
            
            <label>Prénom</label><br>
            <input type="text" name="Pnom" id="prenom" class="meme" placeholder="Inserez ici votre prénom"><br>
            
            <label for="">Insertion photo</label><br>
            <input type="url" id="url" class="meme" placeholder="URL de Photo"><br>
            
            <label>Date de Naissance :</label><br>
            <input type="date" id="date" class="meme" min="2000-01-01" max="2500-01-01"><br><br>
            
            <label>Status :</label><br>                
                <input type="radio" name="Status" id="celib">
                <label for="celib">Célibataire </label>              
                <input type="radio" name="Status" id="couple">
                <label for="couple">En couple </label>               
                <input type="radio" name="Status" id="pasDef">
                <label for="pasDef">Pas Défini </label><br><br>
            
            <label>Préférences Musicales :</label><br>                
                <input type="checkbox" name="Préférences Musicales" id="Rock">
                <label for="Rock">Rock </label>                
                <input type="checkbox" name="Préférences Musicales" id="Pop">
                <label for="Pop">Pop </label>                
                <input type="checkbox" name="Préférences Musicales" id="Rap">
                <label for="Rap">Rap </label>               
                <input type="checkbox" name="Préférences Musicales" id="Classique">
                <label for="Classique">Classique </label>
                <input type="checkbox" name="Préférences Musicales" id="Autres...">
                <label for="Autres...">Autres...</label><br><br>

            <label>Hobbies :</label><br>               
                <input type="checkbox" name="hobby" id="velo">
                <label for="velo"> Vélo </label>
                <input type="checkbox" name="hobby" id="Tennis">
                <label for="Tennis"> Tennis </label>
                <input type="checkbox" name="hobby" id="Lecture">
                <label for="Lecture"> Lecture </label>
                <input type="checkbox" name="hobby" id="cinema">
                <label for="cinema"> Cinéma </label>
                <input type="checkbox" name="hobby" id="Camping">
                <label for="Camping"> Camping </label>
                <input type="checkbox" name="hobby" id="Autres">
                <label for="Autres"> Autres...</label> <br><br>
            
            <label>Je connais...</label><br>
            <select id="select">
                <option value="famille" >Famille</option>
                <option value="ami" >Ami</option>
                <option value="collegue" >Collègue</option>
            </select><br>
            <input type="submit" value="Je ne connais personne !" class="meme">
            <input type="submit" value="J'ai terminé!" class="meme"><br><br>
        </form>
    </div>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "Recherche.php";
        };
    </script>
</body>

</html>