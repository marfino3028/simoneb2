<div>
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label for="formnama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formnama" wire:model="nama">
                            @error('nama') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-4">
                            <label for="formjabatan" class="block text-gray-700 text-sm font-bold mb-2">Jabatan:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formjabatan" wire:model="jabatan">
                            @error('jabatan') <span class="text-red-500">{{ $message }}</span>@enderror
                            </input>
                        </div>
                        <div class="mb-4">
                            <label for="formmasa_jabatan" class="block text-gray-700 text-sm font-bold mb-2">Masa Jabatan:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formmasa_jabatan" wire:model="masa_jabatan">
                            @error('masa_jabatan') <span class="text-red-500">{{ $message }}</span>@enderror
                            </input>
                        </div>
                        <div class="mb-4">
                            <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto:</label>
                            <div class="mb-3">
                            <input type="file" wire:model="foto" class="">
                            <div>
                                @error('foto') <span class="text-sm text-red-500 italic">{{ $message }}</span>@enderror
                            </div>
                            <div wire:loading wire:target="foto" class="text-sm text-gray-500 italic">Uploading...</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="semester" class="block text-gray-700 text-sm font-bold mb-2">Semester</label>
                            <select class="form-control" wire:model="semester" id="forSemester" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                            @error('semester') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
    
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base rounded leading-6 font-medium text-black shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Save
                        </button>
                    </span>
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-black shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
