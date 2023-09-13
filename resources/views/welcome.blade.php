<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jeevajith">
    <meta name="description" content="This is regarding the online auction app for the modern world">
    <title>My First Web Page</title>
    <link rel="icon" href="{URL('images/308408383.jpg')}}">
    <!-- Include Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-aliceblue font-sans">
    <header class="flex items-center bg-blue-100 p-2">
        <img class="w-20 h-20 mr-auto" src="{{URL('images/308408383.jpg')}}" alt="Header image of the web page">
        <div class="ml-auto">
        <a href="{{URL('login')}}"><button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mr-4">Login</button></a>
        <a href="https://dental-patient-management.atlassian.net/wiki/spaces/DPM/overview?homepageId=33482"><button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Get Started</button></a>
        </div>
    </header>
    <div class="p-8">
        <h1 class="text-6xl font-bold ml-3 mt-6">Dental Clinic-Peradeniya</h1>
        <h1 class="text-3xl font-bold ml-3 mt-6">Smarter System, Smarter Practice:</h1>
        <p class="text-lg ml-3 mt-6">Spend less time managing your practice and more time caring for your patients.</p>
    </div>
    <div class="flex items-center justify-center">
    <a href="https://dental-patient-management.atlassian.net/wiki/spaces/DPM/overview?homepageId=33482"><button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-10 mb-60 ml-15 rounded-lg">Get Started</button></a>
        <img class="w-96 h-96 ml-96 mr-0" src="{{URL('images/789f956afdd71b2e5bb6f6eb684b743e.png')}}" alt="Main image of home page">
    </div>
    <footer class="bg-blue-900 text-white text-center py-2">
        <p class="text-sm">&copy; 2019 All Rights Reserved PEB Dental</p>
    </footer>
</body>
</html>

