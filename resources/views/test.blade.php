@php
    use thiagoalessio\TesseractOCR\TesseractOCR;
echo (new TesseractOCR(public_path('assets/icons/numbers.png')))
    ->lang('ara')
    ->psm(11)
    ->osm(2)
    ->run();
@endphp

