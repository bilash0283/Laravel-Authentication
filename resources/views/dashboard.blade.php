    @include('dashboard-component.header');

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6">
      <h1 class="text-xl font-bold ">Your Dashboard</h1>
        @yield('content')
    </main>

  </div>


      @include('dashboard-component.footer');




