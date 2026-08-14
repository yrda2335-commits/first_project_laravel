<x-layout>
    <h1>About DevPulse</h1>
     @php
        $stats = [
            'Total Students' => 1200,
            'Workshops Held' => 48,
            'Expert Instructors' => 15,
        ];
    @endphp

    @foreach ($stats as $label => $value)
        <p>{{ $label }}: {{ $value }}</p>
    @endforeach
</x-layout>