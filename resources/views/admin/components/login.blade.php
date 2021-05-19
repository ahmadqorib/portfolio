{{-- <div> --}}
    <form class="flex flex-col justify-center items-center w-1/2" wire:submit.prevent="login">
        <img src="{{ asset('assets/images/blue-avatar.svg') }}" class="w-32" />
        <h2
          class="my-8 font-display font-bold text-3xl text-gray-700 text-center"
        >
          Selamat Datang !!
        </h2>
        <div class="w-full mb-2">
            <div class="flex items-center">
                <i class="ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user"></i>
                <input type="text" placeholder="Username" wire:model="username"
                    class="-mx-6 px-8 w-full rounded px-3 py-2 text-gray-700 focus:outline-none {{ $errors->has('username') ? 'border-red-500 border-2 border-opacity-50':'border' }}" />
            </div>
            <div>
                @error('username') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <div class="flex items-center">
                <i class="ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock"></i>
                <input type="text" placeholder="Password" wire:model="password"
                    class="-mx-6 px-8 w-full rounded px-3 py-2 text-gray-700 focus:outline-none {{ $errors->has('password') ? 'border-red-500 border-2 border-opacity-50':'border' }}" />
            </div>
            <div>
                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
        <button class="py-3 px-20 bg-indigo-600 rounded-full text-white font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">Login</button>
    </form>

{{-- </div> --}}