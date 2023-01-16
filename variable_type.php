<?php $name = "Jonathan Bajoux";?>
<?php $age = "35";?>
<?php $color = "brown";?>
<?php $name_familly = array(
  0 => 'Elisa', 
  1 => 'Sasha', 
  2 => 'Gabriel'); ?>
<p>hi! my name is <?php echo $name ?> </p>
<p>I am <?php echo $age ?> years old</p>
<p>My eyes are: <?php echo $color ?> </p>
<p>name familly: <?php echo $name_familly[0] ?> </p>
<p>Are you hungry?</p>
<?php
echo'<input type="checkbox" id="YES" method="get" name="confirm value="yes">
<label for="yes">Yes</label>
<input type="checkbox" id="no" method="get" name="confirm value="no">
<label for="no">no</label>'
?>
<?php if (isset($_GEt['value'])){ ?>
<?php echo $_GET['value']; ?>
<?php } ?>



