<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>
</head>

<body>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <h1>Create Project</h1>
<h2>
    <form action="\users\store" method="post">
        @csrf 
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" ><br><br>
        
    <form action="\users\store" method="post">
        @csrf 
        <label for="project">Project Name:</label>
        <input type="text" id="project" name="project" required><br><br>

   <form action="\users\store" method="post">
    @csrf 
        <label for="date">Date:</label>
        <input type="text" id="date" name="date" required><br><br>

    <form action="\users\store" method="post">
    @csrf 
        <label for="process">Project Process:</label>
        <input type="text" id="process" name="process" required><br><br>

   <form action="\users\store"method="post">
   @csrf 
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>

<!--<button type="submit" class="btn btn-outline-primary">Create Project</button>-->
  
    </form>
</h2>
</body>
</html>