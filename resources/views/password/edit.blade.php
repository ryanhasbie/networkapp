<x-app-layout>
    <x-slot name="header">
        Change Your Password.
    </x-slot>
    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                <x-card>
                    <form action="{{route('update.password')}}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-5">
                        <x-input-label>Current Password</x-input-label>
                        <x-text-input class="mt-1 w-full" type="password" name="current_password"></x-text-input>
                        @error('current_password')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-input-label>New Password</x-input-label>
                        <x-text-input class="mt-1 w-full" type="password" name="password"></x-text-input>
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <x-input-label>Password Confirmation</x-input-label>
                        <x-text-input class="mt-1 w-full" type="password" name="password_confirmation"></x-text-input>
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                        @enderror
                    </div>
                    <x-primary-button>Change</x-primary-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>