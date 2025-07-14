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
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">fsdfs</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">fsdfsd</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">sdfsdf</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">fsdfsd</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

  </div>


@include('dashboard-component.footer')





