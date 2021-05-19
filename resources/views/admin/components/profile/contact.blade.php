<form method="POST" enctype="multipart/form-data">
  <div class="shadow sm:rounded-md sm:overflow-hidden">
    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          Email
        </label>
        <div class="mt-1">
          <input wire:model="email" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('email') ? 'border-red-600':'' }}" type="text" placeholder="Input Email">
        </div>
        @error('email')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          No Contact
        </label>
        <div class="mt-1">
          <input wire:model="no_contact" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('no_contact') ? 'border-red-600':'' }}" type="text" placeholder="Input No Contact">
        </div>
        @error('no_contact')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          Instagram
        </label>
        <div class="mt-1">
          <input wire:model="instagram" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('instagram') ? 'border-red-600':'' }}" type="text" placeholder="Input Instagram">
        </div>
        @error('instagram')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          Linkedin
        </label>
        <div class="mt-1">
          <input wire:model="linkedin" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('linkedin') ? 'border-red-600':'' }}" type="text" placeholder="Input Linkedin">
        </div>
        @error('linkedin')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          Github
        </label>
        <div class="mt-1">
          <input wire:model="github" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('github') ? 'border-red-600':'' }}" type="text" placeholder="Input Github">
        </div>
        @error('github')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div>
        <label for="about" class="block text-sm font-medium text-gray-700">
          Gitlab
        </label>
        <div class="mt-1">
          <input wire:model="gitlab" class="shadow block w-full bg-grey-lighter text-grey-darker border border-gray-400 rounded py-3 px-4 mb-3 focus:outline-none focus:ring focus:ring-gray-100 focus:border-gray-500 {{ $errors->has('gitlab') ? 'border-red-600':'' }}" type="text" placeholder="Input gitlab">
        </div>
        @error('gitlab')
        <div class="mt-1 text-sm text-red-600">
          {{ $message }}
        </div>
        @enderror
      </div>

    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
      <button type="button" wire:click="store" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
      </button>
    </div>
  </div>
</form>
