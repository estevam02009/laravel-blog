@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Post</h1>
        <section class="mt-3">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- error message --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card p-3">
                    <label for="floatingInput">Title</label>
                    <input type="text" class="form-control" name="title">
                    <label for="floatingTextArea">Description</label>
                    <textarea class="form-control" name="description" id="floatingTextArea" cols="30" rows="10"></textarea>
                    <label for="formFile" class="form-label">Add Image</label>
                    <img src="" alt="" class="img-blog">
                    <input type="file" class="form-control" name="image">
                </div>

                <button class="btn btn-secondary m-3">Save</button>
            </form>
        </section>
    </div>
@endsection