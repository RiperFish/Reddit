<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Community') }}
        </h2>

    </x-slot>
    <h1>{{ Auth::user()->name }}</h1>
    <div class="flex-shrink-0 flex items-center w-full">

        <form class=" mx-auto w-1/2" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
            </div>

            <!-- Topics -->
            <div class="mt-4">
                <x-label for="topics" :value="__('Topics')" />

                @foreach ($topics as $topic)
                <div class="flex items-center">
                    <x-checkbox id="{{$topic->id}}" class="block mr-1" name="topics[]" required autofocus />
                    {{$topic->name}}
                </div>
                <br>
                @endforeach


            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Create Community') }}
                </x-button>
            </div>
        </form>
    </div>


</x-app-layout>