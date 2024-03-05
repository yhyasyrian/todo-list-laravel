@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-md mb-2 cursor-pointer text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
