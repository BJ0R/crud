<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto mt-12 p-6 bg-white rounded-xl shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Posts</h1>
            <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">Create New Post</a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-gray-50 p-6 rounded-lg shadow-md flex flex-col justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-700 mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($post->content, 100) }}</p>
                    </div>
                    <div class="flex space-x-2 mt-auto">
                        <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-500 text-white px-3 py-1 text-sm rounded-md hover:bg-yellow-600 transition-colors">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 text-sm rounded-md hover:bg-red-600 transition-colors">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
        @if ($posts->isEmpty())
            <p class="text-center text-gray-500 mt-8">No posts found. Create one to get started!</p>
        @endif
    </div>
</body>
</html>
