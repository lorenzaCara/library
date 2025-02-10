@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gray-200 text-white py-32 border border-b-gray-400">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-normal mb-6 leading-tight text-black font-serif">
                Thoughts, stories and ideas on Books.
            </h1>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-4 max-w-lg mx-auto">
                <input type="text" placeholder="Looking for a book...?" 
                    class="w-full px-4 py-3 rounded-xl text-black focus:outline-none focus:ring-2 focus:ring-white">
                <button class="bg-[#ccff00] text-black font-semibold rounded-xl py-2 px-10 text-lg transition duration-300 transform hover:scale-105">
                    Search
                </button>
            </div>
        </div>
    </div>

    <div class='container max-w-7xl mx-auto mt-28 px-4'>
        <div class='grid grid-cols-1 md:grid-cols-2 gap-6'>
            <img src="https://images.pexels.com/photos/159711/books-bookstore-book-reading-159711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                alt="Libri Popolari" 
                class="w-full h-72 sm:h-96 object-cover rounded-2xl">
            <div class='border-t-2 border-black'>
                <h3 class="text-3xl sm:text-4xl font-light mb-6 text-gray-800 mt-10 sm:mt-20 font-serif">
                    Popular books
                </h3>
                <p class="text-gray-800 mb-6 text-sm sm:text-base">
                    Explore the most read books and the latest trends in our library, carefully curated for you. From bestsellers to timeless classics and hidden gems, find your next great read. Whether you seek inspiration, knowledge, or adventure, our collection has something for every reader.
                </p>
                <a href="{{ url('/books') }}" class="bg-white rounded-full inline-block text-black font-medium py-1 px-6">
                    Find out more
                </a>
            </div>
        </div>

        <div class='mt-16 sm:mt-28'>
            <div class='grid grid-cols-1 lg:grid-cols-2 gap-4'>
                <div class='grid grid-cols-1 sm:grid-cols-2 gap-6'>
                    <img src="https://images.pexels.com/photos/1995842/pexels-photo-1995842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                        alt="Famous Authors" 
                        class="w-full h-72 sm:h-96 object-cover rounded-2xl">
                    <div class='border-t-2 border-black'>
                        <h3 class="text-3xl sm:text-4xl font-light mb-6 text-gray-800 mt-10 sm:mt-20 font-serif">
                            Famous authors
                        </h3>
                        <p class="text-gray-800 mb-6 text-sm sm:text-base">
                            Read the works of the most well-known and appreciated authors in the community.
                        </p>
                        <a href="{{ url('/authors') }}" class="bg-white rounded-full inline-block text-black font-medium py-1 px-6">
                            Find out more
                        </a>
                    </div>
                </div>
                <div class='grid grid-cols-1 sm:grid-cols-2 gap-6'>
                    <img src="https://images.pexels.com/photos/373465/pexels-photo-373465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                        alt="Gestione Prestiti" 
                        class="w-full h-72 sm:h-96 object-cover rounded-2xl">
                    <div class='border-t-2 border-black'>
                        <h3 class="text-3xl sm:text-4xl font-light mb-6 text-gray-800 mt-10 sm:mt-20 font-serif">
                            Loan Management
                        </h3>
                        <p class="text-gray-800 mb-6 text-sm sm:text-base">
                            Easily keep track of your loans and due dates.
                        </p>
                        <a href="{{ url('/loans') }}" class="bg-white rounded-full inline-block text-black font-medium py-1 px-6">
                            Find out more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#ccff00] py-24 sm:py-48 px-4 mt-16 sm:mt-28">
        <div class='grid grid-cols-1 lg:grid-cols-2 container mx-auto gap-8'>
            <div>
                <h2 class="text-4xl sm:text-5xl font-normal mb-6 leading-tight text-black font-serif">
                    Get the best sent to your inbox, every month
                </h2>
                <p class="text-gray-700 mb-4 text-sm sm:text-base">
                    Expect weekly detailed reads about new technologies, growing trends, and the latest developments with Web3.
                </p>
            </div>
            <form class="flex flex-col sm:flex-row justify-center items-center gap-2 lg:max-w-md w-full mx-auto">
                <input 
                    type="text" 
                    placeholder="Subscribe..." 
                    class="w-full px-4 py-3 rounded-xl text-black focus:outline-none focus:ring-2 focus:ring-white"
                />
                <button 
                    type="submit"
                    class="bg-black text-[#ccff00] font-semibold rounded-xl py-2 px-10 text-lg transition duration-300 transform hover:scale-105"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection

