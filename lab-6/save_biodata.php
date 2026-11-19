
<?php

if (isset($_POST['biodata_validate'])) {

   
    $servername = "lrgs.ftsm.ukm.my";
    $username = "a223717";
    $password = "largegreensnake";
    $dbname = "a223717";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $stmt = $conn->prepare("INSERT INTO biodata (
            name, age, gender, address, email, dob,
            height, phone, color, fbtwig, photo,
            university, matricnum
        ) VALUES (
            :name, :age, :gender, :address, :email, :dob,
            :height, :phone, :color, :fbtwig, :photo,
            :university, :matricnum
        )");

        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':height', $height);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':fbtwig', $fbtwig);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':university', $university);
        $stmt->bindParam(':matricnum', $matricnum);

       
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $height = $_POST['height'];
        $phone = $_POST['phone'];
        $color = $_POST['color'];
        $fbtwig = $_POST['fbtwig'];
        $photo = $_POST['photo'];
        $university = $_POST['university'];
        $matricnum = $_POST['matricnum'];

        
        $stmt->execute();

        echo "New records created successfully";
    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}

?>
