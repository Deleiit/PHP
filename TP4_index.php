<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Team Builder</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="icon"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6/svgs/solid/martini-glass-citrus.svg">
</head>

<style>
  .bg-gris {
    background-color: #ccc;
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-martini-glass-citrus me-4"></i>
        VIP Cocktail
      </a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="bg-gris p-4">
          <form method="post" action="ajouter.php">
            <div class="row">
              <div class="col-4">
                <input aria-label="First Name" class="form-control" placeholder="First Name" name="prenom" />
              </div>
              <div class="col-4">
                <input aria-label="Last Name" class="form-control" placeholder="Last Name" name="nom" />
              </div>
              <div class="col-1">
                <button class="btn btn-success">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-4">
        <table class="table table-striped mt-4">
          <tbody>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th colspan="2">Actions</th>
            </tr>
            <?php if (isset($_SESSION["utilisateurs"])): ?>
              <?php foreach ($_SESSION["utilisateurs"] as $indice => $utilisateur): ?>
                <?php if ($utilisateur["etat"]) {
                  $class = 'uccess';
                } else {
                  $class = 'danger';
                } ?>
                <tr class="table-<?= $class ?>">
                  <td><?= $utilisateur["prenom"] ?></td>
                  <td><?= $utilisateur["nom"] ?></td>
                  <td>
                    <a href="enlever.php?utilisateur_id=<?= $indice ?>" class="btn btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                  <td>
                    <a href="modifier.php?utilisateur_id=<?= $indice ?>" class="btn btn-warning">
                      <i class="fa fa-check"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
      <p class="m-0 text-center text-white">
        Copyright &copy; Seven Valley 2023
      </p>
    </div>
  </footer>

</body>

</html>