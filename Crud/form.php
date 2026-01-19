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
    <h2 class="text-center mb-4">Employee Form</h2>

    <form action="insert.php" method="post">

        <div class="mb-3">
            <label class="form-label">Employee Name</label>
            <input type="text" class="form-control" name="name" placeholder="Employee name" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-select" required>
                <option value="" disabled selected>Choose gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Employee Position</label>
            <select name="position" class="form-select" required>
                <option value="" disabled selected>Position</option>
                <option value="manager">Manager</option>
                <option value="assistant_manager">Assistant Manager</option>
                <option value="hr">HR Officer</option>
                <option value="accountant">Accountant</option>
                <option value="developer">Software Developer</option>
                <option value="designer">UI/UX Designer</option>
                <option value="marketing">Marketing Officer</option>
                <option value="sales">Sales Executive</option>
                <option value="support">Customer Support</option>
                <option value="intern">Intern</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="form-label">Salary</label>
            <input name="salary" type="number" class="form-control" placeholder="Salary" required>
        </div>

        <button name="btnSubmit" type="submit" class="btn btn-success w-100">
            Submit
        </button>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
