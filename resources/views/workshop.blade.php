<x-layout>
    <h1>{{ $workshop['title'] }}</h1>
     <p>Category: {{ $workshop['category'] }}</p>
    <p>Instructor: {{ $workshop['instructor'] }}</p>
    <p>Date: {{ $workshop['date'] }}</p>
    <p>Level: {{ $workshop['level'] }}</p>
    <p>{{ $workshop['description'] }}</p>
    <h2>Instructor Profile</h2>

<p>{{ $workshop['instructor'] }}</p>
<h2>Schedule</h2>

<p>Date: {{ $workshop['date'] }}</p>
</x-layout>