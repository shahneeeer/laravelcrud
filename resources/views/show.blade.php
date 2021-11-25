<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
  @if(Session::has('delete'))
 <div class="alert alert-success"> {{session::get('delete')}}</div>
@endif
      <div class="container mt-5">
         <button class="btn btn-info"> <a href="{{route('addpost')}}">ADDPOST</a></button>
      <table class="table table-striped">
          <tr>
              <th>ID</th>
              <th>StudentName</th>
              <th>Course</th>
              <th>Fee</th>
              <th>Actions</th>
          </tr>
          @foreach($first as $student)
          <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->studentname }}</td>
              <td>{{ $student->course }}</td>
              <td>{{ $student->fee }}</td>
              <td>
                  <a href="/edit-post/{{ $student->id }}">Edit</a> |
                  <a href="/delete-post/{{ $student->id }}">Delete</a>
              </td>
          </tr>
          @endforeach      
</table>
  <div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>