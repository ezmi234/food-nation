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
            
            <!-- Login component -->
            <div class="flex shadow-md">
                <!-- Login form -->
                <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
                <div class="w-72">
                    <!-- Heading -->
                    <h1 class="text-xl font-semibold">FoodNation</h1>
                    <small class="text-gray-500">Share and see recipes from all over the world.</small>

                    <!-- Form -->
                    <form class="mt-4">
                    <div class="mb-3">
                        <label class="mb-2 block text-xs font-semibold">Email</label>
                        <input type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3">
                        <label class="mb-2 block text-xs font-semibold">Password</label>
                        <input type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3 flex flex-wrap content-center">
                        <a href="#" class="text-xs font-semibold text-purple-700">Forgot password?</a>
                    </div>

                    <div class="mb-3">
                        <button class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
                    </div>
                    </form>

                    <!-- Footer -->
                    <div class="text-center">
                    <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
                    <a href="/signUp"  class=" text-xs font-semibold text-purple-700">Sign up</a>
                    </div>
              </div>
              </div>
              <!-- Login banner -->
              <div class="invisible md:visible md:static absolute flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
                <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="https://i.imgur.com/9l1A4OS.jpeg">
              </div>

            </div>
            </div>
                        
        </app> 
    </div>




    <!-- component-->
                        
    @vite('resources/js/app.js')
</body>
</html>