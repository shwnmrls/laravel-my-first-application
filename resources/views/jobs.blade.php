<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <div class="max-w-3xl mx-auto mt-6 space-y-6">
        @foreach ($jobs as $job)
            <div class="p-6 rounded-xl shadow-md border border-gray-200 hover:shadow-xl transition 
                        bg-gradient-to-r from-indigo-100 via-white to-indigo-50">
                <h2 class="text-xl font-semibold text-gray-800">
                    <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                        <strong class="text-laracasts">{{ $job->employer->name }}:</strong> 
                        {{ $job['title'] }} pays {{ $job['salary'] }} per year.
                    </a>
                </h2>
                <p class="text-gray-700 mt-1">
                    Salary: <span class="font-medium text-green-600">{{ $job['salary'] }}</span> per year
                </p>

                <div class="px-4 py-4">
                    @foreach($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>

                <a href="/jobs/{{ $job['id'] }}" 
                   class="inline-block mt-4 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                    View Details
                </a>
            </div>
        @endforeach
        <div class="mt-6">
        {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
