<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
    
    <title>FoodNation</title>
</head>
<body class="font-[Poppins] bg-gray-200 h-screen">
    <div id="app">
        <app>
            <!-- component -->
            <!-- Container -->
            <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
                    <div class="flex justify-between">
                        <!-- Logo -->
                        <div class="flex">
                            <img src="{{ URL('images/page4.svg') }}" alt="logo" class="w-20 h-20">
                            <h1 class="text-xl font-semibold">FoodNation</h1>

                        </div>
                    </div>
            </div>
                        
        </app> 
    </div>




    <!-- component-->
                        
    @vite('resources/js/app.js')
</body>
</html>