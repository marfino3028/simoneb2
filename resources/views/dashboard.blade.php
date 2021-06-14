@if (Auth::user()->role == 'mahasiswa')
@livewire('navigation-dropdown')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                
                <h1 class="text-green-700 text-lg">Hai, {{Auth::user()->name}} Sang Juara Selamat Datang Di Web Sistem Monitoring Laporan Beasiswa</h1>
            </div>
        </div>
    </div>
</x-app-layout>
@else

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">                
                <h1 class="text-green-700 text-lg">Hai Admin {{Auth::user()->name}} , Selamat Datang Di Web Sistem Monitoring Laporan Beasiswa</h1>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
                <br>
                <table class="table-fixed w-full">

                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-25">Nama</th>
                            {{-- <th class="px-4 py-2 w-25">Email</th> --}}
                            <th class="px-4 py-2 w-25">Foto</th>
                            <th class="px-4 py-2 w-25">NIM</th>
                            <th class="px-4 py-2 w-25">Angkatan</th>
                            <th class="px-4 py-2 w-25">Alamat</th>
                            <th class="px-4 py-2 w-25">HP</th>
                            <th class="px-4 py-2 w-25">Beasiswa</th>
                            <th class="px-4 py-2 w-25">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $row)
                            <tr>
                                <td class="border px-4 py-2">{{ $row->name }}</td>
                                {{-- <td class="border px-4 py-2">{{ $row->email }}</td> --}}
                                <td class="border px-4 py-2"><img  src="{{ $row->profile_photo_url }} " id="myImg" alt="{{ $row->name }}"></td>
                                <td class="border px-4 py-2">{{ $row->nim}}</td>
                                <td class="border px-4 py-2">{{ $row->angkatan}}</td>
                                <td class="border px-4 py-2">{{ $row->alamat}}</td>
                                <td class="border px-4 py-2">{{ $row->hp}}</td>
                                <td class="border px-4 py-2">{{ $row->beasiswa}}</td>
                                <td class="border px-4 py-2">
                                    <div class="vx-row mb-6">
                                    <div class="vx-col sm:w-1/2 w-full">
                                    <button wire:click="view({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Lihat</button>
                                    </div>
                                    <div class="vx-col sm:w-1/2 w-full">
                                    <button wire:click="delete({{ $row->id }})" class="mt-6 bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
@endif
