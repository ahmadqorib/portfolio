<form method="POST" enctype="multipart/form-data">
  <input type="text" hidden name="id" value="" wire:model="id_profile">
  <div class="shadow sm:rounded-md sm:overflow-hidden">
    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          Name
        </label>
        <div class="mt-1">
          <input wire:model="name" value="" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('name') ? 'border-red-600':'' }}" type="text" placeholder="Input Name">
        </div>
        @error('name')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          About
        </label>
        <div class="mt-1">
          <textarea wire:model="description" id="about" name="about" rows="3" class="shadow-sm block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500" placeholder="Input Description"></textarea>
        </div>
        <p class="mt-2 text-sm text-gray-500">
          Brief description for your profile.
        </p>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">
          Photo
        </label>
        <div class="mt-1 flex items-center">
          <input type="file" hidden id="file-input" wire:model="photo">
          <span class="inline-block h-20 w-20 rounded-full overflow-hidden bg-gray-100">
            
            @if ($photo)
                <img src="{{ $photo->temporaryUrl() }}">
            @elseif ($profile->photo_url)
              <img src="{{ $profile->photo_url }}">
            @else 
              <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            @endif
          </span>
          <button onclick="document.getElementById('file-input').click();" type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Change
          </button>
        </div>
      </div>
    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
      <button type="button" wire:click="store" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
      </button>
    </div>
  </div>
</form>
