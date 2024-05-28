{{-- @extends('layout')

@section('title', 'wariBateshwar')
@section('content')
<style>
    body {
        background-color: wheat; /* Set the background color */
    }
</style>
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


    <!-- Image Upload Form -->
    <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="page" value="{{"wariBateshwar"}}">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Choose Image:</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                <label for="description"><p>Description:</p></label>
                <input type="text" name="description" class="form-control description" placeholder="Enter description">
            </div>
            <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>

    <hr>

    <!-- Display Uploaded Images with Details -->
    <div class="row">
        @foreach ($images as $image)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->name }}">
                <div class="card-body">
                    <p class="card-text">{{ $image->description }}</p>
                    @if ($image->user_id == auth()->user()->id)
                        <form action="{{ route('delete.image', $image->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
 --}}
 @extends('layout')

@section('title', 'wariBateshwar')

@section('content')
<style>
    body {
        background-color: wheat; /* Set the background color */
    }
</style>
<div class="container">
    <!-- Display success or error messages -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Image Upload Form -->
    <form action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="page" value="wariBateshwar">
        <div class="form-group">
            <label for="image">Choose Image:</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" class="form-control description" placeholder="Enter description">
        </div>
        <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>

    <hr>

    <!-- Display Uploaded Images with Details -->
    <div class="row">
        @foreach ($images as $image)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->name }}">
                    <div class="card-body">
                        <p class="card-text">{{ $image->description }}</p>
                        @if ($image->user_id == auth()->user()->id)
                            <form action="{{ route('delete.image', $image->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
