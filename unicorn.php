<?php
//exercice 11.2
if (isset($_GET['type'])) {
    $type = $_GET['type'];

    echo $img = ($type == 'human') ? '<iframe src="https://giphy.com/embed/ANVjGfJKOR7Pi" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>':(($type == 'cat') ?
        '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>':
            '<iframe src="https://giphy.com/embed/hX1iySDndtacdycg2j" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>');

}
?>
<form action="" method="get">
<label for="selectionné">human</label>
<input type="checkbox" name="type" id="human" value="human">
<label for="selectionné">cat</label>
<input type="checkbox" name="type" id="cat" value="cat">
<label for="selectionné">unicorn</label>
<input type="checkbox" name="type" id="unicorn" value="unicorn">
<input type="submit" name="submit" value="click">
</form>