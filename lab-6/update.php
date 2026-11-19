
<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET' && (!isset($_GET['id']))) {
    exit('Use edit.php to open an entry for editing.');
}

$result = false;


if (isset($_GET['id'])) {

    require_once "db.php";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM myguestbook WHERE id = :record_id");

        $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);

        $id = $_GET['id'];

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}

if (isset($_POST['edit_form'])) {

    require_once "db.php";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("UPDATE myguestbook SET user = :name, email = :email,
            comment = :comment WHERE id = :record_id");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
        $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $comment = trim($_POST['comment'] ?? '');

        $id = $_POST['id'];

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
