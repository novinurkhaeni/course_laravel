<x-layout>
    <x-slot:title>About Page</x-slot:title>
    <h1> Hello from about page view, I am {{ $data }}</h1>
    <p>Age : {{ $umur }}</p>
    @if ($umur > 18)
        <h3>Kamu bisa memilih presiden</h3>
    @else
        <h3>Kamu tidak bisa memilih presiden</h3>
    @endif
    <x-slot:footer>
        <strong>About Page</strong>
    </x-slot:footer>
</x-layout>
