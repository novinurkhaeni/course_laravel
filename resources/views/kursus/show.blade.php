<x-layout>
    <x-slot:title>Detail Kursus {{ $data['nama_kursus'] }}</x-slot:title>
    <div class="flow-root">
        <dl class="-my-3 divide-y divide-gray-200 text-sm">
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Nama Kursus</dt>

                <dd class="text-gray-700 sm:col-span-2 font-bold">{{ $data['nama_kursus'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Deskripsi</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $data['deskripsi'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Harga</dt>

                <dd class="text-gray-700 sm:col-span-2">
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">
                        Rp {{ number_format($data['harga'], 0, ',', '.') }}
                    </span>
                </dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Durasi</dt>

                <dd class="text-gray-700 sm:col-span-2">
                    <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-700">
                        {{ $data['durasi'] }} Jam
                    </span>
                </dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Level</dt>

                <dd class="text-gray-700 sm:col-span-2">
                    @if ($data['level'] == 'Pemula')
                        <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">
                            {{ $data['level'] }}
                        </span>
                    @elseif($data['level'] == 'Menengah')
                        <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-700">
                            {{ $data['level'] }}
                        </span>
                    @else
                        <span class="rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700">
                            {{ $data['level'] }}
                        </span>
                    @endif
                </dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Status</dt>

                <dd class="text-gray-700 sm:col-span-2">
                    <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">
                        {{ $data['status'] }}
                    </span>
                </dd>
            </div>
        </dl>
    </div>
</x-layout>
