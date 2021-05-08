
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Prestasi
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-green-700 hover:bg-white-700:text-black text-white  font-bold py-2 px-5  rounded my-3">Tambah Prestasi</button>
            @if($isModal)
                @include('livewire.prestasi.create')
            @endif

            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Peringkat</th>
                        <th class="px-4 py-2">Level</th>
                        <th class="px-4 py-2">Penyelenggara Prestasi</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-20">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($prestasis as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->peringkat }}</td>
                            <td class="border px-4 py-2">{{ $row->level }}</td>
                            <td class="border px-4 py-2">{{ $row->penyelenggara_prestasi }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/prestasi/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}"></td>
                            <td class="border px-4 py-2">{{ $row->semester}}</td>
                            <td class="border px-4 py-2">
                                <div class="vx-row mb-6">
                                <div class="vx-col sm:w-1/2 w-full">
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Edit</button>
                                </div>
                                <div class="vx-col sm:w-1/2 w-full">
                                <button wire:click="delete({{ $row->id }})" class="mt-6 bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="7">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
