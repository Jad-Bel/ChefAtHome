
<?php 
// include "../public/bin/connect.php";
// include "../public/bin/signup.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://horizon-ui.com/shadcn-nextjs-boilerplate/_next/static/css/32144b924e2aa5af.css" />
        
    <title>Authentification</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-black text-white ">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-black/90 px-4 py-4">
        <div id="menu" class="max-w-7xl mx-auto flex justify-between items-center">
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 right-0 bg-black/90 py-4">
            <div class="close-header-btn px-6 w-full text-right cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </div>
            <div class="flex flex-col items-center space-y-4 text-sm text-left px-10 pt-4">
                <a href="#" class="hover:text-gray-300 transition">Accueil</a>
                <a href="#" class="hover:text-gray-300 transition">Menu</a>
                <a href="#" class="hover:text-gray-300 transition">Réservations</a>
                <a href="#" class="hover:text-gray-300 transition">Bons cadeaux</a>
                <a href="#" class="hover:text-gray-300 transition">Le Chef</a>
                <a href="#" class="hover:text-gray-300 transition">Presse</a>
            </div>
        </div>
    </nav>
    <!-- sign-in-up-forms -->
    <div id="sign-up-form" class="flex flex-col h-screen justify-center items-center bg-zinc-500 min-h-[100vh] pb-5">
           
            <div class="w-full flex justify-end">
                <button id="SiSwitchBtn" class="text-white text-right w-32 p-2">Sign In</button>
            </div>
        
            <div class="mx-auto flex w-full flex-col justify-center px-5 pt-0 md:h-[unset] md:max-w-[50%] lg:h-[100vh] min-h-[100vh] lg:max-w-[50%] lg:px-6">
            <div class="my-auto mb-auto mt-8 flex flex-col md:mt-[70px] w-[500px] mx-auto md:max-w-[450px] lg:mt-[130px] lg:max-w-[450px]">
                <p class="text-[32px] font-bold text-white text-center text-3xl">Sign Up</p>
                <div class="mt-8">
                </div>
                <div class="relative my-4">
                    <div class="relative flex items-center py-1">
                        <div class="grow border-t border-zinc-800"></div>
                        <div class="grow border-t border-zinc-800"></div>
                    </div>
                </div>
                <div>
                    <form novalidate="" action="../public/bin/signup.php" class="mb-4">
                        <div class="grid gap-4">
                            <div class="grid gap-2">
                                <label class="text-black" for="email">Email</label><input
                                    class="email mr-2.5 mb-2 h-full min-h-[44px] w-full border bg-zinc-950 text-white border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black"
                                    placeholder="name@example.com" type="email" autocapitalize="none"
                                    autocomplete="email" autocorrect="off" name="email" /><label
                                    class="text-zinc-950 mt-2 dark:text-white" for="password">Password</label><input
                                    placeholder="Password" type="password" autocomplete="current-password"
                                    class="password mr-2.5 mb-2 h-full min-h-[44px] w-full border bg-zinc-950 text-black border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black"
                                    name="password" />
                            </div>
                            <form class="pb-2">
                                <input type="hidden" name="provider" value="google" /><button class="flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-zinc-800 bg-none hover:bg-accent hover:text-accent-foreground h-10 px-4 w-full text-white py-6 hover:bg-white hover:text-black duration-700">
                                    <span class="mr-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                                            class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
        c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
        c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
        C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
        c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
        c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                        </svg></span>
                                    <span>Google</span>
                                </button>
                            </form>
                            <button id="signUpSubmit" class="flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-zinc-800 bg-none hover:bg-accent hover:text-accent-foreground h-10 px-4 w-full text-white py-6 hover:bg-white hover:text-black duration-700">
                                Sign up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="sign-in-form" class="px-10 flex flex-col h-screen justify-center items-center bg-zinc-500 min-h-[100vh] pb-5 hidden">
            <div class="w-full flex justify-end">
                <button id="SuSwitchBtn" class="text-white text-right w-32 p-2">Sign Up</button>
            </div>
        <div class="mx-auto flex w-full flex-col justify-center px-5 pt-0 md:h-[unset] md:max-w-[50%] lg:h-[100vh] min-h-[100vh] lg:max-w-[50%] lg:px-6">
            <div class="my-auto mb-auto mt-8 flex flex-col md:mt-[70px] w-[500px] max-w-[650px] mx-auto md:max-w-[450px] lg:mt-[130px] lg:max-w-[450px]">
                <p class="text-[32px] font-bold text-white text-center text-3xl pb-5">Sign In</p>
                <div class="mt-8">
                </div>
                <div class="relative my-4">
                    <div class="relative flex items-center py-1">
                        <div class="grow border-t border-zinc-800"></div>
                        <div class="grow border-t border-zinc-800"></div>
                    </div>
                </div>
                <div>
                    <form novalidate="" action="../public/bin/signin.php" class="mb-4">
                        <div class="grid gap-8">
                            <div class="grid gap-2">
                                <div class="flex flex-col gap-4">
                                    <div class="flex gap-2 h-40">
                                        <label class="text-black" for="firstName">
                                            <input id="firstName" class="mr-2.5  h-full min-h-[44px] w-full border bg-zinc-950 text-white border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black" placeholder="First-name" type="Firstname" autocapitalize="none" autocomplete="" autocorrect="off" name="firstName" />
                                        </label>
                                        
                                        <label class="text-black" for="LastName">
                                            <input id="lastName" class="mr-2.5 h-full min-h-[44px] w-full border bg-zinc-950 text-white border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black" placeholder="Last-name" type="LastName" autocapitalize="none" autocomplete="" autocorrect="off" name="LastName" />
                                        </label>
                                    </div>
                                    
                                    <label class="text-black" for="Adress">
                                        <input id="Adress" class="h-full min-h-[44px] w-full border bg-zinc-950 text-black border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black" placeholder="Last-name" type="LastName" autocapitalize="none" autocomplete="" autocorrect="off" name="LastName" />
                                    </label>
                                </div>


                                <label class="text-black" for="email"></label><input
                                    class="email mr-2.5 mb-2 h-full min-h-[44px] w-full border bg-zinc-950 text-white border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black"
                                    placeholder="name@example.com" type="email" autocapitalize="none"
                                    autocomplete="email" autocorrect="off" name="email" /><label
                                    class="password text-zinc-950 mt-2 dark:text-white" for="password"></label><input
                                    placeholder="Password" type="password" autocomplete="current-password"
                                    class="mr-2.5 mb-2 h-full min-h-[44px] w-full border bg-zinc-950 text-white border-zinc-800 px-4 py-3 text-sm font-medium placeholder:text-black focus:outline-0 dark:border-zinc-800 dark:bg-transparent dark:text-white dark:placeholder:text-black"
                                    name="password" />
                            </div>
                            <form class="pb-2">
                                <input type="hidden" name="provider" value="google" /><button class="flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-zinc-800 bg-none hover:bg-accent hover:text-accent-foreground h-10 px-4 w-full text-white py-6 hover:bg-white hover:text-black duration-700"
                                    >
                                    <span class="mr-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            version="1.1" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                                            class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
        c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
        c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
        C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
        c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
        c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                        </svg></span>
                                    <span>Google</span>
                                </button>
                            </form>
                            <button id="signInSubmit" class="flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-zinc-800 bg-none hover:bg-accent hover:text-accent-foreground h-10 px-4 w-full text-white py-6 hover:bg-white hover:text-black duration-700" >
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- <script src="../public/JS/authentification.js"></script> -->
<script src="../public/JS/header.js"></script>
</body>

</html>