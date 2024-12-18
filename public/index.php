<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Micheline</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black text-white font-['Inter']">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-black/90 px-4 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-light">LA MICHELINE</a>
            <div class="hidden md:flex space-x-8 text-sm">
                <a href="../public/index.php" class="hover:text-gray-300 transition">Accueil</a>
                <a href="../public/menu.php" class="hover:text-gray-300 transition">Menu</a>
                <a href="../public/reservation.php" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="../public/authentification.php" class="hover:text-gray-300 transition">Sign-up</a>
            </div>
            <button id="burger-menu" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-black/90 py-4">
            <div class="flex flex-col items-center space-y-4 text-sm">
                <a href="#" class="hover:text-gray-300 transition">Accueil</a>
                <a href="#" class="hover:text-gray-300 transition">Menu</a>
                <a href="#" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="#" class="hover:text-gray-300 transition">Presse</a>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="h-screen relative flex items-center">
        <div
            class="absolute inset-0 bg-[url('../public/assets/cc439a_9559adf558634cae8e032e23bfb6d146~mv2.avif')] bg-cover bg-center">
        </div>
        <div class="relative z-10 max-w-7xl md:w-full mx-auto px-4 md:px-32">
            <h1 class="text-4xl font-bold md:font-semibold tracking-wider drop-shadow-lg">LA MICHELINE</h1>
        </div>
    </section>

    <!-- Restaurant Info -->
    <section class="py-24 bg-white text-black">
        <div class="max-w-3xl mx-auto text-center px-4">
            <h2 class="text-2xl mb-8">LA MICHELINE</h2>
            <p class="mb-4">C'est dans la toute nouvelle Gare des Eaux-Vives, que le projet du restaurant La Micheline a
                trouvé sa place en 2020.</p>
            <p class="mb-8">La Micheline se veut être un lieu de passion, de création et de partage. Un lieu qui fait
                son chemin tout naturellement pour offrir une parenthèse dans un quartier à grande vitesse.</p>
            <div class="space-y-4">
                <a href="#" class="relative inline-block px-2 w-64 h-10 overflow-hidden rounded-md border-[1px] border-[#2f2c28] text-black font-medium text-[17px] leading-[2.5rem] tracking-wide cursor-pointer transition-all duration-500 before:absolute before:bg-black hover:text-white before:h-[150px] before:w-[325px] before:rounded-full before:top-full before:left-full before:transition-all before:duration-700 hover:before:top-[-30px] hover:before:left-[-50px] active:before:bg-[#fff]">Découvrir nos menus</a>
                <a href="#" class="relative inline-block px-2 w-64 h-10 overflow-hidden rounded-md border-[1px] border-[#2f2c28] text-black font-medium text-[17px] leading-[2.5rem] tracking-wide cursor-pointer transition-all duration-500 before:absolute before:bg-black before:h-[150px] before:w-[325px] before:rounded-full before:top-full before:left-full before:transition-all before:duration-700 hover:text-black hover:before:top-[-30px] hover:before:left-[-50px] active:before:bg-[#1a1a1a]">Réserver une table</a>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-24 bg-gray-50 text-black">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-12 text-center">
                <!-- Menu Dégustation -->
                <div class="space-y-4">
                    <h3 class="text-xl mb-6">MENU DEGUSTATION</h3>
                    <p class="text-sm">La meilleure manière de découvrir La Micheline</p>
                    <div class="space-y-2 text-sm">
                        <p>Menu dégustation en 5 temps - 135.- CHF</p>
                        <p>Avec accord mets & vins +70.- CHF</p>
                        <p>Menu dégustation en 6 temps - 155.- CHF</p>
                        <p>Avec accord mets & vins +80.- CHF</p>
                    </div>
                </div>

                <!-- Menu à la Carte -->
                <div class="space-y-4">
                    <h3 class="text-xl mb-6">MENU A LA CARTE</h3>
                    <p class="text-sm">Notre carte est disponible tous les midis et tous les soirs pour découvrir les
                        créations du Chef</p>
                    <a href="#" class="inline-block text-sm hover:underline">Découvrir notre menu à la carte</a>
                </div>

                <!-- Menu de la Semaine -->
                <div class="space-y-4">
                    <h3 class="text-xl mb-6">MENU DE LA SEMAINE</h3>
                    <p class="text-sm">Tous les midis, notre menu de la semaine à 58.-</p>
                    <p class="text-sm">CHF est composé d'une entrée, un plat et un dessert, et renouvelé tous les 15
                        jours</p>
                    <a href="#" class="inline-block text-sm hover:underline">Découvrir notre menu de la semaine</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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