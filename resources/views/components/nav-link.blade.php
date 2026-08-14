@props(['active' => ''])
<a  {{ $attributes->merge([
    'class' => request()->routeIs($active) 
        ? 'px-3 py-2 rounded-lg bg-slate-700 transition'
        : 'px-3 py-2 rounded-lg hover:bg-slate-800 transition'
]) }} >
    {{ $slot }}
    </a>