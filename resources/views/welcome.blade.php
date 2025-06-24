@include('layouts.header')

<!-- Main -->
<main class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center ">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Our Website</h2>
        <p class="text-lg text-gray-600 mb-8">
            আমরা আপনাকে দিচ্ছি সেরা সার্ভিস — দ্রুত, নিরাপদ ও বিশ্বাসযোগ্য!
        </p>
        <a href="#" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition">
            শুরু করুন
        </a>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
            <div class="bg-slate-400 hover:bg-slate-300 p-6 rounded-lg shadow-md transition-all">
                <h2 class="text-xl font-semibold mb-4">This is a Heading</h2>
                <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam inventore
                    corporis dignissimos ea eum saepe ratione, aliquid dolorem voluptate excepturi sequi similique cum,
                    eos quasi incidunt eius. Suscipit, obcaecati perferendis.</p>
                <a href="#"
                    class="inline-block bg-fuchsia-500 hover:bg-fuchsia-600 text-white font-medium px-4 py-2 rounded-md transition">Read
                    More</a>
            </div>

            <div class="bg-slate-200 hover:bg-slate-100 p-6 rounded-lg shadow-md transition-all">
                <h2 class="text-xl font-semibold mb-4">This is a Heading</h2>
                <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam inventore
                    corporis dignissimos ea eum saepe ratione, aliquid dolorem voluptate excepturi sequi similique cum,
                    eos quasi incidunt eius. Suscipit, obcaecati perferendis.</p>
                <a href="#"
                    class="inline-block bg-fuchsia-500 hover:bg-fuchsia-600 text-white font-medium px-4 py-2 rounded-md transition">Read
                    More</a>
            </div>
        </div>

    </div>
</main>

@include('layouts.footer')