@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Post</h1>
@stop

@section('content')
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                role="tab" aria-controls="pills-home" aria-selected="true">Publish</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Draft</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Trash</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($published as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category }}</td>


                            <td>
                                <form action="{{ route('article.delete', $post->id) }}" method="POST" class="inline">
                                    <a href="{{ route('article.edit', $post->id) }}" class="btn btn-warning">
                                        <i class="fa fa-pen-square text-white"></i>

                                    </a>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-alt text-white"
                                            aria-hidden="true"></i></button>
                                </form>



                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>



        </div>

        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drafted as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category }}</td>

                            <td>
                                <form action="{{ route('article.delete', $post->id) }}" method="POST" class="inline">
                                    <a href="{{ route('article.edit', $post->id) }}" class="btn btn-warning">
                                        <i class="fa fa-pen-square text-white"></i>

                                    </a>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-alt text-white"
                                            aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>


        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

            <table class="table table-striped">
                <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trashed as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category }}</td>

                            <td>

                                <a href="{{ route('article.edit', $post->id) }}" class="btn btn-warning">
                                    <i class="fa fa-pen-square text-white"></i>

                                </a>


                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>


        </div>
    </div>
@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
