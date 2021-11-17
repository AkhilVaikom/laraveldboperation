<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <link href="/css/form.css" rel="stylesheet" type="text/css">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                        <title>Teacher Data</title>
                        <style>
                            h1{background-color:gray}
                        </style>
                    </head>
                    <body>
                    <div class="div-left"></div>
<div class="div-center">
<h1 class="bg-success p-2 text-dark bg-opacity-50">Teachers Details</h1>
<table class="table" class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Phone</th>
      <th scope="col">email</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @if(isset($teachers))
    @foreach($teachers as $teacher)
    <tr class="table-secondary">
    <td>{{$teacher->id}}</td>
    <td>{{$teacher->t_name}}</td>
    <td>{{$teacher->t_subject}}</td>
    <td>{{$teacher->t_phone}}</td>
    <td>{{$teacher->t_email}}</td>
    <td><form action="{{route('teachers.edit',['teacher'=>$teacher->id])}}" method="get"> 
        @csrf
        <a class="btn btn-primary btn-sm" href="{{route('teachers.edit',['teacher'=>$teacher->id])}}" role="button">Edit</a>
    </form></td>
    <td><a class="btn btn-danger btn-sm" onclick="destroy({{$teacher->id}})" role="button">DELETE </a></td>
    </tr>
    @endforeach
    @endif

  </tbody>
</table>
{{$teachers->links()}}
<a class="btn btn-primary btn-lg" href="{{route('teachers.create')}}" role="button">Add New Teacher</a>
</button>
</div>
<div class="div-right"></div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
                </div>
            </div>
        </div>
    </div>
<script>
    
function destroy(id){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


    $.ajax({
        method:"DELETE",
        url:'/teachers/'+id,
        
    })
    .done(function(msg){
        alert("data saved");
    });
}
    


</script>
</x-app-layout>
