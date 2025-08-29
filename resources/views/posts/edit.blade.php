<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto mt-12 p-6 bg-white rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                <textarea id="content" name="content" rows="6" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $post->content }}</textarea>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors font-bold">Update Post</button>
                <a href="{{ route('posts.index') }}" class="text-gray-600 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>