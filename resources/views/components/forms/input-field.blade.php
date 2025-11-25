@props(['name', 'label', 'type' => 'text', 'value' => '', 'required' => false, 'placeholder' => '', 'autocomplete' => ''])

<div class="space-y-2">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
        {{ $label }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <div class="mt-1">
        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type }}"
            value="{{ old($name, $value) }}"
            @if($required) required @endif
            @if($placeholder) placeholder="{{ $placeholder }}" @endif
            @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
            {{ $attributes->merge([
                'class' => 'block w-full rounded-lg border-gray-300 py-2.5 px-4 shadow-sm sm:text-sm
                            focus:ring-indigo-500 focus:border-indigo-500
                            dark:bg-gray-700 dark:border-gray-600 dark:text-white
                            ' . ($errors->has($name) ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : '')
            ]) }}
        />
    </div>
    @error($name)
    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>
