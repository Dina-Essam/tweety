@if(auth()->user()->isNot($user))
    <form
        method="POST"
        action="{{route('follow',$user->username)}}"
    >
        @csrf
        <button
            type="submit"
            class="py-2 px-4 text-blue-700 text-xs hover:underline hover:text-blue-300"
        >
            {{auth()->user()->following($user)?'Unfollow Me':'Follow Me'}}
        </button>
    </form>
@endif
