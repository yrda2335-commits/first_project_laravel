<x-layout>
    <h1>Contact DevPulse</h1>
    @php
        $contacts = [
            'Email' => 'support@devpulse.com',
            'Phone' => '+20 100 000 0000',
            'Hours' => 'Saturday - Thursday, 9 AM - 6 PM',
        ];
    @endphp

   <div>
    @foreach ($contacts as $label => $value)
        <x-card>
            <h2>{{ $label }}</h2>
            <p>{{ $value }}</p>
        </x-card>
    @endforeach
</div>

<h2>Send Us a Message</h2>

<form class="space-y-4">
    <div>
        <label for="name" class="block text-sm font-medium text-slate-700">
            Name
        </label>

        <input
            type="text"
            id="name"
            name="name"
            class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none"
        >
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-slate-700">
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none"
        >
    </div>

    <div>
        <label for="message" class="block text-sm font-medium text-slate-700">
            Message
        </label>

        <textarea
            id="message"
            name="message"
            class="mt-1 w-full rounded-md border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none"
        ></textarea>
    </div>

    <button
        type="submit"
        class="rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700"
    >
        Send Message
    </button>
</form>

<x-card class="mt-6">
    <h2 class="text-xl font-bold text-slate-900">
        Office Location
    </h2>

    <p class="mt-2 text-slate-600">
        Cairo, Egypt
    </p>
</x-card>
</x-layout>