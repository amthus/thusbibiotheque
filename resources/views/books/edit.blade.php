@extends('app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-primary">Modifier le Livre</h2>
        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Titre</label>
                <input type="text" name="title" value="{{ $book->title }}" class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-50 px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Auteur</label>
                <select name="author_id" class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-50 px-3 py-2">
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">ISBN</label>
                <input type="text" name="isbn" value="{{ $book->isbn }}" class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-50 px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Année de publication</label>
                <input type="number" name="published_year" value="{{ $book->published_year }}" class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-50 px-3 py-2" required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-highlight text-white rounded-lg hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">Modifier</button>
            </div>
        </form>
    </div>
@endsection
