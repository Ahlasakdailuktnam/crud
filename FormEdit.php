<?php 
include 'connnectiondata.php';
$id=$_GET['id'];
$select="SELECT * FROM tbl_employee WHERE id='$id'";
$ex=$conn->query($select);
$row=mysqli_fetch_assoc($ex);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container w-50 mt-5 p-4 shadow rounded bg-white">
    <a href="table.php">

        <button class="btn btn-outline-dark"><-Back to Table </button>
    </a>
    <h2 class="text-center mb-4">Edit Form</h2>

    <form action="Edit.php" method="post">
        <input type="hidden" name="id" value="<?=  $row['id'] ?>">
        <div class="mb-3">
            <label class="form-label">Employee Name</label>
            <input type="text" class="form-control" value="<?= $row['name'] ?>" name="name" placeholder="Employee name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-select" required>
                <option value="" disabled selected>Choose gender</option>
                <option value="male" <?=  $row['gender']=='male' ? 'selected' : '' ?>>Male</option>
                <option value="female" <?= $row['gender']=='female' ? 'selected' : '' ?>>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Employee Position</label>
            <select name="position" class="form-select" required>
                <option value="" disabled selected>Position</option>
                <option value="manager" <?=  $row['position']=='manager' ? 'selected' : '' ?>>Manager</option>
                <option value="assistant_manager" <?=  $row['position']=='assistant_manager' ? 'selected' : '' ?>>Assistant Manager</option>
                <option value="hr"<?=  $row['position']=='hr' ? 'selected' : '' ?>>HR Officer</option>
                <option value="accountant"<?=  $row['position']=='accountant' ? 'selected' : '' ?>>Accountant</option>
                <option value="developer"<?=  $row['position']=='developer' ? 'selected' : '' ?>>Software Developer</option>
                <option value="designer"<?=  $row['position']=='designer' ? 'selected' : '' ?>>UI/UX Designer</option>
                <option value="marketing"<?=  $row['position']=='marketing' ? 'selected' : '' ?>>Marketing Officer</option>
                <option value="sales"<?=  $row['position']=='sales' ? 'selected' : '' ?>>Sales Executive</option>
                <option value="support"<?=  $row['position']=='support' ? 'selected' : '' ?>>Customer Support</option>
                <option value="intern"<?=  $row['position']=='intern' ? 'selected' : '' ?>>Intern</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="form-label">Salary</label>
            <input name="salary" value="<?= $row['salary'] ?>" type="number" class="form-control" placeholder="Salary" required>
        </div>

        <button name="update" type="submit" class="btn btn-success w-100">
            Submit
        </button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
