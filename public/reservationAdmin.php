<?php 
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";
?>
<!DOCTYPE html>
<HTML lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
                <a href="" class="hover:text-gray-300 transition">Accueil</a>
                <a href="#" class="hover:text-gray-300 transition">Menu</a>
                <a href="#" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="#" class="hover:text-gray-300 transition">Presse</a>
            </div>
        </div>
    </nav>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r">
            <div class="p-6">
                <h1 class="text-xl font-semibold text-gray-800">Restaurant Admin</h1>
            </div>
            <nav class="mt-6">
                <a href="../public/reservationAdmin.php" class="flex items-center px-6 py-3 bg-zinc-700 text-white">
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
                <a href="../public/platesAdmin.php" class="flex items-center px-6 py-3  text-gray-600 hover:bg-zinc-700 hover:text-white :transition-all duration-500">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                    Plates
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-auto">
            <div class="p-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-semibold text-gray-800">Reservations</h2>
                </div>

                <!-- Pending Reservations Table -->
                <div class="bg-white  shadow-xl mb-8">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-800">Pending Reservations</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b border-gray-100">
                                <tr>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Client Name</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Menu</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                            <?php 
                                    $reserv_sql = "SELECT * FROM reservation";
                                    $reserv_result = $connect->query($reserv_sql);

                                    if (!$reserv_result) {
                                        echo "Invalid Query: " . $connect->error;
                                    }

                                    foreach ($reserv_result as $reservation) {
                                ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $reservation['user_name'] . " " . $reservation['user_last_name']?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                    <?php
                                        require "/laragon/www/LA-MICHELINE/public/bin/connect.php";
                                        
                                        $menu_sql = "SELECT menu_nom FROM menu WHERE `menu_id` = " . $reservation['menu_id'];
                                        $menu_result = $connect->query($menu_sql);
                                        $menu = $menu_result->fetch_assoc();
                                        echo $menu['menu_nom'];
                                    ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        <?php 
                                            if (strlen($reservation['address']) > 7) {
                                                echo substr($reservation['address'], 0, 7) . "..."; 
                                            } else {
                                                echo $value['address'];
                                            }
                                        ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $reservation['reservation_date'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        <?php 
                                            if ($reservation['status'] == -1) {
                                                echo "Denied";
                                            } elseif ($reservation['status'] == 1) {
                                                echo "Approved";
                                            } else {
                                                echo "Waiting for approving";
                                            }
                                    
                                        ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                        <a href="./bin/acceptRes.php?menu=id=<?php echo$reservation['reserv_id'] ?>" class="inline-flex items-center px-3 py-1.5 border border-green-400 text-sm font-medium text-black bg-white hover:bg-green-700 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                            Accept
                                        </a>
                                        <a href="./bin/declineRes.php?menu=id=<?php echo$reservation['reserv_id'] ?>" class="inline-flex items-center px-3 py-1.5 border border-red-400 text-sm font-medium  text-black bg-white hover:bg-red-700 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Decline
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <!-- More reservation rows -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Users Table -->
                <div class="bg-white  shadow-xl">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h3 class="text-lg font-semibold text-gray-800">Users Management</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full overflow-y-hidden">
                            <thead class="bg-gray-50 border-b border-gray-100">
                                <tr>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Adresse</th>
                                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                    <th class="text-right px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                            <?php 
                                    $users_sql = "SELECT * FROM users WHERE `role_id` = 2";
                                    $result = $connect->query($users_sql);

                                    if (!$result) {
                                        echo "Invalid query: " . $connect->error;
                                    }

                                    foreach ($result as $user) {
                                        $role_sql = "SELECT `role_name` FROM `role` WHERE `role_id` = " . $user['role_id'];
                                        $role_result = $connect->query($role_sql);

                                            if (!$role_result) {
                                                echo "Invalid query: " . $connect->error;
                                            }

                                            $role_row = $role_result->fetch_assoc();
                                ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $user['user_name'] . " " . $user['user_last_name'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $user['user_email'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $role_row['role_name'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button disabled class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium  text-gray-400 bg-gray-100 cursor-not-allowed">
                                            Delete User
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>

                                <?php 
                                    $users_sql = "SELECT * FROM users WHERE `role_id` = 1";
                                    $result = $connect->query($users_sql);

                                    if (!$result) {
                                        echo "Invalid query: " . $connect->error;
                                    }

                                    foreach ($result as $user) {
                                        $role_sql = "SELECT `role_name` FROM `role` WHERE `role_id` = " . $user['role_id'];
                                        $role_result = $connect->query($role_sql);

                                            if (!$role_result) {
                                                echo "Invalid query: " . $connect->error;
                                            }

                                            $role_row = $role_result->fetch_assoc();
                                ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $user['user_name'] . " " . $user['user_last_name'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $user['user_email'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $user['user_address'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600"><?= $role_row['role_name'] ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="../public/bin/deleteUser.php?user_id=<?= $user['user_id'] ?>" class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium  text-black bg-white hover:bg-red-600 hover:text-white hover:transition-all duration-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Delete User
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                <!-- More user rows -->
                            </tbody>
                        </table>
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
</php>