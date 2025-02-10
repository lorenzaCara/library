@extends('layouts.app')

@section('content')
    <div class="bg-[#ccff00] text-black py-32 border border-b-gray-400">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-normal mb-6 leading-tight text-black font-serif">
                Popular books
            </h1>
        </div>
    </div>

    <div class="bg-gray-200 py-32 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Elenco Libri -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($books as $book)
                    <div class="bg-white bg-opacity-50 rounded-2xl rounded-t-none border-t-black border-2 overflow-hidden">
                        <a href="{{ url('/books/' . $book->id) }}" class="block">
                            <div class="p-6">
                                <h3 class="text-xl font-serif text-black transition duration-300 h-12">{{ $book->title }}</h3>
                                <p class="text-gray-600 mt-2 font-light">di <span class="font-medium">{{ $book->author_name }} {{ $book->author_surname }}</span></p>
                            </div>
                            <div class="bg-[#ccff00] bg-opacity-50 py-3 text-center text-black font-medium">Find out more</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
