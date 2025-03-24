@extends("dashboard.Layouts.main")


@section("container")


<div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
    <!-- Left Section (Table) -->
    <div class="bg-white p-6 rounded-xl shadow-2xl min-h-[40vh] md:min-h-screen">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-4">Category List</h2>
        
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2 text-left">SL</th>
                        <th class="px-4 py-2 text-left">Category Name</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">Web Development</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg mr-2">Edit</button>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg">Delete</button>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">Graphic Design</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-lg mr-2">Edit</button>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Right Section (Form) -->
    <div class="bg-white p-6 rounded-xl shadow-2xl min-h-[40vh] md:min-h-screen flex justify-center items-center">
        <div class="form-container w-full max-w-md">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Create Job Category</h2>
            <form method="POST" action="" class="w-full space-y-4 bg-gray-50 p-6 rounded-lg shadow-md">
                @csrf
                <div class="form-group">
                    <label for="category" class="block text-gray-600 font-medium mb-1">Category Name</label>
                    <input type="text" placeholder="Enter Category Here" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded-lg shadow-md transition duration-300">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection