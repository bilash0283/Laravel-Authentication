<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @media (max-width: 768px) {
      aside {
        position: relative;
      }
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-white shadow-md w-full sticky top-0 z-10">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-gray-800">My Dashboard</h1>
      <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('hidden')">
        ☰
      </button>
      <nav class="hidden md:flex space-x-4">
        <a href="/profile/edit" class="text-gray-600 hover:text-blue-600">{{ __('Profile') }}</a>
      </nav>
    </div>
  </header>

  <div class="flex flex-1 flex-col md:flex-row">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-full md:w-64 bg-white shadow-md md:block hidden">
      <div class="p-6 border-b">
        <h2 class="text-xl font-bold text-gray-700">Sidebar</h2>
      </div>
      <nav class="p-4 space-y-2">
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Dashboard</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Users</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Reports</a>
        <a href="#" class="block px-4 py-2 text-red-600 hover:bg-red-100 rounded">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
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
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-white shadow-inner mt-4">
    <div class="max-w-7xl mx-auto px-4 py-4 text-center text-gray-600">
      &copy; 2025 My Dashboard. All rights reserved.
    </div>
  </footer>

</body>
</html>
