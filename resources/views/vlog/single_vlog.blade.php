@include('layouts.header')

<!-- Main -->
<main class="py-16 bg-white">
    <!-- <div class="max-w-7xl mx-auto px-4 text-center pb-10">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Our Website</h2>
        <p class="text-lg text-gray-600 mb-8">
            আমরা আপনাকে দিচ্ছি সেরা সার্ভিস — দ্রুত, নিরাপদ ও বিশ্বাসযোগ্য!
        </p>
        <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition">
            শুরু করুন
        </a>
    </div> -->

    <div class="max-w-7xl mx-auto px-4 py-5 bg-blue-50 ">
        <div>
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300">

                    <!-- Card Image -->
                    <img class="w-full h-52 object-cover" src="{{ $vlog->image }}" alt="Blog Image" />

                    <div class="p-6">
                        <!-- Category -->
                        <span
                            class="inline-block bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full uppercase font-semibold mb-2">{{ $vlog->category }}</span>

                        <!-- Title -->
                        <h2 class="text-xl font-bold text-gray-800 mb-2 hover:text-blue-600 transition">
                            {{ $vlog->name }}
                        </h2>

                        <!-- Description -->
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($vlog->description, 20) }}
                        </p>

                        <!-- Author + Button -->
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center">
                                <img class="w-10 h-10 rounded-full mr-3"
                                    src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">রাকিব হোসেন</p>
                                    <p class="text-xs text-gray-500">২৫ জুন ২০২৫</p>
                                </div>
                            </div>
                            <!-- Show Details Button -->
                            <a href="{{ route('single_vlog', [$vlog->id]) }}"
                                class="bg-blue-600 text-white text-sm px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('layouts.footer')