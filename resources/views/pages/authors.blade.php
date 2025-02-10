@extends('layouts.app')

@section('content')
    <div class="bg-[#ccff00] text-black py-32 border border-b-gray-400">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-normal mb-6 leading-tight text-black font-serif">
                Best authors
            </h1>
        </div>
    </div>

    <div class="bg-gray-200 py-28 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- List of Authors -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($authors as $author)
                    <div class="bg-white bg-opacity-50 rounded-2xl rounded-t-none border-t-black border-2 overflow-hidden">
                            <div class="p-6">
                                <h3 class="text-xl font-serif text-black transition duration-300">{{ $author->name }} {{ $author->surname }}</h3>
                                <p class="text-lg text-gray-600">An author known for their extraordinary works.</p>
                            </div>
                            <div class="bg-[#ccff00] bg-opacity-50 py-3 text-center text-black font-medium">Find out more</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Button to return home -->
    <div class="py-28 text-center bg-gray-200">
        <a href='{{ url('/') }}' class="bg-black text-[#ccff00] font-semibold rounded-2xl py-4 px-10 text-lg">
            Go back home
        </a>
    </div>
@endsection
