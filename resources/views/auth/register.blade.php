<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('logo.png') }}" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            {{-- <x-jet-input id="role" class="block mt-1 w-full" type="hidden" name="role" :value="mahasiswa" required autofocus autocomplete="role" /> --}}
            <div>
                <x-jet-label for="name" value="{{ __('Nama') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="nim" value="{{ __('NIM') }}" />
                <x-jet-input id="nim" class="block mt-1 w-full" type="number" name="nim" :value="old('nim')" required autofocus autocomplete="nim" placeholder="123456789"/>
            </div>

            <div>
                <x-jet-label for="angkatan" value="{{ __('Angkatan') }}" />
                <x-jet-input id="angkatan" class="block mt-1 w-full" type="text" name="angkatan" :value="old('angkatan')" required autofocus autocomplete="angkatan" placeholder="2020/2021" />
            </div>
            <div>
                <x-jet-label for="prodi" value="{{ __('Program Studi') }}" />
                <x-jet-input id="prodi" class="block mt-1 w-full" type="text" name="prodi" :value="old('prodi')" required autofocus autocomplete="prodi" placeholder="Hukum Ekonomi Syariah" />
            </div>
            <div>
                <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                <x-jet-input id="alamat" class="block mt-1 w-full" type="textarea" name="alamat " :value="old('alamat')" required autofocus autocomplete="alamat" placeholder="Jl. Raya Bojongsari"/>
            </div>

            <div>
                <x-jet-label for="hp" value="{{ __('No. HP') }}" />
                <x-jet-input id="hp" class="block mt-1 w-full" type="number" name="hp" :value="old('hp')" required autofocus autocomplete="hp" placeholder="0896xxxxxx" />
            </div>
            <div>
                <x-jet-label for="beasiswa" value="{{ __('Beasiswa') }}" />
                <x-jet-input id="beasiswa" class="block mt-1 w-full" type="text" name="beasiswa" :value="old('beasiswa')" required autofocus autocomplete="name" placeholder="Beasiswa 100%" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
