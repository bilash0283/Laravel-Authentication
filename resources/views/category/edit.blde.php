    @include('dashboard-component.header')

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
      <h1 class="text-xl font-bold ">Edit Category Page</h1>
      @if (session('success'))
      <h3 class="text-green-600">{{ session('success') }}</h3>
      @endif
        <div class="w-full my-6">
            <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="max-w-sm my-2">
                  <label for="input-label" class="block text-sm font-medium mb-2">Name</label>
                  <input type="text" name="name" id="input-label" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Name">  
              </div>
              <div class="max-w-sm my-2">
                  <label for="description" class="block text-sm font-medium mb-2">Description</label>
                  <input type="text" name="description" id="description" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Description">  
              </div>
              <div class="max-w-sm my-2">
                  <label for="description" class="block text-sm font-medium mb-2">Image</label>
                  <input type="file" name="image" id="description" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Description">  
              </div>
              <div class="max-w-sm my-2">
                  <label for="status" class="block text-sm font-medium mb-2">Status</label>
                  <select name="status" class="py-3 px-4 pe-9 block w-full bg-white border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-neutral-400 ">
                      <option selected="">Open this select menu</option>
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                  </select>
              </div>
              <div class="max-w-sm my-2">
                  <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-100 text-green-800 hover:bg-yellow-200 focus:outline-hidden focus:bg-yellow-200 disabled:opacity-50 disabled:pointer-events-none dark:text-yellow-500">
                      Submit Info
                  </button>
              </div>
            </form>
        </div>
    </main>

  </div>

    @include('dashboard-component.footer')






