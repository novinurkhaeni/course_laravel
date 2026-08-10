<x-layout>
    <x-slot:title>Daftar Siswa Page</x-slot:title>
    <h1 class="text-xl mb-5 font-bold">Daftar Siswa</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Name</th>
                    <th class="px-3 py-2 whitespace-nowrap">Tanggal Lahir</th>
                    <th class="px-3 py-2 whitespace-nowrap">Jurusan</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                    <th class="px-3 py-2 whitespace-nowrap">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($data as $item)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nama'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['tglLahir'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['jurusan'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $item['nilai'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <div class="inline-flex">
                                <a href="/siswa/{{ $item['id'] }}"
                                    class="rounded-s-sm border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
                                    View
                                </a>

                                <button
                                    class="-ms-px border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
                                    Edit
                                </button>

                                <button
                                    class="-ms-px rounded-e-sm border border-gray-200 px-3 py-2 font-medium text-gray-700 transition-colors hover:bg-gray-50 hover:text-gray-900 focus:z-10 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white focus:outline-none disabled:pointer-events-auto disabled:opacity-50">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-slot:footer>
        <strong>Siswa Page</strong>
    </x-slot:footer>
</x-layout>
