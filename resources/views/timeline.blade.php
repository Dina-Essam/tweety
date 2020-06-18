<div class="border border-gray-300 rounded-lg mb-6">
    @forelse($tweets as $tweet)
        @include('tweet')
    @empty
        <p class="p-4">No Tweets Yet.</p>
    @endforelse
        {{ $tweets->links() }}
</div>
