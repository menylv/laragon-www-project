<?php
 
$lecturers = array(
    array('id' => "K004901", 'name' => "Prof. Dr. Abdullah Mohd Zin", 'room' => "BD, Block G (Level 1)", 'tel' => "+603-89216173", 'email' => "amzftsm@ukm.edu.my"),
    array('id' => "K012964", 'name' => "Prof. Dr. Azuraliza Abu Bakar", 'room' => "BTDR, Blok G (Level 1)", 'tel' => "+603-89216177", 'email' => "azuraliza@ukm.edu.my"),
    array('id' => "K009683", 'name' => "Assoc. Prof. Dr. Haslina Arshad", 'room' => "BTDS, Block A (Ground Floor)", 'tel' => "+603-89216812", 'email' => "haslinarshad@ukm.edu.my"),
    array('id' => "K007915", 'name' => "Assoc. Prof. Dr. Mohd Juzaiddin Ab Aziz", 'room' => "BTDP, Blok A (Level 1)", 'tel' => "+603-89216183", 'email' => "juzaiddin@ukm.edu.my")
);
 
if (empty($_GET['id'])):
    exit("Error: Lecturer ID is missing.");
endif;
 
$id = $_GET['id'];
$lecturer = null;
 
foreach ($lecturers as $item):
    if ($item['id'] == $id):
        $lecturer = $item;
        break;
    endif;
endforeach;
 
if ($lecturer === null):
    exit("Error: Lecturer not found.");
endif;
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Lecturer Details</title>
</head>
<body>
 
<h1><?= $lecturer['name']; ?></h1>
<hr>
 
<table border="1" cellpadding="10">
    <tr>
        <td colspan="2">
            <img src="<?= $lecturer['id']; ?>.jpg" width="300" alt="Lecturer photo">
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $lecturer['email']; ?></td>
    </tr>
    <tr>
        <td>Room</td>
        <td><?= $lecturer['room']; ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?= $lecturer['tel']; ?></td>
    </tr>
</table>
 
</body>
</html>