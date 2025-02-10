@extends('layouts.app')

@section('content')
    <div class="bg-gray-200 text-black py-32 border border-b-gray-400">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-normal mb-6 leading-tight text-black font-serif">
                {{ $book->title ?? 'Book not found' }}
            </h1>
        </div>
    </div>

    <div class="mx-auto px-6 py-12">

        <!-- Book Information Card -->
        <div class="bg-white rounded-2xl p-8 max-w-3xl mx-auto">
            <p class="text-lg text-gray-800 mb-4">
                <span class="font-serif text-gray-900 text-2xl">Author:</span> {{ $book->author_name ?? 'N/A' }} {{ $book->author_surname ?? '' }}
            </p>
            <p class="text-lg text-gray-800 mb-4">
                <span class="font-serif text-gray-900 text-2xl">Year of Publication:</span> {{ $book->published_year ?? 'N/A' }}
            </p>
            <p class="text-lg text-gray-800 mb-6">
                <span class="font-serif text-gray-900 text-2xl">Availability:</span> 
                <span class="{{ isset($book->available) && $book->available ? 'text-green-600 font-semibold' : 'text-red-600 font-semibold' }}">
                    {{ isset($book->available) && $book->available ? 'Available' : 'Not available' }}
                </span>
            </p>

            <!-- Button to return to the book list -->
            <div class="text-center">
                <a href="{{ url('/books') }}" class="bg-[#ccff00] text-black font-semibold rounded-xl py-2 px-10 text-lg">
                    Back to list
                </a>
            </div>
        </div>
    </div>
@endsection
