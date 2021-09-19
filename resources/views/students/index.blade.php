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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                      @if(session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <div class="card-header">
                        <h4 class="m-auto">Laravel8 Image CRUD</h4>
                        <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Ad Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Image</th>
                                    <th>Eit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($students as $item )
                            <tr>
                             <td>{{ $item->id }}</td>
                             <td>{{ $item->name }}</td>
                             <td>{{ $item->course }}</td>
                             <td>
                                 <img src="{{ asset('uploads/students/'.$item->image) }}" width="100px"height="70px" alt="Image">
                             </td>
                             <td>
                                 <a href="{{ url('edit-student'.$item->id) }}" class="btn btn-primary btn-sm ">Edit</a>
                             </td>
                              <td>
                                 {{-- <a href="{{ url('delete-student'.$item->id) }}" class="btn btn-danger btn-sm ">Delete</a> --}}
          <form action="{{ url('delete-student'.$item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
            </form>
                             </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
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
