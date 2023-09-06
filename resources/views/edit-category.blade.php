<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Category</title> <!-- Corrected title -->
</head>

<body class="bg-black">

<div class="container mx-auto py-8 mt-12">
    <h2 class="text-2xl font-bold mb-6 text-center text-white">Edit Category</h2> <!-- Corrected heading text -->
    <form method="post" action="{{ route('update-category', ['id' => $category->id]) }}" class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
        @csrf
        <input type="hidden" name="id" value="{{ $category->id }}"> <!-- Corrected variable name -->
        <div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category_name">Name</label> <!-- Corrected field name -->
                <input type="text" name="category_name" value="{{ $category->category_name }}" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-purple-300 focus:bg-white focus:outline-none"/>
            </div>
        </div>
        <br>

        <div class="flex items-center justify-around">
            <button class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Update
            </button>

            <a href="{{ url('category-list') }}" class="text-black no-underline hover:underline">Back</a> <!-- Corrected view name -->
        </div>
    </form>
</div>

</body>
</html>
