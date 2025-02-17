@extends('layouts.app')

@section('content')
<div class="bg-gray-200 text-black py-32 border border-b-gray-400">
    <div class="container mx-auto text-center px-6">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-normal mb-6 leading-tight text-black font-serif">
            Add a new book
        </h1>
    </div>
</div>

<div class="mx-auto p-6">
    <form action="{{ url('/books') }}" method="POST" class="bg-white shadow-md rounded-2xl p-10 mb-4 max-w-4xl mx-auto">
        @csrf
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
            <input type="text" name="title" id="title" required
                   class="rounded-lg appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="author">Author</label>
            <input type="text" name="author_name" id="author" required
                   class="rounded-lg appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   placeholder="Enter the author's name and surname">
        </div>
        
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="year">Year of publication</label>
            <input type="number" name="year" id="year" required
                   class="rounded-lg appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Availability</label>
            <div class="flex items-center">
                <input type="radio" name="status" value="1" id="available" class="mr-2" checked>
                <label for="available" class="text-gray-700 mr-4">Available</label>

                <input type="radio" name="status" value="0" id="not_available" class="mr-2">
                <label for="not_available" class="text-gray-700">Not available</label>
            </div>
        </div>
        
        <div class="flex items-center justify-between pt-6">
            <button type="submit"
                    class="bg-[#ccff00] text-black font-semibold rounded-xl py-2 px-10 text-lg">
                Salva
            </button>
            <a href="{{ url('/books') }}" class="text-gray-900">Annulla</a>
        </div>
    </form>
</div>
@endsection
