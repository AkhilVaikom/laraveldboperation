<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
</head>
<body>
<h1>Student Details</h1>
<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Subject</th>
    <th>Mark</th>
    <th>Action</th>
</tr>
@if(isset($students))
@foreach($students as $student)
<tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->subject}}</td>
    <td>{{$student->mark}}</td>
    <td><a href="{{url('/deleteitem/'.$student->id)}}" >Delete</a></td>
    <td><a href="{{url('/edit/'.$student->id)}}" >Edit</a></td>
    <!-- <td><a href="/deleteitem/{{$student->id}}" >Delete</a></td>
    <td><a href="/edit/{{$student->id}}" >Edit</a></td> -->
</tr>
@endforeach
@endif
</table>
    
<br>
<a href="{{url('/add')}}" >Add New Student</a>
</body>
</html>