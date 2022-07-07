<!DOCTYPE html>
<html lang="en" class="scroll-smoth" data-theme="ligth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTKES - Fasilitas Kesehatan Kota Depok</title>

    <!-- CSS RESOURCE -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden p-8 lg:p-4">
        <div class="w-full p-6 m-auto bg-white border-t border-accent rounded shadow-lg shadow-accent lg:max-w-md">
            <h1 class="text-3xl font-semibold text-center text-accent">FastkesDE</h1>

            <form class="mt-6">
                <div>
                    <label for="email" class="block text-sm text-gray-800">Email</label>
                    <input type="email" class="block w-full px-4 py-2 mt-2 text-accent bg-white border rounded-md focus:border-accent focus:ring-accent focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                    <div>
                        <label for="password" class="block text-sm text-gray-800">Password</label>
                        <input type="password" class="block w-full px-4 py-2 mt-2 text-accent bg-white border rounded-md focus:border-accent focus:ring-accent focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                    <div class="mt-6">
                        <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-accent rounded-md hover:bg-accent focus:outline-none focus:bg-accent">
                            Register
                        </button>
                    </div>
            </form>

        </div>
    </div>
</body>

</html>