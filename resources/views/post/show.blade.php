<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-2xl mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img class="rounded-full h-20 w-20" src="{{ Storage::urL($post->user->image) }}"
                            alt="{{ $post->user->username }}" />
                    @else
                        <div class="relative w-10 h-10 overflow-hidden bg-neutral-secondary-medium rounded-full">
                            <svg class="absolute w-12 h-12 text-body-subtle -left-1" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    @endif
                    <div>
                        <h3>{{ $post->user->username }}</h3>
                        <div class="flex gap-2">
                            {{ str_word_count(strip_tags($post->content)) }}
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
