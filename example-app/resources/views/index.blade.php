<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>7
<body class="bg-secondary">
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <strong>Project List</strong>
                        <a href="\users\create" class="btn btn-dark position-absolute top-0 end-0">Create Project</a>
                        <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Project Name</th>
                                    <th>Date</th>
                                    <th>Project Process</th>
				    <th>Edit</th>
                                    <th>Status</th>

                               
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Users as $key => $Users)
        
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$Users->name}}</td>
                                    <td>{{$Users->project}}</td>
                                    <td> {{$Users->date}}</td>
                                    <td>{{$Users->status}}</td>
                                    <td><span type="button" class="active">UI</span></td>
                                    <td>
                                    <a href="{{route('users.edit',$Users->id)}}" class="btn btn-primary btn-xs py-0">Edit</a>
                                        
                                        <form action="{{route('users.destroy',$Users->id)}}" method="POST">
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                        @method('DELETE')
                                        @csrf
                                        </form>
                                    </td>
                                    
        
                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

