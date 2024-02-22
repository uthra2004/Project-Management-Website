<!DOCTYPE html>
<html>
<head>
    <title>Update Project</title>
</head>
<body>

<a class="text-light" href="{{route('users.index')}}">Back to List</a>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <h1>Update Project</h1>
<h2>
<form action="{{route('users.update',$Users->id)}}" class="was-validated" method="POST">
@method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="{{$Users->name}}"><br><br>

    
        <label for="name">Project Name:</label>
        <input type="text" id="name" name="name" required value="{{$Users->project}}"><br><br>

        <label for="name">Date:</label>
        <input type="text" id="name" name="name" required value="{{$Users->date}}"><br><br>


        <label for="name">Project Process:</label>
        <input type="text" id="name" name="name" required value="{{$Users->process}}"><br><br>

   
        <label for="name">Status:</label>
        <input type="text" id="name" name="name" required value="{{$Users->status}}"><br><br>

<button type="submit" class="btn btn-outline-primary">Update</button>
@endofsession

    </form>
</h2>
</body>
</html>