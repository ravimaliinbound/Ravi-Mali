<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h2 class="bg-info text-center">Add Students</h2>

<div class="container mt-3">
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label>Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="name" required>
    </div>
    <div class="mb-3 mt-3">
      <label>Mobile:</label>
      <input type="number" class="form-control"  placeholder="Enter Mobile Number" name="mobile" required>
    </div>
    <div class="mb-3 mt-3">
      <label>Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3 mt-3">
      <label>Image:</label>
      <input type="file" class="form-control" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
