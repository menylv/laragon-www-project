
<?php

// Guard clause
if ($_SERVER['REQUEST_METHOD'] === 'GET' && (!isset($_GET['id']))) {
    exit('Use list.php to open an entry for deleting.');
}


// Delete record
if (isset($_GET['id'])) {

    require_once "db.php";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("DELETE FROM myguestbook WHERE id = :record_id");

        $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);

        $id = $_GET['id'];

        $stmt->execute();

        header("Location:list.php");
        exit();

    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}

?>
