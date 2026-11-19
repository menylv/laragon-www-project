
<?php

if (isset($_POST['add_form'])) {

    require_once "db.php";

    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO myguestbook(user, email, postdate, posttime, comment)
            VALUES (:user, :email, :pdate, :ptime, :comment)");

        $stmt->bindParam(':user', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':pdate', $postdate, PDO::PARAM_STR);
        $stmt->bindParam(':ptime', $posttime, PDO::PARAM_STR);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $postdate = date("Y-m-d", time());
        $posttime = date("H:i:s", time());
        $comment = trim($_POST['comment'] ?? '');

        $stmt->execute();

        header("Location: list.php");
        exit();

    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}

?>
