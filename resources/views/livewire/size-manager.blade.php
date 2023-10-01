<div>

    <h2>Size Manager</h2>

    <ul class="flex flex-row space-x-6 ">
        @foreach ($sizes as $size)
            <li class="font-bold">
                {{ $size->name }}
          <button wire:click="deleteSize({{ $size->id }})">
              <svg height="20px" width="20px" viewBox="0 0 1024 1024" fill="#c11f1f" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" stroke="#c11f1f"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill=""></path><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill=""></path><path d="M328 340.8l32-31.2 348 348-32 32z" fill=""></path></g>
              </svg>
          </button>
            </li>
        @endforeach
    </ul>

    <div class="flex flex-row justify-end ">
    <form wire:submit.prevent="addSize">
        <input type="text" wire:model="name" placeholder="Add a new size" class="py-2 px-2 border-black border">
        <button type="submit" class="bg-gray-600 text-white   py-2 px-2">Add Size</button>
    </form>
    </div>
</div>
