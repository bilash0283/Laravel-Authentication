<x-app-layout>
    <div class="">
        <div class="flex h-screen">
            <aside class="w-64 bg-gray-800 text-white flex flex-col">
                <div class="p-4 text-2xl font-bold text-center border-b border-gray-700">Dashboard</div>
                <nav class="flex-1 p-4">
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Create Vlog</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Manage Vlogs</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Create User</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Manage Users</a>
                    <a href="{{ route('category_create') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">Create Category</a>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-700 rounded">Manage Category</a>
                </nav>
                <div class="p-4 border-t border-gray-700">
                    <button class="w-full py-2 bg-red-600 hover:bg-red-700 rounded">Logout</button>
                </div>
            </aside>

            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content') 
            </main>

        </div>
    </div>
</x-app-layout>







