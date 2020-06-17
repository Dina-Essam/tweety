<ul>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="{{route('home')}}">
            Home
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="{{route('explore')}}">
            Explore
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="/">
            Notifications
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="/">
            Messages
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="/">
            Bookmarks
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="/">
            Lists
        </a>
    </li>
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-blue-300" href="{{route('profile',auth()->user()->username)}}">
            Profile
        </a>
    </li>
    <li>
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button class="font-bold text-lg hover:text-blue-300">
                Logout
            </button>
        </form>
    </li>
</ul>
