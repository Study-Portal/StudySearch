<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="pb-3">
                            <div>
                                <div class="pb-3">
                                    <div>
                                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                        <select id="subject" name="subject" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                            @foreach($subjects as $s)
                                                <option value="{{$s->id}}">{{$s->subject}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
{{--                    Search for anything here!--}}
                        <div class="pb-3">
                            <div>
                                <div class="max-w-full transform  divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
                                    <div class="relative">
                                        <input id="search" type="text" class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-800 placeholder-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." role="combobox" aria-expanded="false" aria-controls="options">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <x-button>Search</x-button>
                </div>
            </div>

            </form>


        </div>
    </div>
</x-app-layout>