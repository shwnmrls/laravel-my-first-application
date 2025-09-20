<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <div class="max-w-3xl mx-auto mt-6 space-y-6">
        @foreach ($jobs as $job)
            <div class="p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-xl transition 
                        bg-gradient-to-r from-indigo-100 via-white to-indigo-50">
                <h2 class="text-xl font-semibold text-gray-800">
                    <a href="/jobs/{{ $job['id'] }}" class="text-blue-700 hover:underline">
                        {{ $job['title'] }}
                    </a>
                </h2>
                <p class="text-gray-700 mt-1">
                    Salary: <span class="font-medium text-green-600">{{ $job['salary'] }}</span> per year
                </p>
                <a href="/jobs/{{ $job['id'] }}" 
                   class="inline-block mt-4 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                    View Details
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
