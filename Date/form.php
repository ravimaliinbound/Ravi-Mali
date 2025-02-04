<!DOCTYPE html>
<html lang="en">
<head>
  <title>Date</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h2 class="mt-5 pt-5">Date Function</h2>
  <form action="form_date.php" method="post">
    <div class="mb-3">
      <label>Date 1:</label>
      <input type="datetime-local" class="form-control" name="date1" required>
    </div>
    <div class="mb-3">
      <label>Date 2:</label>
      <input type="datetime-local" class="form-control" name="date2" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
