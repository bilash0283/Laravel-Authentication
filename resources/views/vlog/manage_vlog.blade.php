@include('dashboard-component.header')

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
      <h1 class="text-xl font-bold ">Manage Vlogs</h1>
      @if (session('success'))
      <h3 class="text-green-600">{{ session('success') }}</h3>
      @endif
      @if (session('error'))
        <h3 class="text-red-6000">{{ session('error') }}</h3>
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
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Category</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                             @foreach ($vlogs as $vlog)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><img src="{{ $vlog->image }}" class="w-10 h-10 rounded-full " alt="{{ $vlog->image }}"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $vlog->name  }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $vlog->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $vlog->category->title ?? 'No Category' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-{{ $vlog->status == 1 ? 'green' : 'red' }}-800">{{ $vlog->status == 1 ? "Active" : "Inactive" }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <!-- <a href="{{ route('category_edit',[$vlog->id])}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>

                                        <a href="{{ route('category_delete',[$vlog->id])}}" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:red-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none" onclick="confirm('Are You Sure to Delete it ?')">Delete</a> -->
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

  </div>


@include('dashboard-component.footer')





