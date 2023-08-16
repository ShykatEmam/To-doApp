@extends('home.master')
@section('title')
    Add ToDo
@endsection
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">

                        <h1>Add new ToDo</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('save.todo')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mini Description</label>
                                <input type="text" class="form-control" name="description" placeholder="description" required>
                            </div>
                            <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                        </form>
                        @if (session('message'))
                            <div  id="alert" class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
