<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fully Responsive Hero</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-600">আমার ওয়েবসাইট</h1>
      <nav class="space-x-4 mt-2 md:mt-0">
        <a href="#" class="text-gray-700 hover:text-blue-500">হোম</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">সেবা</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">যোগাযোগ</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-50">
    <div class="max-w-7xl mx-auto px-4 py-16 flex flex-col-reverse lg:flex-row items-center">
      
      <!-- Text Section -->
      <div class="w-full lg:w-1/2 text-center lg:text-left mt-10 lg:mt-0">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-800 mb-4">
          স্বাগতম আমাদের ওয়েবসাইটে
        </h2>
        <p class="text-gray-600 text-base sm:text-lg mb-6">
          এখানে আপনি খুঁজে পাবেন আপনার প্রয়োজনীয় সেবা, গাইডলাইন ও সহযোগিতা। আমাদের সাথেই থাকুন!
        </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg text-base sm:text-lg hover:bg-blue-700 transition">
          শুরু করুন
        </a>
      </div>

      <!-- Image Section -->
      <div class="w-full lg:w-1/2 flex justify-center">
        <img src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Hero Image" class="w-full max-w-md rounded-lg shadow-lg object-cover">
      </div>

    </div>
  </section>

