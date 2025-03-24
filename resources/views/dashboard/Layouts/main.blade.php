<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <title>Dashboard</title>
</head>

<body class="bg-gray-100 font-sans">

  <div class="min-h-screen flex flex-col md:flex-row">
  
    <!-- Sidebar -->
    @include('dashboard.layouts.sidebar')


    <!-- Main content area -->
    <div class="flex-1 flex flex-col">
      <!-- Top navbar for mobile -->
      <div class="bg-white shadow p-4 flex items-center justify-between md:hidden">
        <div class="flex items-center">
          <button id="mobile-menu-button" class="mr-4 text-gray-600">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
          <span class="text-xl font-bold">Dashboard</span>
        </div>
        <div>
          <button class="p-2 rounded-full bg-gray-200">
            <svg class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
          </button>
        </div>
      </div>

 



      <!-- Main content area -->
      <div class="flex-1 flex flex-col">
        <div class="flex-1 p-6">
        {{-- <!-- Top navbar for mobile -->
        <div class="bg-white shadow p-4 flex items-center justify-between md:hidden">
          <div class="flex items-center">
            <button id="mobile-menu-button" class="mr-4 text-gray-600">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
            <span class="text-xl font-bold">Dashboard</span>
          </div>
          <div>
            <button class="p-2 rounded-full bg-gray-200">
              <svg class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
              </svg>
            </button>
          </div>
        </div> --}}

        <!-- Main content -->
         @yield("container")
        </div>
      </div>

      <!-- Mobile sidebar (hidden by default) -->
      <div id="mobile-sidebar" class="fixed inset-0 z-40 hidden">
        <div class="absolute inset-0 bg-gray-600 opacity-75" id="sidebar-backdrop"></div>
        <div class="absolute inset-y-0 left-0 w-64 bg-gray-800 text-white flex flex-col transition-all duration-300 transform -translate-x-full" id="sidebar-panel">
          <!-- Same content as desktop sidebar -->
          <div class="p-4 bg-gray-900 flex items-center justify-between">
            <div class="flex items-center">
              <svg class="h-8 w-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
              </svg>
              <span class="ml-2 text-xl font-bold">Dashboard</span>
            </div>
            <button id="close-sidebar" class="text-gray-300">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>

          <!-- User info -->
          <div class="p-4 border-b border-gray-700">
            <div class="flex items-center">
              <div class="bg-blue-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold">JD</div>
              <div class="ml-3">
                <p class="font-medium">John Doe</p>
                <p class="text-sm text-gray-400">Administrator</p>
              </div>
            </div>
          </div>

          <!-- Navigation Links (same as desktop) -->
          <nav class="flex-1 overflow-y-auto p-2">
            <ul class="space-y-1">
              <li>
                <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                  <i class="fas fa-home mr-3 text-lg"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                  <i class="fas fa-chart-bar mr-3 text-lg"></i>
                  <span>Analytics</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                  <i class="fas fa-users mr-3 text-lg"></i>
                  <span>Customers</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                  <i class="fas fa-shopping-cart mr-3 text-lg"></i>
                  <span>Orders</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
                  <i class="fas fa-box mr-3 text-lg"></i>
                  <span>Products</span>
                </a>
              </li>
              <li>
                <button class="flex items-center w-full p-3 text-gray-300 hover:bg-gray-700 rounded-lg focus:outline-none" id="mobileSettingsDropdown">
                  <i class="fas fa-cog mr-3 text-lg"></i>
                  <span>Settings</span>
                  <i class="fas fa-chevron-down ml-auto" id="mobileSettingsIcon"></i>
                </button>
                <ul class="pl-10 mt-1 hidden" id="mobileSettingsMenu">
                  <li>
                    <a href="#" class="flex items-center p-2 text-gray-400 hover:text-gray-200">
                      <i class="fas fa-user mr-2"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="flex items-center p-2 text-gray-400 hover:text-gray-200">
                      <i class="fas fa-bell mr-2"></i>
                      <span>Notifications</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="flex items-center p-2 text-gray-400 hover:text-gray-200">
                      <i class="fas fa-lock mr-2"></i>
                      <span>Security</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>

          <!-- Footer section -->
          <div class="p-4 border-t border-gray-700">
            <a href="#" class="flex items-center text-gray-300 hover:text-white">
              <i class="fas fa-sign-out-alt mr-3"></i>
              <span>Logout</span>
            </a>
          </div>
        </div>
      </div>

    </div>

</body>

</html>