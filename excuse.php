<?php

//exercice 12
// La condition vérifie que tous les champs du formulaires sont remplis
if (isset($_GET['name_child'], $_GET['name_teacher'], $_GET['gender'], $_GET['reason'])) {
    //les variable
    $name_child = ($_GET['name_child']);
    $gender = ($_GET['gender']);
    $name_teacher = ($_GET['name_teacher']);
    $reason = ($_GET['reason']);
    $date = date('d/m/y');
    
    //La condition vérifie la valeur de l'input radio ("boy" ou "girl") et change le genre à appliquer à la lettre en fonction de ce choix
    if ($gender == "boy") {
        $gender_letter = "il";
    } else {
        $gender_letter = "elle";
    }

    $excuse = "Cher Professeur ".$name_teacher.", <br><br>Mon enfant, ".$name_child.", sera absent ".$date." pour cause " .$reason. ". ".$gender_letter."  reviendra dès qu'".$gender_letter." ira mieux.<br><br>Je vous remercie d'avance pour votre compréhension,<br><br>Bien à vous,<br>Son père";

    echo $excuse;
   
}
?>
<!--Le formulaire pour entrer les informations-->
<form action="" method="get">
    <label for="name_child">enter child's name</label>
    <input type="text" name="name_child" id="child" required></br></br>
    
    <label for="gender">select the gender:</label>
    <label for="boy">boy</label>
    <input type="radio" name="gender" id="boy" value="boy" required>
    <label for="girl">girl</label>
    <input type="radio" name="gender" id="girl" value="girl" required></br></br>

    <label for="name_teacher">enter the name of the teacher</label>
    <input type="text" name="name_teacher" id="teacher" required></br></br>
    
    <label for="reason">reason for absence</label></br></br>
    
    <input type="radio" name="reason" id="illness" value="illness" required>
    <label for="reason">illness</label></br>
    
    <input type="radio" name="reason" id="death of the pet (or a family member)" value="death of the pet" required>
    <label for="exuse">death of the pet (or a family member)</label></br>
    
    <input type="radio" name="reason" id="significant extra-curricular activity" value="significant extra-curricular activity" required>
    <label for="reason">significant extra-curricular activity</label></br>
    
    <input type="radio" name="reason" id="any other excuse of your choice" value="any other excuse of your choice" required>
    <label for="reason">any other excuse of your choice</label></br></br>
    
    <input type="submit" name="submit" value="send">
</form>
