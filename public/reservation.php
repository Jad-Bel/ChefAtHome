<?php 
  require "/laragon/www/LA-MICHELINE/public/bin/connect.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-black text-white">

    <nav class="fixed w-full z-50 bg-black/90 px-4 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="../public/index.php" class="text-2xl font-light">LA MICHELINE</a>
            <div class="hidden md:flex space-x-8 text-sm">
                <a href="../public/index.php" class="hover:text-gray-300 transition">Accueil</a>
                <a href="../public/menu.php" class="hover:text-gray-300 transition">Menu</a>
                <a href="../public/reservation.php" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="../public/authentification.php" class="hover:text-gray-300 transition">Sign up</a>
            </div>
            <button id="burger-menu" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-black/90 py-4">
            <div class="flex flex-col items-center space-y-4 text-sm">
                <a href="../public/index.php" class="hover:text-gray-300 transition">Accueil</a>
                <a href="../public/menu.php" class="hover:text-gray-300 transition">Menu</a>
                <a href="#" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="#" class="hover:text-gray-300 transition">Presse</a>
            </div>
        </div>
    </nav>

    <section class="w-full mx-auto px-4 py-24 bg-[#f6f6f7] text-black pb-5">
        <h1 class="text-3xl font-light text-center mb-8">RESERVATIONS</h1>
        
        <div class="text-center space-y-6 mb-12">
          <p class="text-sm">
            C'est avec plaisir que nous prendrons votre réservation afin de vous assurer une table lors de votre arrivée à La Micheline.
          </p>
          <p class="text-sm">
            Pour les groupes de plus de 8 personnes, nous vous invitons à nous contacter par email à l'adresse 
            <a href="mailto:info@lamicheline.ch" class="text-teal-700 hover:underline">info@lamicheline.ch</a> 
            afin que nous puissions déterminer un menu pour l'ensemble de la tablée.
          </p>
          <p class="text-sm">
            Veuillez noter que les réservations pour 5 personnes ou plus nécessitent une garantie bancaire. Cette mesure nous aide à mieux planifier notre service et à minimiser les impacts des annulations de dernière minute sur notre organisation.
            Nous vous remercions de votre compréhension.
          </p>
          <p class="text-sm">
            Au plaisir de vous accueillir au restaurant La Micheline !
          </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-24 bg-[#f6f6f7] text-black">
        <div class="grid md:grid-cols-2 gap-12 items-start">
          <!-- Image Column -->
          <div class="relative">
            <img 
              src="../public/assets/cc439a_af4baf69437542668b888a07531e78dd~mv2.jpeg" 
              alt="Table setting with wine glass and pink flowers" 
              class="w-full h-auto shadow-lg"
            />
          </div>
    
      
      <!-- Reservations Widget Section -->
      <div class="w-full mx-auto px-4 py-24 bg-[#f8f7ff] text-black">
        <!-- Reservation Form -->
        <div class="bg-[#f8f7ff] p-8 rounded-lg shadow-sm max-w-xl mx-auto text-black">
          <div class="text-center mb-6">
            <h2 class="text-xl font-medium mb-4">La Micheline</h2>
            <select class="px-3 py-2 border rounded bg-white">
              <option>FR</option>
            </select>
          </div>
      
          <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="relative">
              <input type="number" value="2" min="1" class="w-full px-3 py-2 border rounded" placeholder="Pers.">
              <span class="absolute right-3 top-2 text-gray-400">Pers.</span>
            </div>
            <input type="date" class="px-3 py-2 border rounded" placeholder="Aujourd'hui">
            <input type="time" value="19:00" class="px-3 py-2 border rounded">
          </div>
      
          <button class="w-full bg-teal-700 text-white py-3 rounded hover:bg-teal-800 transition-colors">
            TROUVER UNE TABLE
          </button>
      
          <p class="text-sm text-teal-700 mt-4">
            <span class="inline-block w-2 h-2 bg-teal-700 rounded-full mr-2"></span>
            Pour des questions d'organisation, nous vous remercions de bien vouloir respecter votre horaire de réservation :)
          </p>
        </div> 
      </div>  
    </section>

       <!-- footer -->
    <footer class="bg-black text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <!-- Address -->
                <div>
                    <h4 class="text-lg mb-4">ADRESSE</h4>
                    <p class="text-sm">Avenue de la Gare des</p>
                    <p class="text-sm">Eaux-Vives 3, 1207</p>
                    <p class="text-sm">Genève</p>
                </div>

                <!-- Hours -->
                <div>
                    <h4 class="text-lg mb-4">HORAIRES</h4>
                    <p class="text-sm">Lundi et Dimanche : Fermé</p>
                    <p class="text-sm">Mardi au Samedi : 12:00 - 14:00 / 19:00 - 22:00</p>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg mb-4">CONTACT</h4>
                    <p class="text-sm">Tél : 022 840 03 38</p>
                    <p class="text-sm">Mail : info@lamicheline.ch</p>
                </div>
            </div>

            <!-- Certifications -->
            <div class="flex justify-center space-x-8 mt-12">
                <span class="text-white/70">Guide MICHELIN</span>
                <span class="text-white/70">Gault&Millau</span>
            </div>
        </div>
    </footer>
</body>
</html>