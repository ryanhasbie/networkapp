<x-app-layout>
        <div class="border-b -mt-8 py-16">
            <x-container>
                <div class="flex">
                    <div class="flex-shrink-0 mr-3">
                        <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="rounded-full w-16 h-16 border-2 border-blue-500 p-1">
                    </div>
                    <div>
                        <h1 class="font-semibold mb-3">{{$user->name}}</h1>
                        <div class="text-sm text-gray-500">
                            Joined {{$user->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </x-container>
        </div>

        <div class="border-b mb-5">
            <x-container>
                <div class="flex">
                    <div class="px-10 py-3 text-center border-r border-l">
                        <div class="text-2xl font-semibold mb-2">{{$user->statuses->count()}}</div>
                        <div class="uppercase text-xs text-gray-600">Status</div>
                    </div>
                    <div class="px-10 py-3 text-center border-r">
                        <div class="text-2xl font-semibold mb-2">{{$user->follows->count()}}</div>
                        <div class="uppercase text-xs text-gray-600">Following</div>
                    </div>
                    <div class="px-10 py-3 text-center border-r">
                        <div class="text-2xl font-semibold mb-2">{{$user->followers->count()}}</div>
                        <div class="uppercase text-xs text-gray-600">Follower</div>
                    </div>
                </div>
            </x-container>
        </div>

        <x-container>
            <div class="grid grid-cols-2">
                <div class="space-y-5">
                    <x-statuses :statuses="$statuses">
                    </x-statuses>
                </div>
            </div>
        </x-container>
</x-app-layout>