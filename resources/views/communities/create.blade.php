<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Community') }}
        </h2>

    </x-slot>
    <h1>{{ Auth::user()->name }}</h1>
    <div class="flex-shrink-0 flex flex-col justify-center items-center w-full">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form class=" mx-auto w-1/2" method="POST" action="{{ route('communities.store') }}">
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
                <select name="topics[]" multiple class=" w-full select2">
                    @foreach ($topics as $topic)
                        <option value={{$topic->id}} class="block mr-1">{{$topic->name}} </option>
                    @endforeach
                </select>



            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Create Community') }}
                </x-button>
            </div>
        </form>
    </div>


</x-app-layout>