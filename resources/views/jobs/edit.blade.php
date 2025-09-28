<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Update the details below.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset 
                                @error('title') ring-red-500 @else ring-gray-300 @enderror
                                focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title" 
                                    value="{{ old('title', $job->title) }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 
                                    placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Shift Leader" required>
                            </div>
                            @error('title')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset 
                                @error('salary') ring-red-500 @else ring-gray-300 @enderror
                                focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary" id="salary" 
                                    value="{{ old('salary', $job->salary) }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 
                                    placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$50,000 Per Year" required>
                            </div>
                            @error('salary')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="employer_id" class="block text-sm font-medium leading-6 text-gray-900">Employer</label>
                        <div class="mt-2">
                            <select name="employer_id" id="employer_id"
                                class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm
                                ring-1 ring-inset @error('employer_id') ring-red-500 @else ring-gray-300 @enderror
                                focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="">-- Select Employer --</option>
                                @foreach($employers as $employer)
                                    <option value="{{ $employer->id }}" 
                                        {{ old('employer_id', $job->employer_id) == $employer->id ? 'selected' : '' }}>
                                        {{ $employer->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('employer_id')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>

            <div class="flex items-center gap-x-4">
                <button type="button"
                    onclick="document.getElementById('delete-form').submit();"
                    class="text-sm font-semibold text-red-600 hover:text-red-800">
                    Delete
                </button>

                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm 
                    hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
                    focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update
                </button>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
