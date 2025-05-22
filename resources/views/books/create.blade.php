<x-app>
  <div>
    <form method="POST" action="{{ route('book.store') }}">
      @csrf
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
          <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

          @error('judul')
          <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
          </div>
          @enderror
        </div>
        <div>
          <label for="pengarang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengarang</label>
          <input type="text" id="pengarang" name="pengarang" value="{{ old('pengarang') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
          @error('pengarang')
          <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
          </div>
          @enderror
        </div>
        <div>
          <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
          <select id="status" name="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Pilih</option>
            <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>Tidak Aktif</option>
          </select>
          @error('status')
          <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
          </div>
          @enderror
        </div>
        <div>
          <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
          <input type="number" id="harga" name="harga" value="{{ old('harga') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
          @error('harga')
          <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
          </div>
          @enderror
        </div>
        <div class="col-span-2">
          <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
          <textarea id="message" rows="4" name="deskripsi"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here...">{{ old('deskripsi') }}</textarea>
          @error('deskripsi')
          <div class="p-4 my-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <span class="font-medium">{{ $message }}</span>
          </div>
          @enderror
        </div>
        <div class="col-span-2 flex items-center justify-center">
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <a href="{{ route('book.index') }}">INDEX</a>
</x-app>