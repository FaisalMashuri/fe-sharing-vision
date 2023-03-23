@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Article</h1>
@stop

@section('content')
    <div class="container-fluid bg-white rounded p-2">
        <form method="POST" action="{{ route('article.store') }}">
            @csrf
            <div class="mb-3">
                <label for="titlelabel" class="form-label">Title</label>
                <input type="text" class="form-control" id="titlelabel" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">
                </textarea>
            </div>
            <div class="mb-3">
                <label for="categorylabel" class="form-label">Category</label>
                <input type="text" class="form-control" id="categorylabel" name="category" aria-describedby="emailHelp"
                    value="">
            </div>

            <div class="mb-3">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-warning active" for="danger-outlined">
                        <input type="radio" name="status" id="hatchback" autocomplete="off" checked value="Draft"> Draft
                    </label>
                    <label class="btn btn-outline-success" for="danger-outlined">
                        <input type="radio" name="status" id="sedan" autocomplete="off" value="Publish"> Publish
                    </label>

                </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@stop
