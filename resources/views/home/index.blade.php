<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodNation</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body class="font-[Poppins] bg-gray-200 h-screen">
    <div id="app">
        <div class="flex flex-col h-screen">   
            <!--header-->
            <div class="flex flex-row justify-between bg-green-300 h-50"> 
                <div class="invisible md:visible md:static absolute flex items-center">
                    <img src="{{ URL('images/logo.svg') }}" alt="logo" class="w-20 h-20">
                </div>
                <div class="flex items-center">
                    <button class="bg-orange-300 h-full">
                        <img src="{{URL('images/home.svg')}}" alt="home" class="w-20 h-20">
                    </button>
                </div>
                <div>
                    <button onclick ="window.location.href ='/search'" class="bg-green-300">
                        <img src="{{URL('images/ricerca.svg')}}" alt="search" class="w-20 h-20"> 
                    </button>
                </div>
                <div class="flex items-center">
                    <button onclick ="window.location.href ='/foodOfTheDay'" class="bg-green-300">
                        <img src="{{URL('images/piatto.svg')}}" alt="food of the day" class="w-20 h-20">
                    </button>
                </div>
                <div class="flex items-center">
                    <button onclick ="window.location.href ='/'" class="bg-green-300">
                        <img src="{{URL('images/pesca.svg')}}" alt="notificatons" class="w-20 h-20">
                    </button>
                </div>
                <div class="flex items-center">
                    <button onclick ="window.location.href ='/profile'" class="bg-green-300">
                        <img src="{{URL('images/chef.svg')}}" alt="profile" class="w-20 h-20">                    
                    </button>
                </div>
            </div>
            <div id="post" class="flex flex-col items-center">
                <div id="pictures" class=" snap-x flex snap-mandatory md:w-2/3 mx-auto mt-10 overflow-scroll ">
                    <div id="img1" class="snap-start bg-green-300 w-full h-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ URL('images/carbo.png') }}" alt="logo" class="">
                    </div>
                    <div id="img2" class="snap-start bg-blue-300 w-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ URL('images/carbo.png') }}" alt="logo" class="">
                    </div>
                    <div id="img3" class="snap-start bg-blue-300 w-full flex-shrink-0 flex items-center justify-center">
                        <img src="{{ URL('images/carbo.png') }}" alt="logo" class="">
                    </div>
                    <div id="img4" class="snap-start bg-blue-300 w-full flex-shrink-0  flex items-center justify-center">
                        <img src="{{ URL('images/carbo.png') }}" alt="logo" class="">
                    </div>
                </div>
                <div class="justify-center md:w-2/3 w-screen bg-blue-300">
                    <h1>Nome Piatto</h1>
                </div>
                <div class="justify-center md:w-2/3 w-screen bg-blue-300">
                    <img src="{{URL('images/pesca.svg')}}" alt="likes" class="w-5 h-5">
                </div>
            </div>
        </div>
    </div>
</body>
</html>