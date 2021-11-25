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
      <div class="card">
          <div class="card-header text-center">
              Student login
          </div>
      <div class="card-body">
      @if(Session::has('success'))
 <div class="alert alert-success"> {{session::get('success')}}</div>
@endif
  <form method="post" action="{{route('addpost')}}">
      @csrf
  <div class="mb-3">
    <label  class="form-label">StudentName</label>
    <input type="text" class="form-control" name="sname" aria-describedby="emailHelp">
    
  <div class="mb-3">
    <label class="form-label">Course</label>
    <input type="text" class="form-control" name="course" >
  </div>
  <div class="mb-3">
    <label class="form-label">Fee</label>
    <input type="text" class="form-control" name="fee" >
  </div>
  
  <input type="submit" class="btn btn-primary" name="sub" value="submit">
  <button class="btn btn-info"> <a href="{{route('showpost')}}">SHOWPOST</a></button>
</form>
<div>
</div>

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