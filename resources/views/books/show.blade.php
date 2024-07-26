@extends('app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-200 mt-6">
        <h2 class="text-3xl font-extrabold mb-6 text-gray-900">{{ $book->title }}</h2>
        <div class="bg-gray-50 p-4 rounded-lg shadow-inner mb-6">
            <p class="text-lg mb-2"><strong class="text-gray-700">Auteur:</strong> {{ $book->author->name }}</p>
            <p class="text-lg mb-2"><strong class="text-gray-700">ISBN:</strong> {{ $book->isbn }}</p>
            <p class="text-lg mb-2"><strong class="text-gray-700">Année de publication:</strong> {{ $book->published_year }}</p>
        </div>
        <a href="{{ route('books.index') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition ease-in-out duration-150">
            Retour à la liste
        </a>
    </div>

    
@endsection
