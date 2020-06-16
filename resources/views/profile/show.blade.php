<x-app>
    <header class="mb-6 relative">
        <img
            src="{{ asset('images/defult_profile_banner.jpg') }}"
            alt=""
            class="rounded-lg mb-2"
            width="100%"
            height="100%"
        >
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                <a href="" class="bg-white-500 rounded-full border mr-2 border-gray-300 py-2 px-4 text-black text-xs">Edit Profile</a>
                <form
                    method="POST"
                    action="{{route('follow',$user->name)}}"
                >
                    @csrf
                    <button
                        type="submit"
                        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
                    >
                        {{auth()->user()->following($user)?'Unfollow Me':'Follow Me'}}
                    </button>
                </form>
            </div>
        </div>
        <p class="text-sm">Be good and shall always see good in everything and everyone and even in yourself.
            I want to be your favorite hello and your hardest goodbye.The implications of this in social media are massive. Social already blurs – and is on the way to obliterating – the line between professional and personal. Combined with our nature to code-switch, that means two huge shifts in how we need to approach social as brands.</p>
        <img
            src="{{$user->getAvatarAttribute(150)}}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="left:calc(50% - 75px);top:200px;"
        >
    </header>

    @include('timeline',
    [
        'tweets'=>$user->tweets
    ])
</x-app>
