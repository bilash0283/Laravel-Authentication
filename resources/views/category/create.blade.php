<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BK Vlog Dashboard</title>
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
        <a href="{{ route('dashboard') }}" class="text-xl font-bold text-gray-700">Dahboard</a>
      </div>
      <nav class="p-4 space-y-2">
        <a href="{{ route('category_create') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Add Category</a>
        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Manage Category</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Add Vlog</a>
        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Manage Vlog</a>
        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
      </nav>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
      <h1 class="text-xl font-bold ">Add Category Page</h1>
        <div class="w-full my-6">
            <div class="max-w-sm my-2">
                <label for="input-label" class="block text-sm font-medium mb-2">Name</label>
                <input type="email" id="input-label" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Name">  
            </div>
            <div class="max-w-sm my-2">
                <label for="description" class="block text-sm font-medium mb-2">Description</label>
                <input type="text" id="description" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Description">  
            </div>
            <div class="max-w-sm my-2">
                <label for="description" class="block text-sm font-medium mb-2">Image</label>
                <input type="file" id="description" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter Description">  
            </div>
            <div id="hs-combobox-json-example-based-on-api-pathes" class="relative" >
                <div class="relative">
                    <input class="py-2.5 sm:py-3 ps-4 pe-9 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="text" role="combobox" aria-expanded="false" value="Argentina" data-hs-combo-box-input="">
                    <div class="absolute top-1/2 end-3 -translate-y-1/2" aria-expanded="false" role="button" data-hs-combo-box-toggle="">
                    <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m7 15 5 5 5-5"></path>
                        <path d="m7 9 5-5 5 5"></path>
                    </svg>
                    </div>
                </div>
                <div class="absolute z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700" style="display: none;" role="listbox" data-hs-combo-box-output=""></div>
            </div>
        </div>
    </main>

  </div>

  <!-- Footer -->
  <footer class="bg-white shadow-inner mt-4">
    <div class="max-w-7xl mx-auto px-4 py-4 text-center text-gray-600">
      &copy; {{ date("Y") }} My Dashboard. All rights reserved.
    </div>
  </footer>

</body>
</html>




