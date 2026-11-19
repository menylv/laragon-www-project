
<?php
require_once "update.php";

if (!isset($result) || !$result) {
    exit("Record not found.");
}
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

<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <h1 class="h3 card-title text-center mb-4">Edit comment</h1>

                    <form method="post" action="update.php">

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>

                            <input type="text" class="form-control"
                                   id="name" name="name" size="40" required
                                   value="<?php echo htmlspecialchars($result["user"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>

                            <input type="text" class="form-control"
                                   id="email" name="email" size="25" required
                                   value="<?php echo htmlspecialchars($result["email"]); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label">Comments</label>

                            <textarea class="form-control"
                                      id="comment" name="comment"
                                      cols="30" rows="8" required><?php echo htmlspecialchars($result["comment"]); ?></textarea>
                        </div>

                        <input type="hidden" name="id"
                               value="<?php echo htmlspecialchars($_GET['id']); ?>">

                        <div class="text-center">

                            <input class="btn btn-primary me-2 mb-2"
                                   type="submit" name="edit_form"
                                   value="Modify Comment">

                            <input class="btn btn-secondary me-2 mb-2"
                                   type="reset" value="Reset">

                            <a class="btn btn-outline-secondary mb-2"
                               href="list.php">Cancel</a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
