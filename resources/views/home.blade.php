
{{-- here we only write the middle codes of the page, the rest is inherited from layout --}}
{{-- we use <x-layout> tag to inherit the layout  --}}
<x-layout>
    {{-- here we set the dynamic title for the layout using x-slot:title --}}
    <x-slot:title>
        Welcome
    </x-slot:title>

    {{-- here we set the contents of the page --}}
    <div class="max-w-2xl mx-auto">
        {{-- Here we use blade templating foreach loop to loop through the array --}}
        @foreach ($data as $chirp )
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $chirp['author'] }}</div>
                        <div class="mt-1">{{ $chirp['message'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div> 
                    </div>          
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
