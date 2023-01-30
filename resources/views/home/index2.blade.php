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
<div id="app">
        <div class="flex flex-col h-screen">   
            <!--header-->
            <div class="flex flex-row justify-between bg-green-800 h-50"> 
                <div class="invisible md:visible md:static absolute flex items-center">
                    <img src="{{ URL('images/logo.svg') }}" alt="logo" class="w-20 h-20">
                </div>
                <div class="flex items-center">
                    <button class="h-full">
                        <svg class="fill-current text-white w-20 h-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 289.95 384.86"><defs></defs><g id="Livello_2" data-name="Livello 2"><g id="Livello_1-2" data-name="Livello 1"><path class="cls-1" d="M158.52,8.22c-.93-.18-7.38,9.19-4.62,18.82,1.48,5.17,5,8.43,6.93,10.11,8.81,7.86,22.21,9.48,27.4,10.11.66.08,2.15.25,4.3.57a75.68,75.68,0,0,1,11.55,2.24A25.47,25.47,0,0,1,217,59.91c3.81,5.66,3.12,11,3.63,11s1.73-6.67-1.13-13.72a28.25,28.25,0,0,0-9.12-11.64c-7.6-5.6-16.54-6.48-20.56-6.88-3.5-.34-3.26-.18-5.68-.36-7.66-.59-13.39-6.75-16.27-9.74-5.58-5.8-7.81-12-8.08-14.06-.23-1.71-.67-3.41-.95-5.12C158.64,8.39,158.63,8.24,158.52,8.22Z"/><path class="cls-1" d="M197.46,0c-.64-.37-8.78,5.11-10,13.11a15.46,15.46,0,0,0,1.75,9.4c3.95,8.18,13.54,12.77,17.26,14.56.47.22,1.55.72,3.06,1.5a54.31,54.31,0,0,1,8,4.61,17.55,17.55,0,0,1,6.35,10.68c.92,5.26-1.45,9.12-1.05,9.22s3.63-4.62,3.9-10.68a20.06,20.06,0,0,0-2.87-11.12c-3.82-6.16-10.3-9.07-13.21-10.38-2.53-1.14-2.41-1-4.18-1.7-5.6-2.37-7.8-8.48-9-11.47-2.22-5.8-1.75-11.08-1.25-12.69.42-1.36.68-2.75,1.06-4.12C197.5.18,197.54.06,197.46,0Z"/><path class="cls-1" d="M155.38,54.73c-.44.08-1.09,5.17,2.29,8.87A12.43,12.43,0,0,0,163,66.81c5.59,1.93,11.72.42,14.11-.16.3-.08,1-.25,2-.47a35.92,35.92,0,0,1,5.49-.93,14.13,14.13,0,0,1,7.79,2.11c2.93,1.81,3.84,4.22,4.06,4.12s-.78-3.16-3.61-5.72a16,16,0,0,0-6.58-3.51,20.26,20.26,0,0,0-10.43.42c-1.58.43-1.44.46-2.53.78-3.43,1-7.3-.7-9.22-1.51a17.45,17.45,0,0,1-6.68-4.72c-.49-.71-1.06-1.36-1.58-2.06C155.47,54.78,155.43,54.72,155.38,54.73Z"/><path class="cls-1" d="M290,206.78H240.56v-.22H49.39v.22H0L145,81.22l36.78,31.87V81.76h57.78v81.36ZM251.6,195.73h8.73l-31.84-27.57V92.8H192.81v44.46L145,95.83,29.63,195.73h8.71v-.22H251.6Z"/><rect class="cls-1" x="38.34" y="195.51" width="213.26" height="11.27"/><polygon class="cls-1" points="178.69 384.79 167.65 384.79 167.65 301.16 122.29 301.16 122.29 384.79 111.25 384.79 111.25 290.12 178.69 290.12 178.69 384.79"/><polygon class="cls-1" points="251.02 384.86 173.17 384.86 173.17 373.81 239.97 373.81 239.97 206.56 49.97 206.56 49.97 373.81 116.77 373.81 116.77 384.86 38.93 384.86 38.93 195.51 251.02 195.51 251.02 384.86"/></g></g></svg>
                    </button>
                </div>
                <div>
                    <button onclick ="window.location.href ='/search'" class="bg-green-800">
                        <img src="{{URL('images/ricerca.svg')}}" alt="search" class="w-20 h-20"> 
                    </button>
                </div>
                <div class="flex items-center">
                    <button onclick ="window.location.href ='/foodOfTheDay'" class="bg-green-800">
                        <img src="{{URL('images/piatto.svg')}}" alt="food of the day" class="w-20 h-20">
                    </button>
                </div>
                <div class="flex items-center">
                    <button onclick ="window.location.href ='/'" class="bg-green-800">
                        <img src="{{URL('images/pesca.svg')}}" alt="notificatons" class="w-20 h-20">
                    </button>
                </div>
                <div class="flex items-center">
                    <button onclick ="window.location.href ='/profile'" class="bg-green-800">
                        <img src="{{URL('images/chef.svg')}}" alt="profile" class="w-20 h-20">                    
                    </button>
                </div>
                
            </div>
            <!--end header-->
        </div>
    </div>
</body>
</html>