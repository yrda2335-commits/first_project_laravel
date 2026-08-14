<x-layout>

    <x-slot:heading>
        Workshops
    </x-slot:heading>

    <h1 class="text-3xl font-bold">
        All Workshops
    </h1>
    <div class="grid md:grid-cols-3 gap-6 mt-8">

    @foreach($workshops as $workshop)

        <x-card>

            <x-badge>
                {{ $workshop['category'] }}
            </x-badge>

            <h2 class="text-xl font-bold mt-2">
                {{ $workshop['title'] }}
            </h2>

            <p class="text-slate-600 mt-2">
                {{ $workshop['description'] }}
            </p>
            <p class="text-sm text-slate-500 mt-4">
    Instructor: {{ $workshop['instructor'] }}
</p>

<p class="text-sm text-slate-500">
    Date: {{ $workshop['date'] }}
</p>
<p class="text-sm text-slate-500">
    Level: {{ $workshop['level'] }}
</p>
<x-button href="/workshops/{{ $workshop['id'] }}">
    View Details
</x-button>
        </x-card>

    @endforeach

</div>

</x-layout>