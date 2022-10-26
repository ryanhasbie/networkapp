<x-app-layout>
    <x-container>
        <div class="grid grid-cols-4 gap-5">
            <x-following :users="$users"></x-following>
        </div>
        <div class="mt-6">
            {{$users->links()}}
        </div>
    </x-container>
</x-app-layout>