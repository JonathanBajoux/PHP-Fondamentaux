<?php
// exercice 1.1
/*$room_is_filthy = 26; //crée une variable 
if( $room_is_filthy >= 25 ){//créé la condition 
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy <= 21;
} else {
	echo "<br>Nothing to do, room is neat.";
}*/
?>

<?php 
//exercice 1.2
/*$possible_states = [
    0=> 'filthy',
    1=> 'dirty',
    2=> 'clean',
    3=> 'immaculate'];
$room_filthiness = $possible_states[0]; 

if( $room_filthiness == 'immaculate' ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == 'filthy' ){
	echo "Yuk, Room is dirty : let's clean it up !";

} else {
	echo "<br>Nothing to do, room is neat.";
}*/
?>


<?php
//exercice 2
/*date_default_timezone_set('Europe/Brussels');
$now = date('H:i') ; 

if( $now > 5 &&  $now < 9){
    echo "Good morning!";
}else if ($now > 9 && $now < 12){
    echo "Good day!";
}else if ($now > 12 && $now < 16){
    echo'Good afternoon!';
}else if ($now > 16 && $now < 21){
    echo'Good evening!';
}else if ($now > 21 && $now < 5){
    echo'Good night!';
}*/
?>

<?php
//exercice 3, 4, 5

//mon exemple
/*if($age > 0 && $age < 12 && $language === 'english') {//condition superieur ou inférieur
        ($gender === 'man')? 'Hello boy !':'Hello Mister kiddo!':'Hello kiddo!';//tu affiche le message
    } else if($age >= 12 && $age <= 18 && $language === 'english'){
        echo ($gender === 'man')?'Hello boy !':'Hello Mister!':'Hello Teenager !';
    } else if($age >= 18 && $age <= 115 && $language === 'english'){
        echo ($gender === 'man')?'Hello boy !':'Hello Mister!':'Hello Adult !';
    } else if($age > 115){
        echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
    }*/

    //la bonne condition
/*if (isset($_GET['age']) && ctype_digit($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $language = $_GET['language'];

if ($age < 12){
    if ($gender == "man"){
        if ($language == "english"){
                echo "Hello boy !";
        } else {
                echo "Aloha boy!";
        }
    } else {
            if ($language == "english"){
                echo "Hello girl !";
            } else {
                echo "Aloha girl";
        }
    }
} elseif ($age > 12 && $age < 18){
    if ($gender == "man"){
        if ($language == "english"){
            echo "Hello boy !";
        }else {
            echo "Aloha boy!";
        }
    }else{
        if ($language == "english"){
            echo "Hello girl !";
        }else{
            echo "Aloha girl";
        }
    }
} elseif ($age > 18 && $age < 115){
    if ($gender == "man"){
        if ($language == "english"){
        echo "Hello boy !";
    } else {
        echo "Aloha boy!";
    }
    }else{
        if ($language == "english"){
            echo "Hello girl !";
        }else{
            echo "Aloha girl";
        }
    }
} elseif ($age > 115){
    echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
}
}*/
?>
<!--<form method="get" action=""> 
    <label for="age">Please type your age: </label></br>
    <input type="text" id="age" name="age" value="">
    <input type="submit" name="submit" value="Greet me now"></br>
    
    <label for="gender">Select your gender</label></br>
        <label for="gender">Homme</label>
    <input type="radio" id="Homme" name="gender" value="man"checked>
        <label for="gender">Femme</label>
    <input type="radio" id="Femme" name="gender" value="woman"checked></br>
    <label for="age">Do you speak English ?  </label></br>
    <label for="yes">yes</label>
    <input type="radio" id="yes" name="language" value="yes"checked>
        <label for="no">no</label>
    <input type="radio" id="no" name="language" value="no"checked> 
</form>-->

<?php
//exercice 6
/*if (isset($_GET['age']) && ctype_digit($_GET['age']) && isset($_GET['gender'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    
if ($age >21 && $age <= 40){
    if ($gender == "man"){
    echo "welcome to the team !";
    }
 } else {
    echo "Sorry you don't fit the criteria";
 }
}*/
?>
<!--<form action="" method="get">
    <label for="age">age:</label>
    <input type="text" name="age" id="age">
    <input type="submit" name = "submit" value="greet me now"></br>
    <label for="gender">Select your gender:</label>
        <label for="gender">Homme</label>
    <input type="radio" id="Homme" name="gender" value="man"checked>
        <label for="gender">Femme</label>
    <input type="radio" id="Femme" name="gender" value="woman"checked></br>
    <label for="name">name</label>
    <input type="text" name="name" id="name">
</form>-->

<?php
//exercice 7
 /*   $refuser = "Sorry you don't fit the criteria ";
if (isset($_GET['age']) && ctype_digit($_GET['age']) && isset($_GET['gender']) && isset($_GET['name'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $name = $_GET['name'];
    
if ($age >21 && $age <=40 && ($gender == "homme" || $gender == "femme") && $name != "") {
    $refuser = "welcome to the team ! ";
 }
    echo "$refuser ".$name." ";
}*/
?>
<!--<form action="" method="get">
    <label for="age">age:</label>
    <input type="text" name="age" id="age">
    <input type="submit" name = "submit" value="greet me now"></br>
    <label for="gender">Select your gender:</label>
        <label for="gender">Homme</label>
    <input type="radio" id="Homme" name="gender" value="homme"checked>
        <label for="gender">Femme</label>
    <input type="radio" id="Femme" name="gender" value="femme"checked></br>
    <label for="name">name</label>
    <input type="text" name="name" id="name">
</form>-->

<?php
//exercice 8
/*if (isset($_GET['note']) && ctype_digit($_GET['note'])){
    $note = $_GET['note'];

    if( $note < 4 ) {
        echo "This work is really bad. What a dumb kid! ";
    } elseif ( $note > 5 && $note <= 9 ) {
        echo "This is not sufficient. More studying is required.";
    } elseif ( $note == 10 ) {
        echo "barely enough!";
    } elseif ( $note > 11 && $note <= 14 ) {
        echo "Not bad!";
    } elseif ( $note > 15 && $note <= 18 ) {
        echo "Bravo, bravissimo!";
    } elseif ( $note == 20 ) {
        echo "Too good to be true : confront the cheater!";
    }
}*/
?>
<!--<form action="" method="get">
<label for="note"> enter your note</label>
<input type="text" name="note" id="note" value="">
<input type="submit" name="submit" value="send">
</form>-->
