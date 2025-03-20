<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
</head>

<body>
   <div class="container py-5">
   <form method="post" action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" >Name</label>
            <input type="text" class="form-control" value="<?php echo $fetch->name; ?>"autocomplete="off" name="name" required >
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" value="<?php echo $fetch->image; ?>"  autocomplete="off" name="image" >
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" value="<?php echo $fetch->price; ?>"  autocomplete="off" name="price" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" value="<?php echo $fetch->description; ?>" autocomplete="off" name="description" required>
        </div>
        
        <button type="submit" class="btn btn-primary" name="save">Save</button>
    </form>
    <a href="dashboard" class="btn btn-success my-5">Back</a>
   </div>
   


</body>

</html>