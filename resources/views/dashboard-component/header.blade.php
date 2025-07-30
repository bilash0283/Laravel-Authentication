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
        <a href="{{ route('category_manage') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Manage Category</a>
        <a href="{{ route('create_vlog') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Add Vlog</a>
        <a href="{{ route('vlog_manage') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">Manage Vlog</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="block px-4 py-2 text-gray-700 hover:bg-gray-200 rounded">
              Logout
          </button>
      </form>
      </nav>
    </aside>