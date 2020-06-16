<x-master>
    <section class="'px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if(auth()->check())
                    <div class="lg:w-32">
                        @include('sidebar-links')
                    </div>
                @endif
                <div class="lg:flex-1 mx-10">
                    {{$slot}}
                </div>
                @if(auth()->check())
                    <div class="lg:w-1/6">
                        @include('friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
