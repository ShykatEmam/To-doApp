@extends('home.master')
@section('title')
    Edit ToDo
@endsection
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">

                        <h1>Updating "{{$todo->name}}" ToDo</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.todo')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" name="id" value="{{$todo->id}}">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$todo->name}}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mini Description</label>
                                <input type="text" class="form-control" name="description" value="{{$todo->description}}" required>
                            </div>
                            <button type="submit" class="btn btn-outline-primary w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
