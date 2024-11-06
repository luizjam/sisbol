<nav x-data="{ open:false }" class="bg-whte dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 py-2 sm:px-6">
        <div class="flex justify-between h-10">
            <div class="flex">
               <!-- Navigation Links -->
               <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('editais')" :active="request()->routeIs('dashboard')">
                        {{ __('Editais') }}
                    </x-nav-link>
                    <x-nav-link :href="route('instituicoes')" :active="request()->routeIs('dashboard')">
                        {{ __('Instituições') }}
                    </x-nav-link>
                    <x-nav-link :href="route('cursos')" :active="request()->routeIs('dashboard')">
                        {{ __('Cursos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('projetos')" :active="request()->routeIs('dashboard')">
                        {{ __('Projetos') }}
                    </x-nav-link>
            </div>
            </div>
        </div>
    </div>
</nav>