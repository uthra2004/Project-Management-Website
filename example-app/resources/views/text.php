@extends('layouts.app')
@section('content')
<!-- @if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif -->

<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Create New User</p>
        <form action="{{route('users.store')}}" class="was-validated" method="POST" novalidate>
            @csrf
            <div class="form-group has-validation">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}} " required value="{{old('name')}}">
                @if($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="project">Project</label>
                <input type="project" name="project" id="project" class="form-control {{$errors->has('project')?'is-invalid':''}}" required value="{{old('project')}}">
                @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('project')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control {{$errors->has('date')?'is-invalid':''}}" required value="{{old('date')}}">
                @if($errors->has('date'))
                    <span class="invalid-feedback">
                        <strong>{{$errors->first('date')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-validation">
  
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>
        </div>
  
    </form>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>
</div>
@endsection