@extends('app')

@section('content')
<div class="container mx-auto p-6 bg-white rounded-lg shadow-lg border border-gray-200">
    <h1 class="text-3xl font-bold mb-6 text-primary">{{ $author->name }}</h1>
    <div class="bg-gray-50 p-4 rounded-md border border-gray-300 shadow-sm mb-6">
        <p class="text-lg font-medium text-gray-800 mb-2"><strong>Biographie :</strong></p>
        <p class="text-gray-600">{{ $author->biography }}</p>
    </div>
    <div class="mb-4">
        <p class="text-lg font-medium text-gray-800"><strong>Date de Création :</strong> {{ $author->created_at->format('d M Y') }}</p>
        <p class="text-lg font-medium text-gray-800"><strong>Date de Mise à Jour :</strong> {{ $author->updated_at->format('d M Y') }}</p>
    </div>
    <div class="mt-6">
        <a href="{{ route('authors.index') }}" class="inline-block px-6 py-3 bg-secondary text-white rounded-md shadow-md hover:bg-highlight focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition duration-300 ease-in-out">
            Retour à la liste
        </a>
    </div>
</div>

@endsection