{{-- @extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-900 via-sky-700 to-blue-900 text-white py-32 rounded-3xl">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-6xl font-extrabold mb-6 leading-tight text-white">Benvenuto nella Biblioteca</h1>
            <p class="text-lg mb-8 max-w-lg mx-auto">Esplora la nostra vasta collezione di libri, scopri nuovi autori e gestisci facilmente i tuoi prestiti con una navigazione intuitiva.</p>
            <a href="{{ url('/books') }}" class="bg-white text-blue-900 font-semibold py-4 px-8 rounded-3xl text-lg transition duration-300 transform hover:scale-105">
                Visualizza Libri
            </a>
        </div>
    </div>

    <!-- Sezione Promozionale con Immagini di Copertura -->
    <div class="container mx-auto py-20 px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card: Libri Popolari -->
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 overflow-hidden border border-gray-200">
            <img src="https://images.pexels.com/photos/159711/books-bookstore-book-reading-159711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Libri Popolari" class="w-full h-64 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Libri Popolari</h3>
                <p class="text-gray-600 mb-4">Scopri i libri più letti e le tendenze della nostra biblioteca, selezionati per te.</p>
                <a href="{{ url('/books') }}" class="inline-block text-blue-800 font-semibold hover:text-blue-900 transition duration-300">Scopri di più</a>
            </div>
        </div>

        <!-- Card: Autori Famosi -->
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 overflow-hidden border border-gray-200">
            <img src="https://images.pexels.com/photos/373465/pexels-photo-373465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Autori Famosi" class="w-full h-64 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Autori Famosi</h3>
                <p class="text-gray-600 mb-4">Leggi le opere degli autori più conosciuti e apprezzati da tutta la comunità.</p>
                <a href="{{ url('/authors') }}" class="inline-block text-blue-800 font-semibold hover:text-blue-900 transition duration-300">Scopri gli autori</a>
            </div>
        </div>

        <!-- Card: Gestione Prestiti -->
        <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 overflow-hidden border border-gray-200">
            <img src="https://images.pexels.com/photos/1995842/pexels-photo-1995842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gestione Prestiti" class="w-full h-64 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-4 text-gray-800">Gestione Prestiti</h3>
                <p class="text-gray-600 mb-4">Tieni traccia dei tuoi prestiti e delle scadenze in modo semplice e veloce.</p>
                <a href="{{ url('/loans') }}" class="inline-block text-blue-800 font-semibold hover:text-blue-900 transition duration-300">Gestisci i tuoi prestiti</a>
            </div>
        </div>
    </div>

    <!-- Testimonianze Sezione -->
    <div class="bg-gray-50 py-20">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Cosa dicono i nostri utenti</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Testimonianza 1 -->
                <div class="w-80 bg-white shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 rounded-lg p-6 border border-gray-200">
                    <p class="text-gray-600 mb-4">"La biblioteca ha una vasta selezione di libri. Facile da usare e ben organizzata!"</p>
                    <p class="font-semibold text-gray-800">Maria Rossi</p>
                    <p class="text-gray-500">Utente</p>
                </div>
                <!-- Testimonianza 2 -->
                <div class="w-80 bg-white shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-300 rounded-lg p-6 border border-gray-200">
                    <p class="text-gray-600 mb-4">"Posso facilmente tenere traccia dei miei prestiti e delle scadenze. Ottima esperienza!"</p>
                    <p class="font-semibold text-gray-800">Giovanni Bianchi</p>
                    <p class="text-gray-500">Utente</p>
                </div>
            </div>
        </div>
    </div>

@endsection --}}