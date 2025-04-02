<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h2 class="text-center">Modifier le Contenu</h2>
    
    <form action="save_code.php" method="POST">
        <textarea name="code" class="form-control" rows="10"><?php echo file_get_contents("saved_code.html"); ?></textarea>
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
    </form>

</body>
</html>
