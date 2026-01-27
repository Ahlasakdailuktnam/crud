<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

  <div class="container mt-4 p-4 shadow rounded-3">

    <button id="add" class="btn btn-outline-dark float-end mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
      +Add Product
    </button>

    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th>ID</th>
          <th>Product Name</th>
          <th>QTY</th>
          <th>Price</th>
          <th>Total</th>
          <th>Discount</th>
          <th>Payment</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

        <?php
        require 'connection.php';

        $rs = $conn->query("SELECT * FROM tbl_products");

        while ($row = mysqli_fetch_assoc($rs)) {
        ?>

          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['pro_name'] ?></td>
            <td><?= $row['qty'] ?></td>
            <td>$<?= $row['price'] ?></td>
            <td>$<?= $row['total'] ?></td>
            <td><?= $row['discount'] ?>%</td>
            <td>$<?= $row['payment'] ?></td>

            <td>
              <img src="image/<?= $row['image'] ?>" class="rounded-circle product-img" width="40" height="40">
            </td>

            <td>
              <form action="delete2.php" method="post" class="d-inline">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>

              <button class="btn btn-outline-warning btn-sm edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Edit
              </button>
            </td>
          </tr>

        <?php } ?>

      </tbody>
    </table>
  </div>


  <div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <form id="form" action="insert.php" method="post" enctype="multipart/form-data">

          <div class="modal-header">
            <h5 id="exampleModalLabel">Add Product</h5>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">

            <input type="hidden" name="id" id="pid">

            <div class="mb-2">
              <label>Product Name</label>
              <input id="product" name="name" class="form-control">
            </div>

            <div class="mb-2">
              <label>QTY</label>
              <input id="qty" name="qty" type="number" class="form-control">
            </div>

            <div class="mb-2">
              <label>Price</label>
              <input id="price" name="price" type="number" class="form-control">
            </div>

            <div class="mb-2">
              <label>Image</label><br>
              <img id="image" src="https://i.pinimg.com/736x/4c/3e/02/4c3e027d03ea726d4696eb368852a174.jpg"
                width="100" height="100" class="rounded-circle mb-2">
              <input id="file" name="file" type="file" class="form-control">
            </div>

          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
            <button id="save" name="submit" class="btn btn-primary">Save</button>
            <button id="update" name="update" class="btn btn-warning">Update</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {

      $('#file').hide();

      $('#image').click(function() {
        $('#file').click();
      });

      $('#file').change(function() {
        let file = this.files[0];
        if (file) {
          $('#image').attr('src', URL.createObjectURL(file));
        }
      });

      $('#add').click(function() {
        $('#save').show();
        $('#update').hide();
        $('#exampleModalLabel').text('Add Product');
        $('#form').attr('action', 'insert.php');
        $('#form')[0].reset();
        $('#image').attr('src', 'https://i.pinimg.com/736x/4c/3e/02/4c3e027d03ea726d4696eb368852a174.jpg');
      });

      $('.edit').click(function() {

        $('#save').hide();
        $('#update').show();
        $('#exampleModalLabel').text('Edit Product');
        $('#form').attr('action', 'edit2.php');

        const row = $(this).closest('tr');

        $('#pid').val(row.find('td:eq(0)').text().trim());
        $('#product').val(row.find('td:eq(1)').text().trim());
        $('#qty').val(row.find('td:eq(2)').text().trim());

        let price = row.find('td:eq(3)').text().replace('$', '');
        $('#price').val(price);

        let img = row.find('img').attr('src');
        $('#image').attr('src', img);

      });

    });
  </script>

</body>

</html>