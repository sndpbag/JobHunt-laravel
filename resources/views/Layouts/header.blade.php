<header class="bg-white shadow-sm sticky top-0 z-20">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-blue-600 font-bold text-2xl flex items-center">
                        <i class="fa-solid fa-briefcase mr-2"></i>
                        <span>JobHunt</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-blue-600 font-medium">Home</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Jobs</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Companies</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Career Advice</a>
                </nav>

                <!-- User Actions -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Login</a>
                    <a href="#"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition">Register</a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenu = !mobileMenu" class="md:hidden text-gray-600 hover:text-blue-600">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenu" x-cloak class="md:hidden mt-4 space-y-4 pb-4">
                <a href="#" class="block text-blue-600 font-medium">Home</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 font-medium">Jobs</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 font-medium">Companies</a>
                <a href="#" class="block text-gray-600 hover:text-blue-600 font-medium">Career Advice</a>
                <div class="pt-2 space-y-2">
                    <a href="#" class="block text-gray-600 hover:text-blue-600 font-medium">Login</a>
                    <a href="#"
                        class="block bg-blue-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition text-center">Register</a>
                </div>
            </div>
        </div>
    </header>