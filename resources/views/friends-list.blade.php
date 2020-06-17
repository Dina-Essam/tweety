<div class=" bg-blue-100 rounded-lg p-4">
    <h3 class="font-bold text-xl mb-4">Friends</h3>
    <ul>
        @forelse(auth()->user()->follows as $friend)
            <li>
                <div class="flex items-center text-sm mb-4">
                    <a href="{{route('profile',$friend->username)}}">
                        <img
                            src={{$friend->getAvatarAttribute(40)}}
                            alt=""
                            class="rounded-full mr-2"
                        >
                    </a>
                    <a href="{{route('profile',$friend->username)}}">
                        {{$friend->name}}
                    </a>
                </div>
            </li>
        @empty
            <li>No Friends yet.</li>
        @endforelse
    </ul>
</div>
