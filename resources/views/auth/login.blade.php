
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Jeevajith">
    <meta name="Description" content="This is regarding the online auction app to the modern world">
    <title>Login Page</title>
    <link rel="icon" href="308408383.jpg">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white font-sans">
    <header class="flex items-center bg-blue-100 p-2">
        <img class="w-20 h-20 mr-auto" src="{{URL('images/308408383.jpg')}}" alt="Header image of the web page">
        <div class="flex ml-auto p-5">
            <a class="mr-12" href="{{URL('')}}">Home</a>
            <a class="mr-12" href="https://fonts.google.com/specimen/Open+Sans">Services</a>
            <a class="mr-12" href="https://fonts.google.com/specimen/Open+Sans">Blogs</a>
            <a class="mr-12" href="https://fonts.google.com/specimen/Open+Sans">About</a>
            <a class="mr-12" href="https://fonts.google.com/specimen/Open+Sans">Contact</a>
        </div>
        <div class="ml-auto">
        <a href="https://dental-patient-management.atlassian.net/wiki/spaces/DPM/overview?homepageId=33482"><button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Sign up</button></a>
        </div>
    </header>
    <div class="flex">
        <img src="{{URL('images/61879816.jpg')}}" alt="Google Logo" class="w-96 h-96 mr-2 mt-24">
        <div class="min-h-screen flex items-center justify-center ml-36 mr-12">
            <div class="max-w-md w-full mx-auto p-6">
                <div class="bg-white rounded-lg shadow-xl">
                    <div class="p-6">
                        <h1 class="text-2xl font-semibold text-center">Welcome Back</h1>
                        <div class="mt-6">
                            <a href="http://google.com" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full block text-center">
                                <div class="flex items-center justify-center">
                                    <img src="{{URL('images/image8-2.webp')}}" alt="Google Logo" class="w-5 h-5 mr-2">
                                    Log in with Google
                                </div>
                            </a>
                        </div>
                        <div class="mt-6">
                            <p class="text-center">----------------------Or------------------------</p>
                        </div>
                        <div class="mt-6">
                            <input type="text" name="username" id="username" placeholder="Enter your Email" class="px-4 py-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" autocomplete="on" required autofocus>
                        </div>
                        <div class="mt-4">
                            <input type="password" name="password" id="password" placeholder="Password" class="px-4 py-2 w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none" required>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="remember" class="form-checkbox">
                                <span class="ml-2">Remember Me</span>
                            </label>
                            <a href="#" class="text-blue-500 hover:underline">Forgotten Password?</a>
                        </div>
                        <div class="mt-6">
                            <a href="{{URL('dashboard')}}"></a><button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full w-full">Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-blue-900 text-white text-center py-2">
        <p class="text-sm">&copy; 2019 All Rights Reserved PEB Dental</p>
    </footer>
</body>
</html>

