<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>
</head>

<body>
<div>
    
</div>
<form action="{{route('users.store')}}" class="was-validated" method="POST" novalidate>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <h1>Create Project</h1>
<h2>
    
        @csrf 
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
    
        
    @csrf 
        <label for="project">Project Name:</label>
        <input type="text" id="project" name="project" required><br><br>

   
   @csrf 
        <label for="date">Date:</label>
        <input type="text" id="date" name="date" required><br><br>

       @csrf 
        <label for="process">Project Process:</label>
        <input type="text" id="process" name="process" required><br><br>

   
   @csrf 
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>
      <button type="submit" class="btn btn-outline-primary">Create Project</button>

  
    </form>
</form>
</h2>
</body>
</html>