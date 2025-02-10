<nav class="bg-gray-50 text-black p-4 flex justify-between font-light">
  <a href="{{ url('/') }}" class="text-lg font-normal font-serif">Booker</a>
  <div>
      <a href="{{ url('/books') }}" class="mr-4 hover:underline">Libri</a>
      <a href="{{ url('/authors') }}" class="mr-4 hover:underline">Autori</a>
      <a href="{{ url('/loans') }}" class="hover:underline">Prestiti</a>
  </div>
</nav>
{{-- <nav class="bg-purple-900 text-white p-4 flex justify-between">
  <a href="{{ url('/') }}" class="text-lg font-bold">Biblioteca</a>
  <div>
      <a href="{{ url('/books') }}" class="mr-4 hover:underline">Libri</a>
      <a href="{{ url('/authors') }}" class="mr-4 hover:underline">Autori</a>
      <a href="{{ url('/loans') }}" class="hover:underline">Prestiti</a>
  </div>
</nav> --}}