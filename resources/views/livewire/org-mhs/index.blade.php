
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Organisasi Mahasiswa
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
            <button wire:click="create()" class="bg-green-700 hover:bg-white-700:text-black text-white  font-bold py-2 px-5  rounded my-3">Tambah Organisasi Mahasiswa</button>
            @if($isModal)
                @include('livewire.org-mhs.create')
            @endif

            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">Masa Jabatan</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-20">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($org_mhss as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->jabatan }}</td>
                            <td class="border px-4 py-2">{{ $row->masa_jabatan }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/org_mhs/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}"></td>
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
                            <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
