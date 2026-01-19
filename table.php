    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee Table</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">

        <div class="container mt-4 p-4 shadow rounded bg-white">

            <a href="form.php" class="btn btn-outline-primary mb-3">Add Employee +</a>

            <h3 class="text-center mb-4">Employee List</h3>

            <table class="table table-hover table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'connnectiondata.php';

                    $select = "SELECT * FROM tbl_employee";
                    $ex = mysqli_query($conn, $select);

                    while ($row = mysqli_fetch_assoc($ex)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">

                                    <form action="delete.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?> ">
                                        <button name="delete" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                    <a href="FormEdit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-warning">
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>