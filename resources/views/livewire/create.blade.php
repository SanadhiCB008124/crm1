<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400 bg-black">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>


    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?

    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form enctype="multipart/formdata">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
      <x-validation-errors class="mb-4" />
        <div class="">
              <div class="mb-4">
                  <label for="exampleFormControlInput1" class="block text-black text-sm font-bold mb-2">Name:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                  @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>

              <div class="mb-4">
    <label for="exampleFormControlSelect1" class="block text-black text-sm font-bold mb-2">Category:</label>
    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlSelect1" wire:model="category_id">
        <option value="">Select a Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    @error('category') <span class="text-red-500">{{ $message }}</span> @enderror
</div>

              <div class="mb-4">
                  <label for="exampleFormControlInput2" class="block text-black text-sm font-bold mb-2">Detail:</label>
                  <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="detail" placeholder="Enter Detail"></textarea>
                  @error('detail') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="exampleFormControlInput2" class="block text-black text-sm font-bold mb-2">Price:</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="unit_price" placeholder="Enter Price"></input>
                  @error('unit_price') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>

            <div class="mb-4">
            <label for="exampleFormControlSelect1" class="block text-black text-sm font-bold mb-2">Color:</label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlSelect1" wire:model="color_id">
                <option value="">Select a Color</option>
                @foreach ($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->color }}</option>
                @endforeach
            </select>
            @error('color_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="exampleFormControlSelect1" class="block text-black text-sm font-bold mb-2">Size:</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlSelect1" wire:model="size_id">
                    <option value="">Select a Size</option>
                    @foreach ($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                    @endforeach
                </select>
                @error('size_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
              <div class="mb-4">
                  <label for="exampleFormControlInput2" class="block text-black text-sm font-bold mb-2">No of stocks arrived:</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="stocks" placeholder="Enter Number of stocks"></input>
                  @error('stocks') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="exampleFormControlInput2" class="block text-black text-sm font-bold mb-2">Image:</label>
                  <input  type="file"   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="image" placeholder="Add Image"></input>
                  @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
        </div>
      </div>

      <div class="bg-black px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-amber-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-amber-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
      </div>
        </form>
      </div>

    </div>
  </div>
</div>
