<div class=" bg-blue-100 rounded-lg p-4">
    <h3 class="font-bold text-xl mb-4">Friends</h3>
    <ul>
        @foreach(auth()->user()->follows as $friend)
            <li>
                <div class="flex items-center text-sm mb-4">
                    <a href="{{route('profile',$friend->name)}}">
                        <img
                            src={{$friend->getAvatarAttribute(40)}}
                            alt=""
                            class="rounded-full mr-2"
                        >
                    </a>
                    <a href="{{route('profile',$friend->name)}}">
                        {{$friend->name}}
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
