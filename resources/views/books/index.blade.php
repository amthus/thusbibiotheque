@extends('app')

@section('title', 'Liste des Livres')

@section('content')
<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4">Liste des livres</h1>
    <a href="{{ route('books.create') }}" class="inline-block bg-highlight text-white px-4 py-2 rounded hover:bg-secondary transition duration-300 ease-in-out">Ajouter un livre</a>
    
    <ul class="mt-6 space-y-4">
        @foreach ($books as $book)
            <li class="flex items-center justify-between p-4 bg-gray-50 border border-gray-200 rounded-lg shadow-sm">
                <div>
                    <span class="text-lg font-semibold">{{ $book->title }}</span>
                    <span class="text-sm text-gray-600">par {{ $book->author->name }}</span>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('books.show', $book) }}" class="text-blue-500 hover:text-blue-600">Voir</a>
                    <a href="{{ route('books.edit', $book) }}" class="text-yellow-500 hover:text-yellow-600">Modifier</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600">Supprimer</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    
    <div class="mt-6">
        {{ $books->links() }}
    </div>
</div>
@endsection
