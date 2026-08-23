<x-layout>
    <x-slot:title>Daftar Siswa Page</x-slot:title>
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
            <h2 class="text-3xl/tight font-bold text-gray-900 sm:text-4xl">Features for growth</h2>

            <p class="mt-4 text-lg text-pretty text-gray-700">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis tenetur, nemo quam
                voluptas sunt impedit dolorem asperiores aliquid doloribus fugit.
            </p>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach ($data as $item)
                <div class="rounded-lg border border-gray-200 p-6">

                    {{-- Nama kursus sebagai link --}}
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">
                        <a href="/kursus/{{ $item['id_kursus'] }}" class="hover:text-blue-600 hover:underline">
                            {{ $item['nama_kursus'] }}
                        </a>
                    </h3>

                    {{-- Deskripsi --}}
                    <p class="mt-2 text-pretty text-gray-700">
                        {{ $item['deskripsi'] }}
                    </p>

                    {{-- Informasi kursus --}}
                    <div class="mt-4 flex flex-wrap gap-2">

                        {{-- Harga --}}
                        <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">
                            Rp {{ number_format($item['harga'], 0, ',', '.') }}
                        </span>

                        {{-- Durasi --}}
                        <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-700">
                            {{ $item['durasi'] }} Jam
                        </span>

                        {{-- Level --}}
                        @if ($item['level'] == 'Pemula')
                            <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">
                                {{ $item['level'] }}
                            </span>
                        @elseif($item['level'] == 'Menengah')
                            <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-700">
                                {{ $item['level'] }}
                            </span>
                        @else
                            <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700">
                                {{ $item['level'] }}
                            </span>
                        @endif

                        {{-- Status --}}
                        <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">
                            {{ $item['status'] }}
                        </span>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <x-slot:footer>
        <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>
