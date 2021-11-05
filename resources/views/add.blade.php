<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
</head>
<body> 
   
    <form action="{{ route('add-student') }}" method="post"> 
    
        @csrf
        <h1>Add Student Details</h1>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"> <br><br>
        <label for="subject">Subject: </label>
        <input type="text" name="subject" id="subject"> <br><br>
        <label for="mark">Mark: </label>
        <input type="text" name="mark" id="mark"> <br><br>
        <input type="submit">
    </form>
<br><br>

</body>
</html> 