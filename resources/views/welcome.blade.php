<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="container mx-auto mt-8">
            <h1 class="text-2xl font-semibold mb-4">Sorted Products</h1>

            <!-- Filter Button -->
            <form method="GET" action="/">
            <div class="mb-4">
                <label for="sort" class="mr-2">Sort by:</label>
                <select id="sort" name="sort" class="border p-2">
                    <option value="price">Price</option>
                    <option value="sales">Sales/View Ratio</option>
                </select>
                <button id="applyFilter" class="bg-blue-500 text-white px-4 py-2 ml-2">Apply Filter</button>
            </div>
        </form>
            <!-- Product Table -->
            <table class="w-full border">
                <thead>
                    <tr>
                        <th class="border p-2">ID</th>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Price</th>
                        <th class="border p-2">Sales Count</th>
                        <th class="border p-2">Views Count</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="border p-2">{{ $product->id }}</td>
                            <td class="border p-2">{{ $product->name }}</td>
                            <td class="border p-2">${{ $product->price }}</td>
                            <td class="border p-2">{{ $product->sales_count }}</td>
                            <td class="border p-2">{{ $product->views_count }}</td>
                            <!-- Add more columns as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script src="{{ asset('js/app.js') }}"></script> <!-- Include your JS file if needed -->
    </body>
</html>
