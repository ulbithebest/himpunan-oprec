<button id="sidebarToggle" class="fixed top-1 left-4 z-50 md:hidden text-white bg-gray-900 p-2 rounded">
    <i class="ri-menu-line"></i>
</button>
<div
    id="sidebar"
    class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform transform -translate-x-full md:translate-x-0">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="images/logo-himatif.png" alt="" class="w-8 h-8 rounded object-cover">
        <span class="text-lg font-bold text-white ml-3">OPREC HIMA</span>
    </a>
    <ul class="mt-4">
        <li class="mb-1 group active">
            <a href="../dashboard"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="ri-home-2-line mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>

        @if (Auth::check() && Auth::user()->role == 1)
        <li class="mb-1 group">
            <a href="{{ route('admin.usersIndex') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="fa-regular fa-user mr-3 text-lg"></i>
                <span class="text-sm">User</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ route('admin.listPendaftaran') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="fa-regular fa-folder mr-3 text-lg"></i>
                <span class="text-sm">Docs Pendaftar</span>
            </a>
        </li>
        @endif
        @if (Auth::check() && Auth::user()->role == 2)
        <li class="mb-1">
            <a href="{{ route('form_pendaftaran.index') }}"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="fa-regular fa-folder mr-3 text-lg"></i>
                <span class="text-sm">Form Pendaftaran</span>
            </a>
        </li>
        {{-- <li class="mb-1">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                <i class="fa-regular fa-newspaper mr-3 text-lg"></i>
                <span class="text-sm">Pengumuman</span>
            </a>
        </li> --}}
        @endif
        <li class="mb-1 group">
            <a href="#"
                class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="ri-settings-2-line mr-3 text-lg"></i>
                <span class="text-sm">Setting</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!-- Overlay -->
<div id="sidebarOverlay"
    class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 hidden transition-opacity opacity-0">
</div>
