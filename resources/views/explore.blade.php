<x-app>
    <div>
        <?php $index=1; ?>
        @forelse ($users as $user)
            @if($index%2 === 1 && !$loop->last)
                <div class="flex justify-center">
                    <a href="{{ $user->path() }}" class="flex items-center mb-5 inline-flex w-1/3">
                        <img src="{{ $user->avatar }}"
                            alt="{{ $user->username }}'s avatar"
                            width="60"
                            class="mr-4 rounded border-2 hover:border-blue-400"
                        >

                        <div>
                            <h4 class="font-bold pb-2 hover:text-blue-300">{{$user->name}}</h4>
                            <x-follow-link :user="$user"></x-follow-link>
                        </div>
                    </a>
                    <?php $index++; ?>
            @elseif(($index%2 === 0 && $loop->last)||($index%2 === 0))
                    <a href="{{ $user->path() }}" class="flex items-center mb-5 inline-flex w-1/3">
                        <img src="{{ $user->avatar }}"
                             alt="{{ $user->username }}'s avatar"
                             width="60"
                             class="mr-4 rounded border-2 hover:border-blue-400"
                        >

                        <div>
                            <h4 class="font-bold pb-2 hover:text-blue-300">{{$user->name}}</h4>
                            <x-follow-link :user="$user"></x-follow-link>
                        </div>
                    </a>
                    <?php $index++; ?>
                </div>
            @elseif($index%2 === 1 && $loop->last)
                <div class="flex justify-center">
                    <a href="{{ $user->path() }}" class="flex items-center mb-5 inline-flex w-1/3">
                        <img src="{{ $user->avatar }}"
                             alt="{{ $user->username }}'s avatar"
                             width="60"
                             class="mr-4 rounded border-2 hover:border-blue-400"
                        >

                        <div>
                            <h4 class="font-bold pb-2 hover:text-blue-300">{{$user->name}}</h4>
                            <x-follow-link :user="$user"></x-follow-link>
                        </div>
                    </a>
                </div>
            @endif
        @empty
        @endforelse

        {{ $users->links() }}
    </div>
</x-app>
