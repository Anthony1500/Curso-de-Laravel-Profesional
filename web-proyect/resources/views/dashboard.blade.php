<x-app-layout>
    <x-container>
        <form action="" class="px-4 mb-8">
        <textarea name="body"   rows="2" class="w-full mb-2 p-0 text-white bg-transparent border-0 border-b-2 border-slate-800 focus:border-b-slate-700 focus:ring-0 resize-none overflow-hidden" placeholder="Tu comentario..."></textarea>
<input type="submit"
class="px-4 py-2 bg-yellow-400 text-gray-800 font-semibold sm:rounded-lg text-xs"
>
        </form>
        @foreach ($posts as $post)
        <a class="px-6 mb-2 flex items-center gap-2 font-mediun text-slate-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                <path fill-rule="evenodd" d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0Zm-5-2a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM8 9c-1.825 0-3.422.977-4.295 2.437A5.49 5.49 0 0 0 8 13.5a5.49 5.49 0 0 0 4.294-2.063A4.997 4.997 0 0 0 8 9Z" clip-rule="evenodd" />
              </svg>

            {{$post->user->name}}
        </a>
            <x-card class="mb-4">
                {{ $post->body }}
<div class="text-xs text-slate-500">
    {{$post->created_at->diffForHumans()}}
</div>
        </x-card>
        @endforeach
    </x-container>

</x-app-layout>
