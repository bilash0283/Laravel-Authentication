@include('dashboard-component.header')

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
      <h1 class="text-xl font-bold ">Manage Category</h1>
      @if (session('success'))
      <h3 class="text-green-600">{{ session('success') }}</h3>
      @endif

        <div class="w-full my-6">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border border-gray-200 rounded-lg shadow-xs overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Image</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            {{ print_r($categories) }}

                            {{ $categories->name }}
                              
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

  </div>


@include('dashboard-component.footer')





