<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="container mx-auto mt-12 p-6 bg-white rounded-xl shadow-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Create New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                <textarea id="content" name="content" rows="6" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors font-bold">Create Post</button>
                <a href="{{ route('posts.index') }}" class="text-gray-600 hover:underline">Back to Posts</a>
            </div>
        </form>
    </div>
</body>
</html>