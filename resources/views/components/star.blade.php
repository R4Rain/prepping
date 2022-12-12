{{-- Generate star icon --}}
<span class="ps-1 text-custom-star">
    @for ($i = 0;$i < round($rate) && $i < 5;$i++)
        <i class="bi bi-star-fill"></i>
    @endfor
    @for ($i = round($rate);$i < 5;$i++)
        <i class="bi bi-star"></i>
    @endfor
</span>
{{-- Rating average --}}
<span class="mx-1">{{number_format(round($rate, 1), 1, '.', '')}}</span>