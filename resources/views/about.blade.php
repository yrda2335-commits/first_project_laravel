<x-layout>
    <h1>About DevPulse</h1>
     @php
        $stats = [
            'Total Students' => 1200,
            'Workshops Held' => 48,
            'Expert Instructors' => 15,
        ];
    @endphp
<div>
    @foreach ($stats as $label => $value)
        <x-card>
            <h2>{{ $value }}</h2>
            <p>{{ $label }}</p>
        </x-card>
    @endforeach
</div>
<h2>Our Vision</h2>

<p>
    DevPulse aims to connect developers with practical workshops,
    expert instructors, and a growing technology community.
</p>
</x-layout>