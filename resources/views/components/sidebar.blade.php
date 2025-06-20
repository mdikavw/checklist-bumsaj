<div class="w-64 px-6 py-12 bg-[#1975c5] h-full text-white">
    <div class="flex justify-center">
        <img class="w-16 h-auto" src="{{ asset('images/logo_kementrian.png') }}" alt="Kementrian Logo">
    </div>
    <ul class="flex flex-col h-full gap-6 p-8 font-medium select-none pe-0 text-md">
        @if (Auth::user()->role == 'USER')
            <a class="flex items-center w-full gap-4" href="{{ route('beranda') }}">
                <div class="flex items-center justify-center w-6 h-6">
                    <span class="fa-solid fa-home"></span>
                </div>
                <div class="w-full">
                    <span>Beranda</span>
                </div>
            </a>
            <li class="flex flex-col gap-4">
                <div class="flex items-center gap-4 cursor-pointer" id="checklist-label">
                    <div class="flex items-center justify-center w-6 h-6">
                        <span class="fa-regular fa-circle-check"></span>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <span>Checklist</span>
                        <span class="fa-solid fa-caret-down"></span>
                    </div>
                </div>
                <ul class="hidden w-full font-light" id="checklist-dropdown">
                    <li>
                        <a class="block px-4 py-2 text-md"
                            href="{{ route('checklist.show', ['category_identifier' => 'fasilitas-gedung-terminal']) }}">
                            Fasilitas Gedung Terminal
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 text-md"
                            href="{{ route('checklist.show', ['category_identifier' => 'kebersihan-gedung-terminal']) }}">
                            Kebersihan Gedung Terminal
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 text-md"
                            href="{{ route('checklist.show', ['category_identifier' => 'curbside-area']) }}">
                            Kondisi Area Curbside
                        </a>
                    </li>
                </ul>
            </li>
            <li class="flex items-center gap-4 cursor-pointer">
                <a class="flex items-center w-full gap-4" href="{{ route('rekapitulasi') }}">
                    <div class="flex items-center justify-center w-6 h-6">
                        <span class="fa-solid fa-clipboard"></span>
                    </div>
                    <div class="w-full">
                        <span>Rekapitulasi</span>
                    </div>
                </a>
            </li>
        @else
            <a class="flex items-center w-full gap-4" href="{{ route('beranda') }}">
                <div class="flex items-center justify-center w-6 h-6">
                    <span class="fa-solid fa-home"></span>
                </div>
                <div class="w-full">
                    <span>Beranda</span>
                </div>
            </a>
            <li class="flex flex-col gap-4">
                <div class="flex items-center gap-4 cursor-pointer" id="checklist-label">
                    <div class="flex items-center justify-center w-6 h-6">
                        <span class="fa-regular fa-circle-check"></span>
                    </div>
                    <div class="flex items-center justify-between w-full">
                        <span>Validasi Checklist</span>
                        <span class="fa-solid fa-caret-down"></span>
                    </div>
                </div>
                <ul class="hidden w-full font-light" id="checklist-dropdown">
                    <li>
                        <a class="block px-4 py-2 text-md" href="">
                            Fasilitas Gedung Terminal
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 text-md" href="">
                            Kebersihan Gedung Terminal
                        </a>
                    </li>
                    <li>
                        <a class="block px-4 py-2 text-md" href="">
                            Kondisi Area Curbside
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <!-- Logout Form -->
        <li class="flex items-center gap-4 mt-auto mb-8">
            <form class="flex items-center w-full gap-4" action="{{ route('logout') }}" method="POST">
                @csrf <!-- CSRF Protection -->
                <div class="flex items-center justify-center w-6 h-6">
                    <span class="fa-solid fa-right-from-bracket"></span>
                </div>
                <button class="w-full text-left" type="submit">
                    <span>Keluar</span>
                </button>
            </form>
        </li>
    </ul>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const checklistDiv = document.getElementById('checklist-label');

        if (checklistDiv) {
            checklistDiv.addEventListener('click', function() {
                const dropdown = document.getElementById('checklist-dropdown');
                dropdown.classList.toggle('hidden');
            });
        }
    });
</script>
