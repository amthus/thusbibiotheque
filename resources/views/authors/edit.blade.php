@extends('app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Modifier l'Auteur</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="name" id="name" value="{{ $author->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
        </div>
        <div>
            <label for="biography" class="block text-sm font-medium text-gray-700">Biographie</label>
            <textarea name="biography" id="biography" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ $author->biography }}</textarea>
        </div>
        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Mettre à Jour</button>
        </div>
    </form>
</div>
@endsection
