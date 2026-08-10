{{-- 
    @props digunakan untuk menentukan data/parameter
    yang dapat diterima oleh Blade Component.
--}}
@props([

    {{-- 
        Props 'href' digunakan untuk menentukan
        alamat/URL tujuan link.
        
        Props ini wajib diberikan saat component dipanggil.
    --}}
    'href',

    {{-- 
        Props 'target' digunakan untuk menentukan
        tempat link dibuka.

        Nilai default adalah '_self',
        sehingga link akan dibuka pada halaman/tab yang sama.
    --}}
    'target' => '_self',
    'active' => false
])


{{-- 
    Elemen <a> digunakan untuk membuat hyperlink.
--}}
<a

    {{-- 
        Mengambil nilai dari props 'href'.
        Contoh:
        <x-nav-link href="/about">
    --}}
    href="{{ $href }}"


    {{-- 
        Mengambil nilai dari props 'target'.
        Jika target tidak diberikan,
        maka menggunakan nilai default '_self'.
    --}}
    target="{{ $target }}"


    {{-- 
        $attributes digunakan untuk meneruskan
        attribute HTML tambahan dari component.

        Contoh:
        class="menu"
        id="home"
        title="Halaman Home"
    --}}
    {{ $attributes->merge(['class' => $active ? 'text-teal-500 font-bold' : '']) }}

>

    {{-- 
        $slot berisi isi yang ditulis
        di antara tag component.

        Contoh:
        <x-nav-link href="/">
            Home
        </x-nav-link>

        Maka $slot berisi:
        Home
    --}}
    {{ $slot }}

</a>