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

<body class="font-[Poppins]">
    <div id="post" class="flex flex-col items-center h-screen">
        <div id="pictures" class=" snap-x flex snap-mandatory w-2/3 h-3/5 mx-auto mt-10 overflow-scroll">
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
        <div class="justify-center w-2/3 bg-blue-300">
            <h1>Nome Piatto</h1>
        </div>
    </div>
</body>
</html>