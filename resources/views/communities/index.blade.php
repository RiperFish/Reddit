<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Communities') }}
        </h2>

    </x-slot>
    <div class="max-w-7xl mx-auto border p-4 mt-3">
        <a href="{{route('communities.create')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">New Community</a>
        <div class=" mt-5 grid grid-cols-2">
            <div>
                @foreach ($communities as $community)
                <div class="text-left shadow-sm bg-gray-200 rounded-md p-3 mb-3">
                    <div class="w-full">
                        <x-label :value="__('Name :')" />
                        <h2 class=" bg-gray-100 p-1 rounded mb-2"><a href="{{route('communities.show', $community)}}">{{$community->name}}</a></h2>
                        <x-label :value="__('Description : ')" />
                        <p class=" bg-gray-100 p-1 rounded">{{$community->description}}</p>
                    </div>
                    <div class="flex mt-4">
                        <a href="{{route('communities.edit', $community)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-3">Edit</a>
                        <form class="" method="POST" action="{{ route('communities.destroy',$community) }}">
                            @csrf
                            @method('DELETE')
                            <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Delete</button>
                        </form>

                    </div>
                </div>
                @endforeach
            </div>
            <div></div>
        </div>

    </div>


</x-app-layout>