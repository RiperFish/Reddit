<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Communities') }}
        </h2>

    </x-slot>
    <div class="max-w-7xl mx-auto border p-4 mt-3">
        @if (session('message'))
        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 mb-6" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
            </svg>
            <p>{{session('message')}}</p>
        </div>
        @endif
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