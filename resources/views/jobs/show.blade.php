<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="max-w-2xl mx-auto mt-10 p-8 rounded-2xl shadow-lg border border-gray-200 
                bg-gradient-to-br from-purple-100 via-white to-blue-100">
        <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
        <h2 class="text-2xl font-bold text-gray-900">{{ $job['title'] }}</h2>
        <p class="mt-3 text-lg text-gray-700">
            This job pays 
            <span class="font-semibold text-green-600">{{ $job['salary'] }}</span> 
            per year.
        </p>

        <div class="mt-8 flex justify-between items-center">
            <a href="/jobs" 
               class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">
                ← Back to Jobs
            </a>

            <div class="flex gap-3">
                <a href="/jobs/{{ $job->id }}/edit" 
                   class="px-4 py-2 text-sm font-medium text-yellow-600 bg-yellow-100 rounded-lg hover:bg-yellow-200">
                    ✏️ Edit Job
                </a>

                <a href="#" 
                   class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</x-layout>
