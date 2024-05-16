@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" width="{{ $width }}" height="{{ $width }}" alt=""
    class="rounded-xl">
