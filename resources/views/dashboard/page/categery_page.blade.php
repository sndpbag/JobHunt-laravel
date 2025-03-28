 @extends('dashboard.Layouts.main')


 @section('container')
     <!-- Header Section -->
     <div class="mb-8 text-center">
         <h1 class="text-3xl font-bold text-gray-800 mb-2">Job Categories</h1>
         <p class="text-gray-600">Manage and organize your job listing categories</p>
     </div>

     <div class="max-w-8xl  grid grid-cols-1 lg:grid-cols-3 gap-8 ">

         <!-- Left Section (Table) -->
         <div class="lg:col-span-2 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
             <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-6 py-4">
                 <h2 class="text-xl font-bold text-white flex items-center">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                         <path fill-rule="evenodd"
                             d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                             clip-rule="evenodd" />
                     </svg>
                     Category List
                 </h2>
             </div>

             <div class="p-6">
                 <!-- Search and Filter -->
                 <div class="mb-6 flex items-center">
                     <div class="relative flex-grow">
                         <input type="text" placeholder="Search categories..."
                             class="w-full px-4 py-2 pl-10 pr-10 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                         <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                         </svg>
                     </div>
                     <button
                         class="ml-3 bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                         </svg>
                         Filter
                     </button>
                 </div>

                 <div class="overflow-x-auto">
                     <table class="w-full border-collapse">
                         <thead>
                             <tr class="border-b-2 border-gray-200">
                                 <th
                                     class="px-4 py-3 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                     ID</th>
                                 <th
                                     class="px-4 py-3 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                     Category Name</th>
                                 <th
                                     class="px-4 py-3 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                     Jobs</th>
                                 <th
                                     class="px-4 py-3 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                     Actions</th>
                             </tr>
                         </thead>
                         <tbody id="table_body">
                             {{-- <tr class="border-b border-gray-100 hover:bg-blue-50 transition-colors duration-200">
                                 <td class="px-4 py-4 text-gray-800 font-medium">#001</td>
                                 <td class="px-4 py-4">
                                     <div class="flex items-center">
                                         <div
                                             class="h-10 w-10 flex-shrink-0 mr-3 bg-blue-100 text-blue-500 rounded-lg flex items-center justify-center">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                             </svg>
                                         </div>
                                         <div>
                                             <div class="font-medium text-gray-800">Web Development</div>
                                             <div class="text-gray-500 text-sm">Added on Mar 12, 2025</div>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-4 py-4">
                                     <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">32
                                         Jobs</span>
                                 </td>
                                 <td class="px-4 py-4 text-center">
                                     <div class="flex justify-center space-x-2">
                                         <button
                                             class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                             </svg>
                                             <span class="tooltip-text">Edit</span>
                                         </button>
                                         <button
                                             class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                             </svg>
                                             <span class="tooltip-text">Delete</span>
                                         </button>
                                     </div>
                                 </td>
                             </tr>
                             <tr class="border-b border-gray-100 hover:bg-blue-50 transition-colors duration-200">
                                 <td class="px-4 py-4 text-gray-800 font-medium">#002</td>
                                 <td class="px-4 py-4">
                                     <div class="flex items-center">
                                         <div
                                             class="h-10 w-10 flex-shrink-0 mr-3 bg-purple-100 text-purple-500 rounded-lg flex items-center justify-center">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                             </svg>
                                         </div>
                                         <div>
                                             <div class="font-medium text-gray-800">Graphic Design</div>
                                             <div class="text-gray-500 text-sm">Added on Mar 15, 2025</div>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-4 py-4">
                                     <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">26
                                         Jobs</span>
                                 </td>
                                 <td class="px-4 py-4 text-center">
                                     <div class="flex justify-center space-x-2">
                                         <button
                                             class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                             </svg>
                                             <span class="tooltip-text">Edit</span>
                                         </button>
                                         <button
                                             class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                             </svg>
                                             <span class="tooltip-text">Delete</span>
                                         </button>
                                     </div>
                                 </td>
                             </tr>
                             <tr class="hover:bg-blue-50 transition-colors duration-200">
                                 <td class="px-4 py-4 text-gray-800 font-medium">#003</td>
                                 <td class="px-4 py-4">
                                     <div class="flex items-center">
                                         <div
                                             class="h-10 w-10 flex-shrink-0 mr-3 bg-yellow-100 text-yellow-500 rounded-lg flex items-center justify-center">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                             </svg>
                                         </div>
                                         <div>
                                             <div class="font-medium text-gray-800">Data Science</div>
                                             <div class="text-gray-500 text-sm">Added on Mar 20, 2025</div>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-4 py-4">
                                     <span
                                         class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">18
                                         Jobs</span>
                                 </td>
                                 <td class="px-4 py-4 text-center">
                                     <div class="flex justify-center space-x-2">
                                         <button
                                             class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                             </svg>
                                             <span class="tooltip-text">Edit</span>
                                         </button>
                                         <button
                                             class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                             </svg>
                                             <span class="tooltip-text">Delete</span>
                                         </button>
                                     </div>
                                 </td>
                             </tr> --}}
                         </tbody>
                     </table>
                 </div>

                 <!-- Pagination -->
                 <div class="mt-6 flex items-center justify-between">
                     <div class="text-sm text-gray-600">Showing 1 to 3 of 12 entries</div>
                     <div class="flex space-x-1">
                         <button class="px-3 py-1 rounded bg-gray-100 text-gray-700 hover:bg-gray-200">Previous</button>
                         <button class="px-3 py-1 rounded bg-blue-500 text-white">1</button>
                         <button class="px-3 py-1 rounded bg-gray-100 text-gray-700 hover:bg-gray-200">2</button>
                         <button class="px-3 py-1 rounded bg-gray-100 text-gray-700 hover:bg-gray-200">3</button>
                         <button class="px-3 py-1 rounded bg-gray-100 text-gray-700 hover:bg-gray-200">Next</button>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Right Section (Form) -->
         <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
             <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-6 py-4">
                 <h2 class="text-xl font-bold text-white flex items-center">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                         <path fill-rule="evenodd"
                             d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                             clip-rule="evenodd" />
                     </svg>
                     Create Category
                 </h2>
             </div>

             <div class="p-6">
                 <div class="form-container w-full">
                     <form id="category" class="w-full space-y-6">
                         @csrf
                         <div class="form-group">
                             <label for="category" class="block text-gray-700 font-medium mb-2">Category Name</label>
                             <div class="relative">
                                 <input type="text" name="category" placeholder="Enter category name"
                                     class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                     </svg>
                                 </div>
                             </div>
                             <p class="text-gray-500 text-sm mt-1">Choose a unique name for this job category</p>
                         </div>

                         <div class="form-group">
                             <label for="description" class="block text-gray-700 font-medium mb-2">Description
                                 (Optional)</label>
                             <textarea name="description" rows="3" placeholder="Enter category description"
                                 class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent"></textarea>
                         </div>

                         <div class="form-group">
                             <label for="icon" class="block text-gray-700 font-medium mb-2">Icon</label>
                             <div class="grid grid-cols-5 gap-2">
                                 <div
                                     class="p-2 border rounded-lg cursor-pointer hover:bg-indigo-50 hover:border-indigo-300 flex items-center justify-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                     </svg>
                                 </div>
                                 <div
                                     class="p-2 border rounded-lg cursor-pointer hover:bg-indigo-50 hover:border-indigo-300 flex items-center justify-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                     </svg>
                                 </div>
                                 <div
                                     class="p-2 border rounded-lg cursor-pointer hover:bg-indigo-50 hover:border-indigo-300 flex items-center justify-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                     </svg>
                                 </div>
                                 <div
                                     class="p-2 border rounded-lg cursor-pointer hover:bg-indigo-50 hover:border-indigo-300 flex items-center justify-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                     </svg>
                                 </div>
                                 <div
                                     class="p-2 border rounded-lg cursor-pointer hover:bg-indigo-50 hover:border-indigo-300 flex items-center justify-center">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                     </svg>
                                 </div>
                             </div>
                         </div>

                         <div class="form-group">
                             <label for="color" class="block text-gray-700 font-medium mb-2">Color Theme</label>
                             <div class="flex space-x-2">
                                 <div
                                     class="w-8 h-8 rounded-full bg-blue-500 cursor-pointer ring-2 ring-offset-2 ring-blue-500">
                                 </div>
                                 <div class="w-8 h-8 rounded-full bg-purple-500 cursor-pointer"></div>
                                 <div class="w-8 h-8 rounded-full bg-green-500 cursor-pointer"></div>
                                 <div class="w-8 h-8 rounded-full bg-yellow-500 cursor-pointer"></div>
                                 <div class="w-8 h-8 rounded-full bg-red-500 cursor-pointer"></div>
                             </div>
                         </div>

                         <div class="form-group pt-4">
                             <button type="submit"
                                 class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                 Create Category
                             </button>
                         </div>
                     </form>

                     <!-- Preview Card -->
                     <div class="mt-8 bg-gray-50 p-4 rounded-lg border border-gray-200">
                         <h3 class="text-sm font-medium text-gray-700 mb-2">Preview</h3>
                         <div class="flex items-center p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                             <div
                                 class="h-10 w-10 flex-shrink-0 mr-3 bg-blue-100 text-blue-500 rounded-lg flex items-center justify-center">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                 </svg>
                             </div>
                             <div>
                                 <div class="font-medium text-gray-800">Web Development</div>
                                 <div class="text-gray-500 text-sm">32 Jobs Available</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



     <script>
         // Your JavaScript code here
         $(document).ready(function() {

             //  send date for category subit
             $("#category").submit(function(event) {
                 event.preventDefault();
                 var datas = new FormData(this);
                 console.log(datas)
                 $.ajax({
                     url: "{{ route('dashboard.category.create') }}",
                     type: "post",

                     data: datas,



                     dataType: "json",

                     contentType: false, // Not setting contentType because FormData handles it automatically

                     processData: false, // Not processing data because FormData handles it automaticall
                     success: function(response) {
                         console.log(response.message);
                         if (response.message) {
                             Swal.fire({
                                 position: "top-end",
                                 icon: "success",
                                 title: response.message,
                                 showConfirmButton: false,
                                 timer: 1500
                             });
                             $("#category")[0].reset();

                         }
                         // Your success code here
                     },
                     error: function(xhr, status, error) {

                         let errorMsg = xhr.responseJSON.errors;
                         console.log(xhr.responseJSON);
                         let errorHtml = '';
                         for (let key in errorMsg) {
                             errorHtml += `<p>${errorMsg[key][0]}</p>`;
                         }



                         Swal.fire({
                             position: "top-end",
                             icon: "error",
                             showConfirmButton: false,
                             html: errorHtml,
                             timer: 1500
                         });

                     }
                 })
             })


             //   get all category for category table

             $.ajax({
                 url: "{{ route('get-category') }}",
                 type: "get",
                 dataType: "json",
                 success: function(response) {
                     let table = $("#table_body");
                     table.html(''); // clear previews data before appending  new data
                     if (response.status && response.data.data.length > 0) {
                       let  category_data = response.data.data;
                         category_data.forEach((element,index) => {

                             table.append(`
                        
                          <tr class="border-b border-gray-100 hover:bg-blue-50 transition-colors duration-200">
                                 <td class="px-4 py-4 text-gray-800 font-medium">#0${index+1}</td>
                                 <td class="px-4 py-4">
                                     <div class="flex items-center">
                                         <div
                                             class="h-10 w-10 flex-shrink-0 mr-3 bg-blue-100 text-blue-500 rounded-lg flex items-center justify-center">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                             </svg>
                                         </div>
                                         <div>
                                             <div class="font-medium text-gray-800">${element.category_name}</div>
                                             <div class="text-gray-500 text-sm">Added on  ${new Date(element.created_at).toLocaleDateString()}</div>
                                         </div>
                                     </div>
                                 </td>
                                 <td class="px-4 py-4">
                                     <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">32
                                         Jobs</span>
                                 </td>
                                 <td class="px-4 py-4 text-center">
                                     <div class="flex justify-center space-x-2">
                                         <button
                                             class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                             </svg>
                                             
                                         </button>
                                         <button
                                             class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition duration-300 tooltip-trigger">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                             </svg>
                                              
                                         </button>
                                     </div>
                                 </td>
                             </tr>
                        
                        
                        `)



                         });
                     }

                 },
             })
         })
     </script>
 @endsection
