@extends('app')

@section('title', 'Liste des auteurs')

@section('content')
<div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-4">Liste des auteurs</h1>
    <a href="{{ route('authors.create') }}" class="inline-block bg-highlight text-white px-4 py-2 rounded hover:bg-secondary transition duration-300 ease-in-out">Ajouter un auteur</a>
    
    <ul class="mt-6 space-y-4">
        @foreach ($authors as $author)
            <li class="flex items-center justify-between p-4 bg-gray-50 border border-gray-200 rounded-lg shadow-sm">
                <span class="text-lg font-semibold">{{ $author->name }}</span>
                <div class="space-x-2">
                    <a href="{{ route('authors.show', $author) }}" class="text-blue-500 hover:text-blue-600">Voir</a>
                    <a href="{{ route('authors.edit', $author) }}" class="text-yellow-500 hover:text-yellow-600">Modifier</a>
                    <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600">Supprimer</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    
    <div class="mt-6">
        {{ $authors->links() }}
    </div>
</div>
@endsection
