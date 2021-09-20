<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($post->title)  }}
        </h2>
    </x-slot>
    <!-- Post details ( Content ) -->
    <div class="max-w-7xl mx-auto border p-4 mt-3">
        <div class="text-left shadow-sm bg-gray-100 rounded-3xl p-5 mb-3 w-full">
            <p class="mb-4 text-sm"><span class="font-bold">c/{{$community->name}}</span> . Posted by u/{{$post->author_name}} {{$post->created_at->diffForHumans()}}</p>
            <h1 class=" bg-gray-100 py-1 rounded mb-2 font-semibold text-2xl">{{$post->title}}</h1>
            <br>
            <p class=" bg-gray-100 p-1 rounded">{{$post->post_text}}</p>
        </div>
    </div>


</x-app-layout>