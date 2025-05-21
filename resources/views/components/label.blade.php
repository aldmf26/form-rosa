@props([
    'teks',
    'required' => false,
    'for' => '',
    ])
<label for="{{ $for }}" class="form-label">
    {{ $teks }} @if ($required)
        <span class="text-danger">*</span>
    @endif
</label>
