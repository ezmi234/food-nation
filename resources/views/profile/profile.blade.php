<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

<!--Barra di navigazione-->

<nav class="border-b px-4 py-2 bg-grey-100">
    <div class="flex flex-wrap items-center justify-between md:justify-around">
        <div>
            <a href="#">
                <img class="h-7" src="https://cdn.imgbin.com/20/13/5/imgbin-chimney-home-icon-3y6ypnXCP64RzDsS9etwscAHZ.jpg" alt="home">
            </a>
        </div>
      
        <div>
            <a href="#">
                <img class="h-7" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbhPYcc4w2Rp0h5cYhv2a-CbFL6ga7qtSo4Xi9EQKrDtWV9jgIo2FNVMjrFUMut_j-7ew&usqp=CAU" alt="Search">
            </a>
        </div>
        <div>
        <a href="#">
            <img  class="h-7" src="https://img.favpng.com/22/17/5/fork-emoji-eating-food-plate-png-favpng-3F1P1ZyDKVehAndBSFFZgevJ1.jpg" alt="Food of the day">
            </a>
         </div>
         <div>
            <a href="">
                <img class="h-7"src="https://cdn-icons-png.flaticon.com/512/45/45618.png" alt="Profile">
            </a>
         </div>
         <div>
            <a href="">
                <img class="h-7"src="https://banner2.cleanpng.com/20171218/368/exclamation-mark-png-5a38152f936725.1940973515136248796038.jpg" alt="Profile">
            </a>
         </div>
    </div>
  </nav>
  
<!--Descrizione dell'untente-->

  <main class="bg-gradient-to-r from-purple-200 via-orange-200 to-red-200">
    <div class="lg:w-8/12 lg:mx-auto mb-2">
  
      <header class="flex flex-wrap items-center p-4 md:py-8">
  
        <div class="md:w-3/12 md:ml-16">
          <!-- profile image -->
          <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                       border-2 border-purple-600 " src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80" alt="profile">
        </div>
  
        <!-- profile meta -->
        <div class="w-8/12 md:w-7/12 ml-4">
          <div class="md:flex md:flex-wrap md:items-center mb-4">
            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2">
              Rappo01
            </h2>
  
            <!-- badge -->
            <span class="inline-block fas fa-certificate fa-lg text-blue-500 
                                 relative mr-6 text-xl transform -translate-y-2" aria-hidden="true">
              <i class="fas fa-check text-white text-xs absolute inset-x-0
                                 ml-1 mt-px"></i>
            </span>
  
            <!-- follow button -->
            <button class="bg-orange-500 px-2 py-1 text-white font-semibold text-sm rounded block text-center 
                            sm:inline-block block hover:bg-orange-600 active:bg-orange-700 focus:ring focus:ring-red-300">
                Follow
            </button>
            
          </div>
  
  
          <!-- Descriotion of the user -->
          <div class="block text-sm md:text-base">
            <h1 class="font-semibold">Quasi cuoco</h1>
            <span>Mi piace ballare fare foto e la piada col prosciutto</span>
            <p>Non so far bollire l'acqua m spero  che possiate apprezzare i miei 
                sforzi e che io possa imparare da voi.
            </p>
          </div>
  
        </div>
  
        <!-- user meta form small screens -->
        
      </header>
    </div>
    <div class="px-px md:px-3 border-blac">
        <ul class="flex  justify-around space-x-8 border-t
                  text-center p-2 text-gray-600 leading-snug text-sm">
          <li>
            <span class="font-semibold text-gray-800 block">136</span>
            Piatti
          </li>
  
          <li>
            <span class="font-semibold text-gray-800 block">40.5k</span>
            followers
          </li>
          <li>
            <span class="font-semibold text-gray-800 block">302</span>
            following
          </li>
        </ul>  
        <!-- sezione dei post-->
        <ul class="flex items-center justify-center space-x-12  
                      uppercase tracking-widest font-semibold text-xs text-gray-600
                      border-t">
          <li class="hover:border-t hover:border-gray-700">
            <a class="inline-block p-3" href="#">
              <i class="fas fa-th-large text-xl md:text-xs"></i>
              <span>Piatti</span>
            </a>
          </li>
          <li class="hover:border-t hover:border-gray-700">
            <a class="inline-block p-3" href="#">
              <i class="far fa-square text-xl md:text-xs"></i>
              <span>P.D.G</span>
            </a>
          </li>
        </ul>
    </div>

    
  </main>
</body>
</html>