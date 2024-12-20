<?php 
    require "/xampp/htdocs/LA-MICHELINE/public/bin/addPlate.php";
    require "/xampp/htdocs/LA-MICHELINE/public/bin/connect.php";
?>
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
                <a href="../public/menusAdmin.php" class="flex items-center px-6 py-3 text-gray-600 hover:bg-zinc-700 hover:text-white :transition-all duration-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Menus
                </a>
                <a href="../public/platesAdmin.php" class="flex items-center px-6 py-3 bg-zinc-700 text-white">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Plates
                </a>
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="w-full flex justify-center">
            <!-- Content -->
            <div class="p-6 drop-shadow-xl w-[80%]">
                <!-- Admin View -->
                <div id="adminView" class="w-[250px] md:w-full max-w-7xl ">
                    <h2 class="text-2xl font-semibold mb-6">Plate Management</h2>
                    <!-- Plates Table -->
                    <div class="bg-white -lg shadow overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php 
                                    $data = "SELECT * FROM plats";
                                    $result = $connect->query($data);

                                    if (!$result) {
                                        echo "Invalid query: " . $connect->error;
                                    }

                                    foreach ($result as $value) {
                                ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= $value['nom_plat'] ?></td>
                                    <td class="px-6 py-4"><?php 
                                        if (strlen($value['description']) > 5) {
                                            echo substr($value['description'], 0, 5) . "..."; 
                                        } else {
                                            echo $value['description'];
                                        }
                                        ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?= $value['type'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="../public/bin/modifyplate.php?plat_id=<?= $value['plat_id']?>" class="text-indigo-600 p-2 hover:text-white hover:bg-indigo-600 hover:transition-all duration-500 mr-2">Edit</a>
                                        <a href="../public/bin/deletePlate.php?plat_id=<?= $value['plat_id']?>" class="text-red-600 p-2 hover:text-white hover:bg-red-600 hover:transition-all duration-500">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>


                    <!-- Add New Plate Form -->
                    <div class="bg-white -lg shadow mt-6">
                        <div class="p-6 border-b">
                            <h3 class="text-xl font-semibold">Add New Plate</h3>
                        </div>
                            <?php 
                                if (!empty($errorMessage)) {
                                    echo "
                                        <div class=\"bg-red-500 flex items-center justify-center border-2 border-red-300 rounded-lg p-1\">
                                        <strong>$errorMessage</strong>
                                        </div>
                                    ";
                                    $menu_name = $price = $description = "";
                                } elseif (!empty($succesMessage)) {
                                    echo "
                                    <div class=\"bg-green-500 mb-4 flex items-center justify-center border-2 border-green-300 rounded-lg p-1\">
                                        <strong>$succesMessage</strong>
                                    </div>
                                    ";
                                    $menu_name = $price = $description = "";
                                }
                            ?>
                        <div class="p-6">
                            <form class="space-y-4" method="POST" action="../public/platesAdmin.php">
                            <input type="hidden" name="plat_id" value="<?= $menu_id ?>">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Plate Name</label>
                                    <input type="text" name="plateName" value="<?php $plate_name ?>" class="mt-1 block w-full -md border-gray-300 shadow-sm focus:border-zinc-500 focus:ring-zinc-500">
                                </div>
                                <div>
                                <label class="block text-sm font-medium text-gray-700">Category</label>
                                    <input type="text" name="plateCategory" value="<?php $plate_categorie ?>" class="mt-1 block w-full -md border-gray-300 shadow-sm focus:border-zinc-500 focus:ring-zinc-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Menu</label>
                                    <select name="plateMenu" class="mt-1 block w-full -md border-gray-300 shadow-sm focus:border-zinc-500 focus:ring-zinc-500">
                                        <?php 
                                            $result = $connect->query("SELECT menu_id, menu_nom FROM menu");
                                            foreach ($result as $value) {
                                                echo "<option value='" . $value['menu_id'] . "'>" . $value['menu_nom'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea rows="3" name="plateDescription" value="<?php $plate_description ?>" class="mt-1 block w-full -md border-gray-300 shadow-sm focus:border-zinc-500 focus:ring-zinc-500"></textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="px-4 py-2 text-zinc-900 hover:bg-zinc-700 hover:text-white :transition-all duration-700">
                                        Add Plate
                                    </button>
                                </div>
                            </form>
                        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const toggleViewButton = document.getElementById('toggleView');
            const adminView = document.getElementById('adminView');
            const userView = document.getElementById('userView');

            toggleViewButton.addEventListener('click', function() {
                if (adminView.classList.contains('hidden')) {
                    adminView.classList.remove('hidden');
                    userView.classList.add('hidden');
                    toggleViewButton.textContent = 'Switch to User View';
                } else {
                    adminView.classList.add('hidden');
                    userView.classList.remove('hidden');
                    toggleViewButton.textContent = 'Switch to Admin View';
                }
            });
        });
    </script>
</body>
</html>