<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (auth()->user()->hasVerifiedEmail())
                        <form class="flex h-full w-full flex-col overflow-y-scroll bg-white" method="post" action="{{route('create.save')}}">
                            @csrf
                            <div class="flex-1">
                                <!-- Divider container -->
                                <div class="space-y-6 py-6 sm:space-y-0 sm:divide-y sm:divide-gray-200 sm:py-0">
                                    <!-- Project name -->
                                    <div class="space-y-1 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label for="title" class="block text-sm font-medium text-gray-900 sm:mt-px sm:pt-2"> Document title </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <input type="text" name="title" id="title" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>

                                    <!-- Project description -->
                                    <div class="space-y-1 px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                        <div>
                                            <label for="description" class="block text-sm font-medium text-gray-900 sm:mt-px sm:pt-2"> Description </label>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <textarea id="description" name="description" rows="3" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                        </div>
                                    </div>

                                    <div class="px-6">
                                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                        <select id="subject" name="subject" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                            @foreach($subjects as $s)
                                                <option value="{{$s->id}}">{{$s->subject}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="px-6">
                                        <label for="privacy" class="block text-sm font-medium text-gray-700">Privacy</label>
                                        <select id="privacy" name="privacy" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                            <option selected value="0">Public</option>
                                            <option value="1">Private</option>
                                        </select>
                                    </div>

                                    <div class="py-4 px-6 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                        <label for="uploaded" class="text-sm font-medium text-gray-500">Attachment</label>
                                        <input id="uploaded" name="uploaded" type="file">
                                    </div>

                                </div>
                            </div>

                            <!-- Action buttons -->
                            <div class="flex-shrink-0 border-t border-gray-200 px-4 py-5 sm:px-6">
                                <div class="flex justify-end space-x-3">
                                    <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
                                    <button type="submit" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <p>You must verify your email before you can post anything on Study Search.</p>
                        <br>
                        <p>If you believe this is a mistake then please contact support.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>

</x-app-layout>