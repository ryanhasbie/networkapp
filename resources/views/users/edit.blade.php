<x-app-layout>
    <x-slot name="header">
        Update Your Profile Information.
    </x-slot>
    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                <x-card>
                    <form action="{{route('update')}}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-5">
                        <x-input-label>Username</x-input-label>
                        <x-text-input class="mt-1 w-full" type="text" name="username" value="{{old('username', Auth::user()->username)}}"></x-text-input>
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-input-label>Email</x-input-label>
                        <x-text-input class="mt-1 w-full" type="email" name="email" value="{{old('email', Auth::user()->email)}}"></x-text-input>
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-input-label>Name</x-input-label>
                        <x-text-input class="mt-1 w-full" type="text" name="name" value="{{old('name', Auth::user()->name)}}"></x-text-input>
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <x-primary-button>Update</x-primary-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>