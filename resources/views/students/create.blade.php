<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    @if(session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <div class="card-header">
                        <h4>Add Students With Image </h4>
                        <a href="{{ url('students') }}" class="btn btn-danger float-end"> Back</a>
                    </div>
                    <div class="card-body">
                    <form action="{{ url('add-student') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Stuent Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Stuent Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Stuent Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Info</button>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
