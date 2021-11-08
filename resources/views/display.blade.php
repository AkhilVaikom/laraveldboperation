<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Data</title>
<style>
    h1{
        background-color:gray
    }
    </style>
</head>
<body>

<h1 class="bg-success p-2 text-dark bg-opacity-50">Student Details</h1>
<table class="table" class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Mark</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @if(isset($students))
    @foreach($students as $student)
    <tr class="table-secondary">
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->subject}}</td>
    <td>{{$student->mark}}</td>
    <td><a href="{{url('/deleteitem/'.$student->id)}}" >Delete</a></td>
    <td><a href="{{url('/edit/'.$student->id)}}" >Edit</a></td>
    </tr>
    @endforeach
    @endif

  </tbody>
</table>
<br>

    
<br>
<a href="{{url('/add')}}" >Add New Student</a>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>