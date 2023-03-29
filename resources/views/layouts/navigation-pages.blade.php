<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="w-9"></div>

                <!-- Navigation Links -->
                <div class="space-x-8 -my-px ml-10 flex">
                    <x-nav-link :href="route('edit-home.index')" :active="request()->routeIs('edit-home.index')">
                        Home
                    </x-nav-link>
                    <x-nav-link :href="route('edit-gallery.index')" :active="request()->routeIs('edit-gallery.index')">
                        Gallerij
                    </x-nav-link>
                    <x-nav-link :href="route('edit-about.index')" :active="request()->routeIs('edit-about.index')">
                        Over Ons
                    </x-nav-link>
                    <x-nav-link :href="route('edit-contact.index')" :active="request()->routeIs('edit-contact.index')">
                        Contact
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
