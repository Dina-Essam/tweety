<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach(range(1,8) as $index)
        <li>
            <div class="flex items-center text-sm mb-4">
                <img
                    src="https://i.pravatar.cc/40"
                    alt=""
                    class="rounded-full mr-2"
                >
                Dina Essam
            </div>
        </li>
    @endforeach
</ul>
