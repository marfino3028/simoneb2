
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Mahasiswa {{$user->name}}        
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
            <button wire:click="create()" class="bg-green-700 hover:bg-white-700:text-black text-white  font-bold py-2 px-5  rounded my-3">Tambah Pesan</button>
            @if($isModal)
                @include('messages')
            @endif
            
            {{-- message --}}
            <table class="table-fixed w-full">
            
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Messages</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messagesz as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->messages }}</td>
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            <td class="border px-4 py-2">
                                <div class="vx-row mb-6">
                                <div class="vx-col sm:w-1/2 w-full">
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Edit</button>
                                </div>
                                <div class="vx-col sm:w-1/2 w-full">
                                <button wire:click="deleteMessages({{ $row->id }})" class="mt-6 bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Hapus</button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="3">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- message --}}
            <br>
            
            {{-- Beasiswa --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Kekhasan Beasiswa
            </h3>
            <br>
            <table class="table-fixed w-full">
            
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Deskripsi</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php dd($beasiswa); @endphp --}}
                    @forelse($beasiswa as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->deskripsi }}</td>
                            
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/beasiswa/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}">
                            
                            </td>
                            
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
                <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
            </table>
            {{-- beasiswa --}}
            <br><br><br>
            {{-- forum --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Kepesertaan Forum Akademis
            </h3>
            <table class="table-fixed w-full">
            
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Penyelenggara</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php dd($forums); @endphp --}}
                    @forelse($forums as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->tgl }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/forum/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}">
                                <td class="border px-4 py-2">{{ $row->penyelenggara }}</td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- forum --}}
            <br><br><br>
            {{-- karya --}}
            <table class="table-fixed w-full">
                <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                    Publikasi Karya Tulis
                </h3>
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Nama Media</th>
                        <th class="px-4 py-2">Link</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($karya as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->judul }}</td>

                            <td class="border px-4 py-2">{{ $row->tgl }}</td>
                            <td class="border px-4 py-2">{{ $row->media }}</td>
                            <td class="border px-4 py-2"><a href="{{ $row->link }}" target=_blank>{{ $row->link }}</td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
            {{-- karya --}}
            <br><br><br>
            {{-- mentoring --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Keaktifan Mentoring
            </h3>
            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jumlah Pertemuan</th>
                        <th class="px-4 py-2">Jumlah Kehadiran</th>
                        <th class="px-4 py-2">Persen</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mentoring as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->jml_pertemuan }}</td>
                            <td class="border px-4 py-2">{{ $row->jml_kehadiran }}</td>
                            <td class="border px-4 py-2">{{ $row->persen }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/mentoring/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}"></td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
            {{-- mentoring --}}
            <br><br><br>
            {{-- org_mhs --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Organisasi Mahasiswa/ Kepanitiaan
            </h3>
            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jabatan</th>
                        <th class="px-4 py-2">Masa Jabatan</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($org_mhs as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->jabatan }}</td>
                            <td class="border px-4 py-2">{{ $row->masa_jabatan }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/org_mhs/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}"></td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
            {{-- org_mhs --}}
            <br><br><br>
            {{-- prestasi --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Prestasi Kompetisi
                        </h3>
            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Peringkat</th>
                        <th class="px-4 py-2">Level</th>
                        <th class="px-4 py-2">Penyelenggara Prestasi</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($prestasi as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->peringkat }}</td>
                            <td class="border px-4 py-2">{{ $row->level }}</td>
                            <td class="border px-4 py-2">{{ $row->penyelenggara_prestasi }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/prestasi/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}"></td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
            {{-- prestasi --}}
            <br><br><br>
            {{-- sosial --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Sosial Kemasyarakatan
            </h3>
            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Penyelenggara Sosial</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sosial as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->nama }}</td>
                            <td class="border px-4 py-2">{{ $row->tgl }}</td>
                            <td class="border px-4 py-2">{{ $row->penyelenggara_sosial }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/sosial/'.$row->foto) }}" id="myImg" alt="{{ $row->nama }}"></td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
            {{-- sosial --}}
            <br><br><br>
            {{-- tahsin --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelulusan tahsin/ tahfiz
            </h3>
            <table class="table-fixed w-full">

                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Level</th>
                        <th class="px-4 py-2">No SK</th>
                        <th class="px-4 py-2">Nilai</th>
                        <th class="px-4 py-2">Foto</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-15">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tahsins as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->level }}</td>
                            <td class="border px-4 py-2">{{ $row->no_sk }}</td>
                            <td class="border px-4 py-2">{{ $row->nilai }}</td>
                            <td class="border px-4 py-2"><img  src="{{ asset('storage/tahsin/'.$row->foto) }}" id="myImg" alt="{{ $row->no_sk }}"></td>
                            {{-- @foreach ($row->semester as $key => $value) --}}
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
                            {{-- @endforeach --}}
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
            {{-- tahsin --}}
            <br><br>
            {{-- Laporan Perkembangan --}}
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Laporan Perkembangan PM Beasiswa
            </h3><br>
            <table class="table-fixed w-full" style="table-layout: fixed;word-break: break-all;">
            
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 ">File PPT / Word</th>
                        <th class="px-4 py-2 w-15">Semester</th>
                        <th class="px-4 py-2 w-7">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($laporans as $row)                    
                        <tr>
                            <td class="border px-4 py-2 ">
                                <a href="https://simoneb.sebi.ac.id/storage/app/public/laporan/{{ $row->laporan }}">{{ $row->laporan }}</a>
                            </td>
                            <td class="border px-4 py-2">{{ $row->semester_id}}</td>
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
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>