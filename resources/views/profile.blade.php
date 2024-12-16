<x-app-layout>
    <x-container>
        <form action="{{ route('posts.store') }}" class="px-4 mb-8" method="POST">
            
        </form>
        <input 
            type="submit" 
            class="px-4 py-2 bg-yellow-400 text-gray-800 font-semibold sm:rounded-lg text-xs mb-4"
            value="Add Friend">

        @foreach ($posts as $post )
            <x-card class="mb-4">
                {{ $post->body }}
                <div class="text-xs text-slate-500">
                    {{ $post->created_at->diffforHumans() }}
                </div>
            </x-card>
        @endforeach
    </x-container>
</x-app-layout>
