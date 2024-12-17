<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu-page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black text-white">
    <nav class="fixed w-full z-50 bg-black/90 px-4 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-light">LA MICHELINE</a>
            <div class="hidden md:flex space-x-8 text-sm">
                <a href="#" class="hover:text-gray-300 transition">Accueil</a>
                <a href="#" class="hover:text-gray-300 transition">Menu</a>
                <a href="#" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="#" class="hover:text-gray-300 transition">Presse</a>
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

    <!-- menu section -->
    <section class="max-w-7xl mx-auto px-4 py-24 bg-white text-black">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Image Column -->
            <div class="relative">
                <img src="../public/assets/cc439a_7ca4c898b5804094bfde7bcc48112852~mv2.jpeg"
                    alt="Plat gastronomique avec poisson" class="w-[90%] shadow-lg" />
            </div>

            <!-- Menu Content Column -->
            <div class="space-y-8">
                <h2 class="text-3xl font-light tracking-wide">NOS MENUS</h2>

                <div class="space-y-6">
                    <a href="#" class="block text-lg hover:text-gray-600 transition-colors">
                        Le Menu du midi
                    </a>

                    <a href="#" class="block text-lg hover:text-gray-600 transition-colors">
                        Le Menu à la carte
                    </a>

                    <a href="#" class="block text-lg hover:text-gray-600 transition-colors">
                        La Carte des Vins
                    </a>
                </div>

                <div class="space-y-4 text-sm leading-relaxed">
                    <p>
                        Faites simplement confiance au Chef Andrés Arocena et laissez-vous surprendre par l'un de ses
                        deux menus dégustation, disponible du mardi au samedi, le midi jusqu'à 13h00 et le soir jusqu'à
                        21h00 (prise de commande).
                    </p>

                    <p>
                        Nous proposons également un accord mets&vins pour vous faire déguster un de nos vins à chacun
                        des plats !
                    </p>
                </div>

                <div class="space-y-4 text-sm">
                    <div>
                        <p class="font-medium">Menu dégustation 5 plats / 135.-</p>
                        <p class="text-gray-600 italic">Accord mets & vins + 70.-</p>
                    </div>

                    <div>
                        <p class="font-medium">Menu dégustation 6 plats / 155.-</p>
                        <p class="text-gray-600 italic">Accord mets & vins + 80.-</p>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-200">
                    <p class="text-sm mb-4">
                        Nos nouveautés vous intéressent ? Vous voulez être informés des menus de la semaine chaque lundi
                        matin, des nouveautés, événements et autres news sur La Micheline ?
                    </p>
                    <a href="#" class="inline-block text-sm font-medium hover:underline hover:transition-all hover:duration-700 hover:ease-in-out">
                        Recevez notre newsletter
                    </a>
                </div>
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