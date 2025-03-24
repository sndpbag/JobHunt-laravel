<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Navigation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex flex-col md:flex-row">
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

            <!-- Main content -->
            <div class="flex-1 p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to the Dashboard</h1>
                <p class="text-gray-600 mb-6">Overview of your account and recent activities</p>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="bg-blue-500 rounded-full p-3">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-lg font-semibold text-gray-700">Users</h2>
                                <p class="text-2xl font-bold text-gray-800">1,254</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="bg-green-500 rounded-full p-3">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-lg font-semibold text-gray-700">Revenue</h2>
                                <p class="text-2xl font-bold text-gray-800">$24,583</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="bg-yellow-500 rounded-full p-3">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-lg font-semibold text-gray-700">Orders</h2>
                                <p class="text-2xl font-bold text-gray-800">538</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="bg-purple-500 rounded-full p-3">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-lg font-semibold text-gray-700">Tickets</h2>
                                <p class="text-2xl font-bold text-gray-800">42</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Activity</h2>
                    <div class="border-t border-gray-200">
                        <p class="py-4 text-gray-600">Your dashboard content goes here...</p>
                    </div>
                </div>
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

    <script>
        // Toggle desktop settings submenu
        document.getElementById('settingsDropdown').addEventListener('click', function() {
            const settingsMenu = document.getElementById('settingsMenu');
            const settingsIcon = document.getElementById('settingsIcon');
            settingsMenu.classList.toggle('hidden');
            settingsIcon.classList.toggle('fa-chevron-down');
            settingsIcon.classList.toggle('fa-chevron-up');
        });

        // Toggle mobile settings submenu
        document.getElementById('mobileSettingsDropdown').addEventListener('click', function() {
            const mobileSettingsMenu = document.getElementById('mobileSettingsMenu');
            const mobileSettingsIcon = document.getElementById('mobileSettingsIcon');
            mobileSettingsMenu.classList.toggle('hidden');
            mobileSettingsIcon.classList.toggle('fa-chevron-down');
            mobileSettingsIcon.classList.toggle('fa-chevron-up');
        });

        // Mobile sidebar toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const sidebarPanel = document.getElementById('sidebar-panel');
            mobileSidebar.classList.remove('hidden');
            setTimeout(() => {
                sidebarPanel.classList.remove('-translate-x-full');
            }, 50);
        });

        // Close mobile sidebar
        document.getElementById('close-sidebar').addEventListener('click', closeMobileSidebar);
        document.getElementById('sidebar-backdrop').addEventListener('click', closeMobileSidebar);

        function closeMobileSidebar() {
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const sidebarPanel = document.getElementById('sidebar-panel');
            sidebarPanel.classList.add('-translate-x-full');
            setTimeout(() => {
                mobileSidebar.classList.add('hidden');
            }, 300);
        }
    </script>
</body>

</html>