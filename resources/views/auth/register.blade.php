<html lang="en">
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md">
        <form method="POST" action="/api/register" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <h2 class="text-2xl font-bold mb-6">Register</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="name" name="name" type="name" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="email" name="email" type="email" placeholder="Enter your email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="password" name="password" type="password" placeholder="Enter your password">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>
</html>
