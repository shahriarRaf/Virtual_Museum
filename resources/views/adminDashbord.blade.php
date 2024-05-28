<!-- admin.dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('admin-assets/css/admin-dashboard.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    {{-- <style>
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 20px;
            justify-items: center;
            margin-top: 20px;
        }
        .image-thumbnail {
            max-width: 100%;
            height: auto;
        }
    </style> --}}
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>Admin Dashboard</h1>
            <div class="logout">
                <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
        <div class="image-grid-container">
            <div class="image-grid">
                @foreach($pendingImages as $image)
                    <div>
                        <img class="image-thumbnail" src="{{ Storage::url($image->path) }}" alt="{{ $image->name }}">

                    </div>
                    <div class="form">
                        <form action="{{ route('admin.image.approve', $image->id) }}" method="post">
                            @csrf
                            <button type="submit">Approve</button>
                        </form>
                        <form action="{{ route('admin.image.delete', $image->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                    </div>
                @endforeach
            </div>
        

        </div>
    </div>

   
</body>
</html>
