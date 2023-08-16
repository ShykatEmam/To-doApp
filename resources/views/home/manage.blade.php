@extends('home.master')
@section('title')
    Manage ToDo
@endsection
@section('content')

    <div class="container mt-5">
        <div class="row">


            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Manage Todo info</h1>
                    </div>
                    <div class="card-body table-responsive">
                        @if (session('message'))
                            <div id="alert" class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <table class="table-bordered table">
                            <tr class="bg-primary text-center text-white">
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach($list as $todo)
                                <tr>
                                    <td>{{$todo->id}}</td>
                                    <td>{{$todo->name}}</td>
                                    <td>{{$todo->description}}</td>
                                    <td class="d-flex ">
                                        <a href="{{route('edit.todo',['id'=>$todo->id])}}" class="btn btn-primary mx-2">Edit</a>

                                        <form action="{{route('delete.todo')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$todo->id}}">
                                            <input type="submit" value="Delete" onclick="return confirm('Are you sure? {{$todo->name}}')" class="btn btn-danger">
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
