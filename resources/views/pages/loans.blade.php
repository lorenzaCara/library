@extends('layouts.app')

@section('content')
    <div class="bg-[#ccff00] text-black py-32 border border-b-gray-400">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-normal mb-6 leading-tight text-black font-serif">
                Loans
            </h1>
        </div>
    </div>

    <div class="bg-gray-200 py-28 px-4">
        <div class="max-w-7xl mx-auto">
            <!-- List of Authors -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($loans as $loan)
                    <div class="bg-white bg-opacity-50 rounded-2xl rounded-t-none border-t-black border-2 overflow-hidden">
                            <div class="p-6">
                                <h3 class="text-xl font-serif text-black transition duration-300 h-14">{{ $loan->book_title }}</h3>
                                <p class="text-lg text-gray-600">An author known for their extraordinary works.</p>
                                <p class="text-gray-600 mb-2 flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                    <span class="font-semibold">Loaned to:</span> {{ $loan->borrower_name }}</p>
                                <p class="text-gray-600 flex gap-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    <span class="font-semibold">Loan date:</span> {{ \Carbon\Carbon::parse($loan->loan_date)->format('d-m-Y') }}</p>
                                <p class="text-gray-600 flex gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <span class="font-semibold">Return date:</span> {{ \Carbon\Carbon::parse($loan->return_date)->format('d-m-Y') }}</p>
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
