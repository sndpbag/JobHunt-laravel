 <!-- Sidebar for desktop -->
 <div id="sidebar" class="bg-gray-800 text-white w-64 md:flex md:flex-col hidden transition-all duration-300 ease-in-out">
      <!-- Logo section -->
      <div class="p-4 bg-gray-900">
        <div class="flex items-center">
          <svg class="h-8 w-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-2 text-xl font-bold">Dashboard</span>
        </div>
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
      
      <!-- Navigation Links -->
      <nav class="flex-1 overflow-y-auto p-2">
        <ul class="space-y-1">
          <li>
            <a href="{{URL::to('/dashboard')}}" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
              <i class="fas fa-home mr-3 text-lg"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{URL::to('/dashboard/category')}}" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
              <i class="fas fa-chart-bar mr-3 text-lg"></i>
              <span>Job Categery</span>
            </a>
          </li>

          <li>
            <a href="{{URL::to('/dashboard/create_job')}}" class="flex items-center p-3 text-gray-300 hover:bg-gray-700 rounded-lg">
              <i class="fas fa-chart-bar mr-3 text-lg"></i>
              <span>Create Job</span>
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
            <button class="flex items-center w-full p-3 text-gray-300 hover:bg-gray-700 rounded-lg focus:outline-none" id="settingsDropdown">
              <i class="fas fa-cog mr-3 text-lg"></i>
              <span>Settings</span>
              <i class="fas fa-chevron-down ml-auto" id="settingsIcon"></i>
            </button>
            <ul class="pl-10 mt-1 hidden" id="settingsMenu">
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