
@extends("dashboard.Layouts.main")


@section("container")
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


        @endsection



 