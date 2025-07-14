@include('dashboard-component.header')

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
      <h1 class="text-xl font-bold ">Manage Category</h1>
      @if (session('success'))
      <h3 class="text-green-600">{{ session('success') }}</h3>
      @endif

        <div class="w-full my-6">

        </div>
    </main>

  </div>


@include('dashboard-component.footer')





