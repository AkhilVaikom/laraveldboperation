<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
</head>
<body> 
   @if(isset($student['id']))
   
    <form action="/update/{{$student->id}}" method="post"> 
    
        @csrf
        <h1>Update Student Details</h1>
        <label for="name" >Name: </label>
        <input type="text" name="name" id="name" value="{{$student['name']}}"> <br><br>
        <label for="subject">Subject: </label>
        <input type="text" name="subject" id="subject" value="{{$student->subject}}"> <br><br>
        <label for="mark">Mark: </label>
        <input type="text" name="mark" id="mark" value="{{$student->mark}}"> <br><br>
        <input type="submit" value="Update"> 
    </form>
    @endif
<br><br>

</body>
</html> 