@extends('app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 text-primary">Ajouter un Auteur</h1>
    <form action="{{ route('authors.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-primary focus:ring-2 focus:ring-primary sm:text-sm" required>
        </div>
        <div>
            <label for="biography" class="block text-sm font-medium text-gray-700">Biographie</label>
            <textarea name="biography" id="biography" rows="3" class="mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-primary focus:ring-2 focus:ring-primary sm:text-sm" required></textarea>
        </div>
        <div class="flex items-center justify-end">
            <button type="submit" class="bg-highlight text-white px-4 py-2 rounded-md hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">Ajouter</button>
        </div>
    </form>
</div>
@endsection
