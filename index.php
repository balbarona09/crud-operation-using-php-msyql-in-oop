<?php require_once 'name-action.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation using Object Oriented in PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-body-tertiary">
    <!-- Edit Modal - Start -->
    <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="edit-modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-4" id="edit-modal-label">Edit Name</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="hidden" name="name-id" id="edit-name-id">
              <div class="py-2">
                <label class="fw-medium">Last Name</label>
                <input class="form-control" type="text" name="lastname" id="edit-lastname">
              </div>
              <div class="py-2">
                <label class="fw-medium">First Name</label>
                <input class="form-control" type="text" name="firstname" id="edit-firstname">
              </div>
              <div class="py-2">
                <label class="fw-medium">Middle Name</label>
                <input class="form-control" type="text" name="middlename" id="edit-middlename">
              </div>
              <div class="py-2">
                <label class="fw-medium">Suffix</label>
                <input class="form-control" type="text" name="suffix" id="edit-suffix">
              </div>
              <div class="py-2">
                <input class="btn btn-primary" type="submit" name="update" value="Save">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Edit Modal - End -->
    
    <!-- Delete Modal - Start -->
    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-4" id="delete-modal-label">Are you sure you want to delete this name?</h2>
          </div>
          <div class="modal-body">
            <form method="post">
              <input type="hidden" name="name-id" id="delete-name-id">
              <div class="row justify-content-around"  >
                <input class="col-4 btn btn-danger" type="submit" name="delete" value="Yes">
                <button class="col-4 btn btn-secondary" type="button" data-bs-dismiss="modal" aria-label="Close">No</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Delete Modal - End -->
    
    <div class="container mt-3">
      <!-- Insert Form - Start -->
      <div class="card">
        <h1 class="card-header">CRUD operation using Object Oriented in PHP and MySQL</h1>
        <div class="card-body">
          <form class="row" method="post">
            <div class="col-md-6 py-2">
              <label class="fw-medium" for="lastname">Last Name</label>
              <input class="form-control" type="text" name="lastname" id="lastname">
            </div>
            <div class="col-md-6 py-2">
              <label class="fw-medium" for="firstname">First Name</label>
              <input class="form-control" type="text" name="firstname" id="firstname">
            </div>
            <div class="col-md-6 py-2">
              <label class="fw-medium" for="middlename">Middle Name (Optional)</label>
              <input class="form-control" type="text" name="middlename" id="middlename">
            </div>
            <div class="col-md-6 py-2">
              <label class="fw-medium" for="suffix">Suffix (Optional)</label>
              <input class="form-control" type="text" name="suffix" id="suffix">
            </div>
            <div class="py-2">
              <input class="btn btn-primary" type="submit" name="insert" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <!-- Insert Form - End -->
      
      <!-- Name Table - Start -->
      <div class="card mt-3">
        <div class="card-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Suffix</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if(count($record)): $counter = 0; ?>
              <?php foreach($record as $row): $counter++; ?>
              <tr id="action-tr-<?= $counter ?>">
                <th scope="row"><?= $row['name_id']; ?></th>
                <td><?= htmlspecialchars($row['lastname'], ENT_QUOTES); ?></td>
                <td><?= htmlspecialchars($row['firstname'], ENT_QUOTES); ?></td>
                <td><?= htmlspecialchars($row['middlename'], ENT_QUOTES); ?></td>
                <td><?= htmlspecialchars($row['suffix'], ENT_QUOTES); ?></td>
                <td>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</button>
                  <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal">Delete</button>
                </td>
              </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr><td colspan="6" class="text-center">No record yet</td></tr>
            <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Name Table - End -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>