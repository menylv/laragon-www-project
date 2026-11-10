<?php
 
if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST['biodata_form'])) {
    exit("Invalid access.");
}
 $valid_universities = ["UPM", "UKM", "UM", "USM", "UTM"];

$data = [
    "name"       => trim($_POST['name'] ?? ''),
    "age"        => trim($_POST['age'] ?? ''),
    "gender"     => trim($_POST['gender'] ?? ''),
    "address"    => trim($_POST['address'] ?? ''),
    "email"      => trim($_POST['email'] ?? ''),
    "dob"        => trim($_POST['dob'] ?? ''),
    "height"     => trim($_POST['height'] ?? ''),
    "phone"      => trim($_POST['phone'] ?? ''),
    "color"      => trim($_POST['color'] ?? ''),
    "fbtwig"     => trim($_POST['fbtwig'] ?? ''),
    "photo"      => $_FILES['photo']['name'] ?? null,
    "university" => $_POST['university'] ?? '',
    "matricnum"  => trim($_POST['matricnum'] ?? '')
];

$errors = [];

if ($data['name'] == '') {
    $errors[] = "Please insert your name.";
}

if ($data['age'] == '' || !filter_var($data['age'], FILTER_VALIDATE_INT) && $data['age'] !== '0' || $data['age'] < 0 || $data['age'] > 100) {
    $errors[] = "Age must be an integer between 0 and 100.";
}

if (!in_array($data['gender'], ['male', 'female'], true)) {
    $errors[] = "Please select a valid sex.";
}

if ($data['address'] == '') {
    $errors[] = "Please insert your address.";
} elseif (strlen($data['address']) > 255) {
    $errors[] = "Address cannot exceed 255 characters.";
}

if (!preg_match('/.+@.*[Uu][Kk][Mm].*/', $data['email'])) {
    $errors[] = "Please enter a valid email address.";
}

$date = date('Y-m-d', strtotime($data['dob']));

if (!$date) {
    $errors[] = "Please enter a valid date of birth.";
}

if ($data['height'] == '' || !is_numeric($data['height']) || $data['height'] < 100 || $data['height'] > 200) {
    $errors[] = "Height must be between 100 and 200 cm.";
}

if (!preg_match('/^\+60\d{2}-\d{7}$/', $data['phone'])) {
    $errors[] = "Phone number must follow +60##-####### format.";
}

if (!preg_match('/^#[a-fA-F0-9]{6}$/', $data['color'])) {
    $errors[] = "Please select a valid colour.";
}

if ($data['fbtwig'] == '') {
    $errors[] = "Please enter a valid URL.";
}

if ($data['photo'] == '') {
    $errors[] = "Select a valid photo.";
}

if (!in_array($data['university'], $valid_universities, true)) {
    $errors[] = "Please select a valid university.";
}

if ($data['matricnum'] == '') {
    $errors[] = "Please insert your matric number.";
}


?>