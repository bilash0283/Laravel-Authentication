
    @section('title', 'Dashboard')

    @section('content')
        <h1 class="text-2xl font-semibold mb-4 text-gray-800">Welcome Back!</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white p-4 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700 mb-2">Users</h2>
          <p class="text-3xl font-bold text-indigo-600">1,230</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-4 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700 mb-2">Revenue</h2>
          <p class="text-3xl font-bold text-green-600">$12,340</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-4 rounded-xl shadow">
          <h2 class="text-lg font-semibold text-gray-700 mb-2">Orders</h2>
          <p class="text-3xl font-bold text-yellow-600">305</p>
        </div>

      </div>

      <!-- Table -->
      <div class="mt-8 bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full">
          <thead>
            <tr class="bg-gray-200 text-gray-600 text-sm uppercase text-left">
              <th class="py-3 px-6">Name</th>
              <th class="py-3 px-6">Email</th>
              <th class="py-3 px-6">Role</th>
              <th class="py-3 px-6">Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-b">
              <td class="py-3 px-6">John Doe</td>
              <td class="py-3 px-6">john@example.com</td>
              <td class="py-3 px-6">Admin</td>
              <td class="py-3 px-6 text-green-600 font-medium">Active</td>
            </tr>
            <tr class="border-b">
              <td class="py-3 px-6">Jane Smith</td>
              <td class="py-3 px-6">jane@example.com</td>
              <td class="py-3 px-6">User</td>
              <td class="py-3 px-6 text-yellow-500 font-medium">Pending</td>
            </tr>
          </tbody>
        </table>
      </div>
    @endsection

      