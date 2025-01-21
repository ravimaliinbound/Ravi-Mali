<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<h1 class="bg-info text-center">Dashboard</h1>
    <div class="container mt-3">
        <div class="py-2">
            <a href="add-student" class="btn btn-warning">Add Students</a>
            <a href="" class="btn btn-danger" style="margin-left:730px">Logout</a>
        </div>
        <h2 class="py-2">Students Data</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ravi</td>
                    <td>1234567808</td>
                    <td>ravi@example.com</td>
                    <td>1234</td>
                    <td>ravi.jpeg</td>
                    <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>