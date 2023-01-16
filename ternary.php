<?php
//exercice 11.1
if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    echo $hello = ($gender == 'homme') ? 'hello mister':'hello miss';
}
?>
<form action="" method="get">
   <label for="gender">Select your gender:</label></br>
        <label for="gender">M</label>
    <input type="radio" id="Homme" name="gender" value="homme">
        <label for="gender">F</label>
    <input type="radio" id="Femme" name="gender" value="femme">
    <input type="submit" name = "submit" value="click"> 
    
</form>