<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Search for anything here!
                    <form>
                        <div class="pb-3">
                            <div>
                                <div class="pb-3">
                                    <div>
                                        <label for="location" class="block text-sm font-medium text-gray-700">Subject</label>
                                        <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                            <option>United States</option>
                                            <option selected>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="max-w-full transform  divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
                                    <div class="relative">
                                        <input type="text" class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." role="combobox" aria-expanded="false" aria-controls="options">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <x-button>Search</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>