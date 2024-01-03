<div class="bg-white shadow-[5px_5px_10px_4px_rgba(161, 172, 184, 0.15)] w-850px ml-325px -mt-1162px h-40px">
    <div class="p-3">
        {{ now()->format('l j F Y ') }}
    </div>
    <div class="grid grid-cols-3 w-150px -mt-40px ml-700px ">
     <img src="/assets/img/Vector (3).svg" alt="" class=" w-20px h-20px">
     <img src="/assets/img/Vector (2).svg" alt="" class=" h-21px w-24px">
     <div class="hidden sm:flex sm:items-center ">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button>
     <img src="/assets/img/1.png.png" alt="" class=" h-30px w-30px">  
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>

    </div>
</div>