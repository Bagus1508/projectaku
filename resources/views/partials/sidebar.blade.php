<!-- Navbar goes here -->
<nav class="bg-white shadow-md mx-auto">
    <section class="">
        <span
        class="absolute text-white text-4xl my-6 left-4 cursor-pointer"
        onclick="openSidebar()"
        >
        <i class="bi bi-filter-left px-2 bg-orange-600 rounded-md"></i>
        </span>
        <div
        class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-orange-500"
        >
        <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <p class="inline-block">Selamat Datang, {{ auth()->user()->name }}</p>
            <i
            class="bi bi-x cursor-pointer ml-10"
            onclick="openSidebar()"
            ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div
        class=""
        >
            <button class="">
            <a href="../home" class="mx-4 text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                <i class="bi bi-house-door-fill -mx-2">
                Home
                </i>
            </a>
            </button>
        </div>
        <div
        class=""
        >
            <button class="">
            <a href="../twibbon" class="mx-4 text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                <i class="bi bi-images -mx-2">
                Twibbon
                </i>
            </a>
            </button>
        </div>
        <div
        class=""
        >
            <button class="">
            <a href="../zoomlink" class="mx-4 text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                <i class="bi bi-link-45deg -mx-2">
                Link Zoom
                </i>
            </a>
            </button>
        </div>
        <div
        class=""
        >
            <button class="">
            <a href="../presensi" class="mx-4 text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                <i class="bi bi-arrow-right-square -mx-2">
                Presensi
                </i>
            </a>
            </button>
        </div>
        <div
        class=""
        >
            <button class="">
            <a href="../tugas" class="mx-4 text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                <i class="bi bi-journals -mx-2">
                Tugas
                </i>
            </a>
            </button>
        </div>
        <div
        class=""
        >
            <button class="">
            <a href="../profile" class="mx-4 text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                <i class="bi bi-person-circle -ml-2">
                My Profile
                </i>
            </a>
            </button>
        </div>
        @can('admin')
        <h6 class="flex justify-center mx-auto px-4 text-gray-800 text-3xl font-bold bg-white rounded-md">
            <span>Administrator</span>
        </h6>
        <div
        class=""
        >
            <button class="">
                    <a href="/dashboard/register" class="mx-4 {{ Request::is('register*') ? 'active' :'' }} text-[15px] ml-4  font-bold p-2.5 w-64 mt-3 flex items-center rounded-md duration-300 cursor-pointer hover:bg-orange-600 text-white">
                        <i class="bi bi-person-circle -mx-2">
                        Registrasi Peserta
                        </i>
                    </a>
            </button>
        </div>
        @endcan

        @auth
        <form action="/logout" method="POST">
            @csrf
        <a>
        <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-blue-600 hover:bg-blue-700 text-white"
        >
        <button id="logout" name="logout">
        <i class="bi bi-box-arrow-in-right">  
                <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        </i>
        </button>
        </div>
        </a>
        </form>
        @endauth
        </div>

        <script type="text/javascript">
        function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown();

        function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
        }
        </script>
</section>
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex mx-auto items-center justify-center">
                <div>
                    <!-- Website Logo -->
                    <a href="/home" class="object-right py-4 px-2">
                        <img src="https://i.postimg.cc/QM3SxMKd/logo.png" alt="Logo" class="w-40">
                    </a>
                </div>
            </section>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>

