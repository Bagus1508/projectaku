<!-- Navbar goes here -->
<nav class="bg-white shadow-md mx-auto relative">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex ">
                <div>
                    <!-- Website Logo -->
                    <a href="/home" class="flex items-center py-4 px-2">
                        <img src="https://i.postimg.cc/QM3SxMKd/logo.png" alt="Logo" class="w-40">
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1 ml-4">
                    @auth
                    <a href="/dashboard" class="py-2 px-4 bg-blue-500 text-white font-semibold hover:bg-blue-600 transition duration-300 rounded-md">Dashboard</a>
                    @endauth
                    <a href="/home" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-400 focus:text-black transition duration-300">Beranda</a>
                    <a href="/tentangPKKMB" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-400 transition duration-300 ">Tentang</a>
                    <a href="/pedomanPKKMB" class="py-4 px-2 text-gray-500 font-semibold hover:text-gray-400 transition duration-300 ">Pedoman PKKMB</a>
                </div>
            </div>
            <section class="block">
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button id="logout" name="logout" class="hidden md:flex bg-orange-500 text-white hover:bg-orange-600 px-4 py-2.5 rounded-md font-semibold my-6">
                    <a>Logout</a>
                </button>
            </form>
            @else
            <!-- Secondary Navbar items -->
            <div class="hidden md:flex items-center space-x-3 my-5">
                <a href="/login" class="py-2 px-4 font-medium text-white bg-orange-500 rounded hover:bg-orange-300 transition duration-300 ">Login</a>
            </div>
            @endauth
            </section>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                @auth
                <form action="/logout" method="POST">
                    @csrf
                <div class="mr-4 ">
                    <button><a href="/dashboard" class="block px-4 py-3 bg-blue-500 hover:bg-blue-600 transition duration-300 text-white font-semibold rounded-md">Dashboard</a></button>
                </div>
                </form>
                @endauth
                <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-orange-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li><a href="/home" class="block text-sm px-2 py-4 hover:bg-orange-300 transition duration-300">Beranda</a></li>
            <li><a href="/tentangPKKMB" class="block text-sm px-2 py-4 hover:bg-orange-300 transition duration-300 ">Tentang</a></li>
            <li><a href="/pedomanPKKMB" class="block text-sm px-2 py-4 hover:bg-orange-300 transition duration-300 ">Pedoman PKKMB</a></li>
            @auth
            <form action="/logout" method="POST">
            @csrf
                <li class="text-sm px-2 py-4 bg-orange-500 hover:bg-orange-300 text-white transition duration-300 font-semibold">
                    <button id="logout-m" name="logout-name" class="">
                        <a class="block ">Logout</a>
                    </button>
                </li>
            </form>
            @else
            <li><a href="/login" class="block text-sm px-2 py-4 bg-orange-500 hover:bg-orange-300 text-white transition duration-300 font-semibold">Login</a></li>
            @endauth
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>