<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <nav class="static text-white w-full z-50 bg-black/90 px-4 py-4">
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

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r">
            <div class="p-6">
                <h1 class="text-xl font-semibold text-gray-800">Restaurant Admin</h1>
            </div>
            <nav class="mt-6">
                <a href="../public/reservationAdmin.php" class="flex items-center px-6 py-3 text-gray-600 hover:bg-zinc-700 hover:text-white :transition-all duration-500">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Reservations
                </a>
                <a href="../public/menusAdmin.php" class="flex items-center px-6 py-3 bg-zinc-700 text-white">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Menus
                </a>
                <a href="../public/platesAdmin.php" class="flex items-center px-6 py-3 text-gray-600 hover:bg-zinc-700 hover:text-white :transition-all duration-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Plates
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Content -->
            <div class="p-6">
                <!-- Menu Management -->
                <div class="bg-white shadow-xl mb-6">
                    <div class="p-6 border-b">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold">Menus</h2>
                            <!-- <button class="bg-white text-black hover:text-white px-4 py-2 hover:bg-zinc-700 hover:transition-all duration-500 ">
                                Add Menu
                            </button> -->
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="hover:bg-zinc-100 hover:transition-all duration-500">
                                    <td class="px-6 py-4 whitespace-nowrap">Menu Dégustation</td>
                                    <td class="px-6 py-4 whitespace-nowrap">5 temps</td>
                                    <td class="px-6 py-4 whitespace-nowrap">135 CHF</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 hover:bg-green-800 hover:text-green-100 hover:transition-all duration-500">
                                            Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button class="text-blue-600 p-2 hover:text-white hover:bg-indigo-600 hover:transition-all duration-500 mr-2">Edit</button>
                                        <button class="text-red-600 p-2 hover:text-white hover:bg-red-600 hover:transition-all duration-500">Delete</button>
                                    </td>
                                </tr>
                                <!-- More menu items... -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add/Edit Menu Form -->
                <div class="bg-white shadow-xl">
                    <div class="p-6 border-b">
                        <h2 class="text-xl font-semibold">Add New Menu</h2>
                    </div>
                    <div class="p-6">
                        <form class="space-y-6" method="POST" action="../public/bin/addMenu.php">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Menu Name</label>
                                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <!-- <div>
                                <label class="block text-sm font-medium text-gray-700">Type</label>
                                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option>5 temps</option>
                                    <option>6 temps</option>
                                    <option>Special</option>
                                </select>
                            </div> -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Price (CHF)</label>
                                <input type="number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                            </div>
                            <div class="flex justify-end space-x-3">
                                <button type="button" class="px-4 py-2 border bg-zinc-700 text-white hover:bg-gray-50 hover:text-black hover:transition-all duration-500">
                                    Cancel
                                </button>
                                <button type="submit" class="px-4 py-2 bg-white text-black hover:text-white hover:bg-zinc-700 hover:transition-all duration-500 ">
                                    Save Menu
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

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

<script>
</script>
</body>
</html>