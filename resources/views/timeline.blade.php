<x-app-layout>
    <x-slot name="header">
        Timeline Page
    </x-slot>
    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-8">
                {{-- Form --}}
                    <x-card>
                        <form action="{{route('status.store')}}" method="post">
                            @csrf
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3"><img class="w-10 h-10 rounded-full" src="{{Auth::user()->gravatar()}}" alt="{{Auth::user()->name}}"></div>
                                <div class="w-full">
                                    <div class="font-semibold">{{Auth::user()->name}}</div>
                                    <div class="my-2">
                                        <textarea name="body" id="body" class="form-textarea w-full border-gray-300 rounded-xl resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200" placeholder="Whats On Your Mind?"></textarea>
                                        @error('body')
                                            <small class="text-red-600">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="text-right">
                                        <x-primary-button>Post</x-primary-button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </x-card>
                {{-- End Form --}}
                <div class="space-y-6 mt-5">
                    <div class="space-y-5">
                        <x-statuses :statuses="$statuses"></x-statuses>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <x-card>
                    <h1 class="font-semibold mb-5">Recently Follows</h1>
                        <div class="space-y-5">
                            <div class="flex items-center">
                                <x-following :users="Auth::user()->follows()->get()"></x-following>
                            </div>
                        </div>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>