<x-app-layout>
    <div class="">
        <div class="flex h-screen">
            <aside class="w-64 bg-gray-800 text-white flex flex-col">
                <div class="p-4 text-2xl font-bold text-center border-b border-gray-700">Dashboard</div>
                <nav class="flex-1 p-4">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Home</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Users</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Reports</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Settings</a>
                </nav>
                <div class="p-4 border-t border-gray-700">
                    <button class="w-full py-2 bg-red-600 hover:bg-red-700 rounded">Logout</button>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                <h1 class="text-3xl font-semibold mb-4">Welcome Admin</h1>

                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-xl font-bold">Total Users</h2>
                        <p class="text-3xl text-blue-500 mt-2">1,234</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-xl font-bold">Revenue</h2>
                        <p class="text-3xl text-green-500 mt-2">$12,345</p>
                    </div>
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="text-xl font-bold">Reports</h2>
                        <p class="text-3xl text-yellow-500 mt-2">56</p>
                    </div>
                </div>

                <!-- Table -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-bold mb-4">Recent Users</h2>
                    <table class="w-full table-auto text-left">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="p-2">Name</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t">
                                <td class="p-2">John Doe</td>
                                <td class="p-2">john@example.com</td>
                                <td class="p-2 text-green-600">Active</td>
                            </tr>
                            <tr class="border-t">
                                <td class="p-2">Jane Smith</td>
                                <td class="p-2">jane@example.com</td>
                                <td class="p-2 text-yellow-600">Pending</td>
                            </tr>
                            <tr class="border-t">
                                <td class="p-2">Mike Johnson</td>
                                <td class="p-2">mike@example.com</td>
                                <td class="p-2 text-red-600">Inactive</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>