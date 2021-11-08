<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/form.css" rel="stylesheet" type="text/css">
    <title>Student Page</title>
</head>
<body> 
<div class="main-body">

<h1>Add Student Details</h1>
<form action="{{ route('add-student') }}" method="post">

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
      @csrf
    <label for="subject" class="form-label">Subject</label>
    <input type="text" name="subject" class="form-control" id="subject">
  </div>
  <div class="mb-3">
    <label for="mark" class="form-label">Mark</label>
    <input type="text" name="mark" class="form-control" id="mark">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   

<br><br>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</div>
</body>
</html> 