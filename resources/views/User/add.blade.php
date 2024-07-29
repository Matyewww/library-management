<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grip gap-2">
                <form action="{{   url('Books') }}" method="Post">
        @csrf
        <div class="form-group mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-controler"> </div>
        <div class="form-group mb-3">
        <label class="form-label">Author</label>
        <input type="text" name="author" class="form-controler">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-controler">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">ISBN</label>
        <input type="number" name="isbn" class="form-controler">
        </div>
        <div class="form-group mb-3">
        <label class="form-label">Published_Year</label>
        <input type="date" name="published_year" class="form-controler">
        </div>
        <div class="form-group mb-3">
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>