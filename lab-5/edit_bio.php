
<!--
Matric Number: A223717
Name: AMNI NAJLAA
-->

<?php
$univ = array
(
    array("name"=>"Universiti Putra Malaysia","short"=>"UPM"),
    array("name"=>"Universiti Kebangsaan Malaysia","short"=>"UKM"),
    array("name"=>"Universiti Malaya","short"=>"UM"),
    array("name"=>"Universiti Sains Malaysia","short"=>"USM"),
    array("name"=>"Universiti Teknologi Malaysia","short"=>"UTM")
);

$record = array
(
    'name' => "Amni Najlaa",
    'age' => 21,
    'gender' => "female",
    'address' => "KPZ, UKM Bangi, Selangor",
    'email' => "a223717@ukm.edu.my",
    'dob' => "2005-10-18",
    'height' => 160,
    'phone' => "+6011-2646234",
    'color' => "#f33da1",
    'fbtwig' => "https://www.facebook.com/amni.najlaa",
    'photo' => "face.jpg",
    'univ' => "UKM",
    'matricnum' => "a223717"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Biodata</title>
    <!-- claude -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6fa;
            width: 400px;
            margin: 20px auto;
            color: #1e3a5f;
        }

        h1 {
            color: black;
            font-size: 24px;
        }

        table {
            width: 100%;
            border: none;
        }

        td {
            display: block;
            padding: 5px 0;
            border: none;
            font-size: 14px;
        }


        input:not([type="radio"]):not([type="file"]),
        textarea,
        select {
            width: 100%;
            box-sizing: border-box;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        input[type="range"],
        input[type="radio"],
        input[type="file"],
        input[type="color"] {
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #386a9d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 5px;
        }

        input[type="reset"] {
            width: 100%;
            padding: 10px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<h1>Biodata Form</h1>
<hr>

<form action="validate_biodata.php" method="post" enctype="multipart/form-data">

<table border="1" cellpadding="10">

<tr>
    <td>Name:</td>
    <td>
        <input type="text" name="name"
        placeholder="Insert your name"
        autofocus required
        pattern="[A-Z][a-z]*( [A-Z][a-z]*)*"
        title="Name must be in Title Case"
        value="<?= $record['name'] ?>">
    </td>
</tr>

<tr>
    <td>Age:</td>
    <td>
        <input type="number" name="age"
        min="0" max="100" step="1" required
        value="<?= $record['age'] ?>">
    </td>
</tr>

<tr>
    <td>Gender:</td>
    <td>
        <input type="radio" name="gender" id="male"
        value="male"
        <?= $record['gender'] == 'male' ? 'checked' : '' ?>
        required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female"
        value="female"
        <?= $record['gender'] == 'female' ? 'checked' : '' ?>>
        <label for="female">Female</label>
    </td>
</tr>

<tr>
    <td>Address:</td>
    <td>
        <textarea name="address" cols="50" rows="5"
        placeholder="Insert your address" required><?= $record['address'] ?></textarea>
    </td>
</tr>

<tr>
    <td>Email:</td>
    <td>
        <input type="email" name="email" id="emailId"
        required
        pattern="[^@\s]+@[^@\s]*ukm[^@\s]*"
        title="Email must contain the word ukm"
        value="<?= $record['email'] ?>">
    </td>
</tr>

<tr>
    <td>Date of Birth:</td>
    <td>
        <input type="date" name="dob" id="dobId"
        required
        value="<?= $record['dob'] ?>">
    </td>
</tr>

<tr>
    <td>Height:</td>
    <td>
        <input type="range" name="height" id="heightId"
        min="100" max="200"
        value="<?= $record['height'] ?>"
        oninput="outputId.value = heightId.value">

        <output id="outputId"><?= $record['height'] ?></output>cm
    </td>
</tr>

<tr>
    <td>Phone Number:</td>
    <td>
        <input type="tel" name="phone" id="phoneId"
        placeholder="+60##-#######"
        required
        pattern="(\+60|0060)[0-9]{1,2}-?[0-9]{7,8}"
        title="Must begin with +60 or 0060"
        value="<?= $record['phone'] ?>">
    </td>
</tr>

<tr>
    <td>My favourite color:</td>
    <td>
        <input type="color" name="color" id="colorId"
        required
        value="<?= $record['color'] ?>">
    </td>
</tr>

<tr>
    <td>FB/TW/IG:</td>
    <td>
        <input type="url" name="fbtwig" id="fbtwigId"
        placeholder="Insert the URL"
        required
        value="<?= $record['fbtwig'] ?>">
    </td>
</tr>

<tr>
    <td>My Face photo:</td>
    <td>
        <input type="file" name="photo" id="photoId"
        accept="image/*" required>
    </td>
</tr>

<tr>
    <td>My University:</td>
    <td>
        <select name="university" required>

            <option value="">Select your university</option>

            <?php foreach ($univ as $u): ?>
                <option value="<?= $u['short']; ?>"
                    <?= ($u['short'] == $record['univ']) ? 'selected' : ''; ?>>
                    <?= $u['name']; ?>
                </option>
            <?php endforeach; ?>

        </select>
    </td>
</tr>

</table>

<hr>

<input type="hidden" name="matricnum"
value="<?= $record['matricnum'] ?>">

<button type="submit" name="biodata_form"
value="Submit My Biodata">
Submit My Biodata
</button>

<input type="reset" name="reset_form" value="Reset Form">

</form>

</body>
</html>
