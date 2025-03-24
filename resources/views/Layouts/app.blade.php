<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-50 font-sans" x-data="{ 
  mobileMenu: false,
  searchModal: false,
  salaryMin: 30000,
  salaryMax: 150000,
  selectedJobTypes: [],
  jobTypes: ['Full-time', 'Part-time', 'Remote', 'Contract', 'Freelance', 'Internship'],
  selectedExperience: [],
  experienceLevels: ['Entry Level', 'Mid Level', 'Senior Level', 'Manager', 'Director'],
  sortBy: 'newest'
}">
    <!-- Header -->
 @include("../Layouts/header")

    <main>
        @yield("container")
    </main>

      <!-- Footer -->
  @include("../Layouts/footer");
</body>
</html>