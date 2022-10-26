@foreach ($users as $user)
<x-card>
    <div class="flex-shrink-0 mr-3"><img class="w-10 h-10 rounded-full" src="{{$user->gravatar()}}" alt="{{$user->name}}"></div>
    <div>
        <div>
            <a href="{{route('profile', $user->name)}}" class="font-semibold block">{{$user->name}}</a>
        </div>
        <div class="mt-2">
            <form action="{{route('following.store', $user)}}" method="post">
                @csrf
                <x-primary-button>
                    @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                        Unfollow
                    @else 
                        Follow
                    @endif
                </x-primary-button>
            </form>
        </div>
        <div class="text-sm text-gray-600">
            @if ($user->pivot)
            {{$user->pivot->created_at->diffForHumans()}}
            @endif
        </div>
    </div>
</x-card>
@endforeach