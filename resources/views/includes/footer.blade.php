<div class="bg-gray-50 py-8 px-4">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-sm mt-28 mb-16">
        <!-- Pages -->
        <div>
            <h3 class="font-serif text-gray-900 text-xl mb-4">Pages</h3>
            <ul class="space-y-2">
                <li><a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900 font-light">Home</a></li>
                <li><a href='#' class="text-gray-600 hover:text-gray-900 font-light">Books</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-900 font-light">404</a></li>
            </ul>
        </div>

        <!-- Categories -->
        <div>
            <h3 class="font-serif text-gray-900 text-xl mb-4">Categories</h3>
            <ul class="space-y-2">
                <li><a href="{{ url('/books') }}" class="text-gray-600 hover:text-gray-900 font-light">Books</a></li>
                <li><a href="{{ url('/authors') }}" class="text-gray-600 hover:text-gray-900 font-light">Authors</a></li>
                <li><a href="{{ url('/loans') }}" class="text-gray-600 hover:text-gray-900 font-light">Loans</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="font-serif text-gray-900 text-xl mb-4">Contact</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-gray-900 font-light">1-234-567-890</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-900 font-light">Email</a></li>
            </ul>
        </div>

        <!-- Other -->
        <div>
            <h3 class="font-serif text-gray-900 text-xl mb-4">Other</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-gray-900 font-light">Other book stores</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-900 font-light">Rare books</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-900 font-light">Resources Planner</a></li>
            </ul>
        </div>
    </div>
</div>
