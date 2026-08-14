<x-layout>
    <h1>{{ $workshop['title'] }}</h1>
     <p>Category: {{ $workshop['category'] }}</p>
    <p>Instructor: {{ $workshop['instructor'] }}</p>
    <p>Date: {{ $workshop['date'] }}</p>
    <p>Level: {{ $workshop['level'] }}</p>
    <p>{{ $workshop['description'] }}</p>
</x-layout>