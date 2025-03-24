
 
@extends('../Layouts/app')


@section("container")

   <!-- Hero Search -->
   <section class="bg-gradient-to-r from-blue-600 to-indigo-700 py-16">

        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold text-center mb-6">Find Your Dream Job Today
            </h1>
            <p class="text-blue-100 text-center text-lg mb-10 max-w-3xl mx-auto">Browse through thousands of job
                listings to find the perfect match for your skills and career goals.</p>

            <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg p-4 md:p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i>
                        <input type="text" placeholder="Job title or keyword"
                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="relative">
                        <i class="fa-solid fa-location-dot absolute left-3 top-3 text-gray-400"></i>
                        <input type="text" placeholder="Location"
                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="lg:col-span-1 md:col-span-2 flex">
                        <button @click="searchModal = true"
                            class="flex-1 md:flex-none md:w-auto bg-gray-100 text-gray-700 px-4 py-2 rounded-lg mr-2 hover:bg-gray-200 transition">
                            <i class="fa-solid fa-filter mr-2"></i>
                            Filters
                        </button>
                        <button
                            class="flex-1 md:flex-none md:w-auto bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                            <i class="fa-solid fa-search mr-2"></i>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <!-- Filter Modal -->
     <div x-show="searchModal" x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black bg-opacity-50">
        <div @click.away="searchModal = false"
            class="bg-white rounded-lg shadow-lg w-full max-w-4xl max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold text-gray-800">Advanced Search Filters</h3>
                    <button @click="searchModal = false" class="text-gray-500 hover:text-gray-700">
                        <i class="fa-solid fa-times text-xl"></i>
                    </button>
                </div>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Job Type -->
                    <div>
                        <h4 class="font-medium text-gray-700 mb-3">Job Type</h4>
                        <div class="space-y-2">
                            <template x-for="type in jobTypes" :key="type">
                                <div class="flex items-center">
                                    <input :id="'type-' + type" type="checkbox" x-model="selectedJobTypes" :value="type"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label :for="'type-' + type" class="ml-2 text-gray-700" x-text="type"></label>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Experience Level -->
                    <div>
                        <h4 class="font-medium text-gray-700 mb-3">Experience Level</h4>
                        <div class="space-y-2">
                            <template x-for="level in experienceLevels" :key="level">
                                <div class="flex items-center">
                                    <input :id="'exp-' + level.replace(' ', '-')" type="checkbox"
                                        x-model="selectedExperience" :value="level"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label :for="'exp-' + level.replace(' ', '-')" class="ml-2 text-gray-700"
                                        x-text="level"></label>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Salary Range -->
                    <div class="md:col-span-2">
                        <h4 class="font-medium text-gray-700 mb-3">Salary Range</h4>
                        <div class="mb-2 flex justify-between">
                            <span x-text="'$' + salaryMin.toLocaleString()" class="text-gray-600"></span>
                            <span x-text="'$' + salaryMax.toLocaleString()" class="text-gray-600"></span>
                        </div>
                        <div class="relative pt-1">
                            <input type="range" min="0" max="200000" step="5000" x-model="salaryMin"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <input type="range" min="0" max="200000" step="5000" x-model="salaryMax"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer mt-2">
                        </div>
                    </div>

                    <!-- Sort By -->
                    <div>
                        <h4 class="font-medium text-gray-700 mb-3">Sort Results By</h4>
                        <select x-model="sortBy"
                            class="w-full border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="newest">Newest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="salary_high">Highest Salary</option>
                            <option value="salary_low">Lowest Salary</option>
                            <option value="relevant">Most Relevant</option>
                        </select>
                    </div>

                    <!-- Categories -->
                    <div>
                        <h4 class="font-medium text-gray-700 mb-3">Job Category</h4>
                        <select
                            class="w-full border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">All Categories</option>
                            <option>Technology</option>
                            <option>Healthcare</option>
                            <option>Education</option>
                            <option>Finance</option>
                            <option>Marketing</option>
                            <option>Sales</option>
                            <option>Design</option>
                            <option>Administrative</option>
                        </select>
                    </div>
                </div>

                <div class="mt-8 flex justify-end space-x-4">
                    <button @click="searchModal = false"
                        class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                        Cancel
                    </button>
                    <button @click="searchModal = false"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Apply Filters
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar Filters -->
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-24">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Filter Jobs</h3>

                    <!-- Job Type -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Job Type</h4>
                        <div class="space-y-2">
                            <template x-for="type in jobTypes" :key="type">
                                <div class="flex items-center">
                                    <input :id="'sidebar-type-' + type" type="checkbox" x-model="selectedJobTypes"
                                        :value="type"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label :for="'sidebar-type-' + type" class="ml-2 text-gray-700"
                                        x-text="type"></label>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Experience Level -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Experience Level</h4>
                        <div class="space-y-2">
                            <template x-for="level in experienceLevels" :key="level">
                                <div class="flex items-center">
                                    <input :id="'sidebar-exp-' + level.replace(' ', '-')" type="checkbox"
                                        x-model="selectedExperience" :value="level"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label :for="'sidebar-exp-' + level.replace(' ', '-')" class="ml-2 text-gray-700"
                                        x-text="level"></label>
                                </div>
                            </template>
                        </div>
                    </div>

                    <!-- Salary Range -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Salary Range</h4>
                        <div class="mb-2 flex justify-between">
                            <span x-text="'$' + salaryMin.toLocaleString()" class="text-gray-600"></span>
                            <span x-text="'$' + salaryMax.toLocaleString()" class="text-gray-600"></span>
                        </div>
                        <div class="relative pt-1">
                            <input type="range" min="0" max="200000" step="5000" x-model="salaryMin"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <input type="range" min="0" max="200000" step="5000" x-model="salaryMax"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer mt-2">
                        </div>
                    </div>

                    <!-- Job Category -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Job Category</h4>
                        <select
                            class="w-full border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">All Categories</option>
                            <option>Technology</option>
                            <option>Healthcare</option>
                            <option>Education</option>
                            <option>Finance</option>
                            <option>Marketing</option>
                            <option>Sales</option>
                            <option>Design</option>
                            <option>Administrative</option>
                        </select>
                    </div>

                    <!-- Location -->
                    <div class="mb-6">
                        <h4 class="font-medium text-gray-700 mb-3">Location</h4>
                        <div class="relative">
                            <i class="fa-solid fa-location-dot absolute left-3 top-3 text-gray-400"></i>
                            <input type="text" placeholder="City, State or Remote"
                                class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <button
                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                        Apply Filters
                    </button>
                </div>
            </div>

            <!-- Job Listings -->
            <div class="md:w-3/4">
                <div class="mb-6 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">Found 235 Jobs</h2>

                    <div class="flex items-center">
                        <span class="text-gray-600 mr-2">Sort by:</span>
                        <select x-model="sortBy"
                            class="border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="newest">Newest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="salary_high">Highest Salary</option>
                            <option value="salary_low">Lowest Salary</option>
                            <option value="relevant">Most Relevant</option>
                        </select>
                    </div>
                </div>

                <!-- Job Cards -->
                <div class="space-y-6">
                    <!-- Job Card 1 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                        <div class="flex justify-between">
                            <div class="flex">
                                <img src="/api/placeholder/64/64" alt="Company Logo"
                                    class="h-16 w-16 rounded-lg mr-4 object-contain bg-gray-100 p-2">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition">Senior
                                        Frontend Developer</h3>
                                    <p class="text-gray-600 mb-1">TechCorp Inc. • New York, NY</p>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Full-time</span>
                                        <span
                                            class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Remote</span>
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Senior
                                            Level</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-gray-800">$120,000 - $150,000</p>
                                <p class="text-gray-500 text-sm">Annual Salary</p>
                                <button class="mt-4 text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    <i class="fa-regular fa-bookmark mr-1"></i> Save Job
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 border-t pt-4">
                            <p class="text-gray-600">We're looking for an experienced frontend developer with expertise
                                in React, TypeScript, and modern CSS frameworks. This position offers a competitive
                                salary and comprehensive benefits package.</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="text-gray-500 text-sm">
                                <i class="fa-regular fa-clock mr-1"></i> Posted 2 days ago
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                View Details <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Job Card 2 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                        <div class="flex justify-between">
                            <div class="flex">
                                <img src="/api/placeholder/64/64" alt="Company Logo"
                                    class="h-16 w-16 rounded-lg mr-4 object-contain bg-gray-100 p-2">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition">Product
                                        Marketing Manager</h3>
                                    <p class="text-gray-600 mb-1">GrowthBoost • San Francisco, CA</p>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Full-time</span>
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Mid
                                            Level</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-gray-800">$90,000 - $110,000</p>
                                <p class="text-gray-500 text-sm">Annual Salary</p>
                                <button class="mt-4 text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    <i class="fa-regular fa-bookmark mr-1"></i> Save Job
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 border-t pt-4">
                            <p class="text-gray-600">Join our marketing team to lead product marketing initiatives.
                                You'll work closely with product and sales teams to develop positioning, messaging, and
                                go-to-market strategies for our growing product portfolio.</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="text-gray-500 text-sm">
                                <i class="fa-regular fa-clock mr-1"></i> Posted 1 week ago
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                View Details <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Job Card 3 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                        <div class="flex justify-between">
                            <div class="flex">
                                <img src="/api/placeholder/64/64" alt="Company Logo"
                                    class="h-16 w-16 rounded-lg mr-4 object-contain bg-gray-100 p-2">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition">UX/UI
                                        Designer</h3>
                                    <p class="text-gray-600 mb-1">DesignMasters • Remote</p>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Full-time</span>
                                        <span
                                            class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Remote</span>
                                        <span
                                            class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Contract</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-gray-800">$85,000 - $105,000</p>
                                <p class="text-gray-500 text-sm">Annual Salary</p>
                                <button class="mt-4 text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    <i class="fa-regular fa-bookmark mr-1"></i> Save Job
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 border-t pt-4">
                            <p class="text-gray-600">We're seeking a talented UX/UI Designer to create intuitive and
                                engaging user experiences for our digital products. You'll collaborate with product
                                managers and engineers to design beautiful interfaces that solve real user problems.</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="text-gray-500 text-sm">
                                <i class="fa-regular fa-clock mr-1"></i> Posted 3 days ago
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                View Details <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Job Card 4 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                        <div class="flex justify-between">
                            <div class="flex">
                                <img src="/api/placeholder/64/64" alt="Company Logo"
                                    class="h-16 w-16 rounded-lg mr-4 object-contain bg-gray-100 p-2">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition">Data
                                        Scientist</h3>
                                    <p class="text-gray-600 mb-1">DataInsight • Chicago, IL</p>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Full-time</span>
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Senior
                                            Level</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-gray-800">$130,000 - $160,000</p>
                                <p class="text-gray-500 text-sm">Annual Salary</p>
                                <button class="mt-4 text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    <i class="fa-regular fa-bookmark mr-1"></i> Save Job
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 border-t pt-4">
                            <p class="text-gray-600">Join our data science team to develop machine learning models and
                                analytics solutions. You'll work with large datasets to extract insights and build
                                predictive models to drive business decisions.</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="text-gray-500 text-sm">
                                <i class="fa-regular fa-clock mr-1"></i> Posted 5 days ago
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                View Details <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Job Card 5 -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
                        <div class="flex justify-between">
                            <div class="flex">
                                <img src="/api/placeholder/64/64" alt="Company Logo"
                                    class="h-16 w-16 rounded-lg mr-4 object-contain bg-gray-100 p-2">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 hover:text-blue-600 transition">DevOps
                                        Engineer</h3>
                                    <p class="text-gray-600 mb-1">CloudFusion • Remote</p>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Full-time</span>
                                        <span
                                            class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Remote</span>
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded">Mid
                                            Level</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-gray-800">$95,000 - $125,000</p>
                                <p class="text-gray-500 text-sm">Annual Salary</p>
                                <button class="mt-4 text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    <i class="fa-regular fa-bookmark mr-1"></i> Save Job
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 border-t pt-4">
                            <p class="text-gray-600">We are looking for a DevOps Engineer to help build and maintain our
                                cloud infrastructure. You'll work with our engineering team to automate deployments,
                                monitor systems, and ensure high availability.</p>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="text-gray-500 text-sm">
                                <i class="fa-regular fa-clock mr-1"></i> Posted 1 day ago
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                                View Details <i class="fa-solid fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Pagination -->
                <div class="mt-10 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-500 border hover:bg-gray-50 transition">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-3 py-2 rounded-md bg-blue-600 text-white border border-blue-600">1</a>
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-700 border hover:bg-gray-50 transition">2</a>
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-700 border hover:bg-gray-50 transition">3</a>
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-700 border hover:bg-gray-50 transition">4</a>
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-700 border hover:bg-gray-50 transition">5</a>
                        <span class="px-3 py-2 text-gray-600">...</span>
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-700 border hover:bg-gray-50 transition">24</a>
                        <a href="#"
                            class="px-3 py-2 rounded-md bg-white text-gray-500 border hover:bg-gray-50 transition">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>

            </div>

        </div>

    </main>
    

@endSection






 