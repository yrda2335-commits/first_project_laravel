<x-layout>
     <x-slot:heading>
        Welcome to DevPulse
    </x-slot:heading>
    <section class="text-center py-12">

    <h1 class="text-4xl font-bold text-slate-900">
        Learn. Build. Grow.
    </h1>

    <p class="mt-4 text-lg text-slate-600">
        Join DevPulse and learn from expert developers through practical workshops.
    </p>

    <a href="/workshops"
       class="inline-block mt-6 bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
        Explore Workshops
    </a>

</section>

<section class="py-12">

    <h2 class="text-2xl font-bold text-slate-900 mb-6">
        Upcoming Workshops
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($workshops as $workshop)

            <x-card>

                <x-badge>
    {{ $workshop['category'] }}
</x-badge>

                <h3 class="text-xl font-bold mt-2">
                    {{ $workshop['title'] }}
                </h3>

                <p class="text-slate-600 mt-3">
                    {{ $workshop['description'] }}
                </p>

                <p class="text-sm text-slate-500 mt-4">
                    Instructor: {{ $workshop['instructor'] }}
                </p>

                <p class="text-sm text-slate-500">
                    Date: {{ $workshop['date'] }}
                </p>

                <a href="/workshops/{{ $workshop['id'] }}"
                   class="inline-block mt-5 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    View Details
                </a>

            </x-card>

        @endforeach

    </div>

</section>
</x-layout>