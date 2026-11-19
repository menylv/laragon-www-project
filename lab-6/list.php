
<?php
require_once "db.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM myguestbook");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Guestbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<main class="container py-5">

    <div class="mb-4">
        <h1 class="h3 mb-3">Guestbook entries</h1>

        <div>
            <a class="btn btn-primary me-2 mb-2" href="form.php">Add a comment</a>
            <a class="btn btn-outline-secondary mb-2" href="index.php">Home</a>
        </div>
    </div>

    <ol class="list-group shadow-sm">

        <?php
        foreach($result as $index => $row) {
        ?>

        <li class="list-group-item p-4">

            <span class="fw-semibold me-2"><?= $index + 1 ?>.</span>

            <h2 class="d-inline h5 fw-semibold mb-2">
                <?= htmlspecialchars($row["user"]) ?>
            </h2>

            <div class="mb-3">
                <span class="text-primary">
                    <?= htmlspecialchars($row["email"]) ?>
                </span>

                <span class="badge text-bg-light border text-secondary ms-2">
                    <?= htmlspecialchars($row["postdate"]) ?>
                </span>

                <span class="badge text-bg-light border text-secondary ms-1">
                    <?= htmlspecialchars($row["posttime"]) ?>
                </span>
            </div>

            <div class="bg-light rounded p-3 mb-3">
                <blockquote class="blockquote fst-italic mb-0 text-break">
                    <p class="mb-0">
                        “<?= htmlspecialchars($row["comment"]) ?>”
                    </p>
                </blockquote>
            </div>

            <div>
                <a class="btn btn-sm btn-outline-primary me-2"
                   href="edit.php?id=<?= $row["id"] ?>">Edit</a>

                <a class="btn btn-sm btn-outline-danger"
                   href="delete.php?id=<?= $row["id"] ?>"
                   onclick="return confirm('Delete this entry?')">Delete</a>
            </div>

        </li>

        <?php
        }
        ?>

    </ol>

</main>

</body>
</html>
