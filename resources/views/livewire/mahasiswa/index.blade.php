<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Beasiswa
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="py-3">
			<button onClick="prepare()" class="bg-red-700 text-white font-bold py-2 px-6">Hapus data</button>
		</div>
		
		<table class="table-fixed w-full bg-white">
			<thead>
				<tr class="border">
					<th class="px-4 py-2">NIM</th>
					<th class="px-4 py-2">Nama</th>
					<th class="px-4 py-2">Angkatan</th>
					<th class="px-4 py-2">Beasiswa</th>
				</tr>
			</thead>
			<tbody>
			@if(empty($user))
				<tr>
					<td class="border text-center py-6" colspan="4"><h2>Kosong</h2></td>
				</tr>
			@else
				@foreach($user as $row)
					<tr>
						<td class="border px-4 py-2">{{ $row->nim }}</td>
						<td class="border px-4 py-2">{{ $row->name }}</td>
						<td class="border px-4 py-2">{{ $row->angkatan }}</td>
						<td class="border px-4 py-2">{{ $row->beasiswa }}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
	</div>
</div>


<div class="modal open" id="del">
	<div class="modal-overlay">
		<div class="modal-container">
			<div class="modal-close">
				<span class="close">&times;</span>
			</div>
			
			<div class="modal-content">
			Clear all data
			</div>
			
		</div>
	</div>
</div>


<script>
function prepare()
{
	let res = confirm("Hapus data");
	
	if(res)
	{
		window.Livewire.find('{{ $_instance->id }}').call('clearAll');
	}
}
</script>