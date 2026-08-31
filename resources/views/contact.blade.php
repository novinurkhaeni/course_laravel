<x-layout>
    <x-slot:title>Contact Page</x-slot:title>
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach ($data as $item)
                <div>
                    @if ($item['photo'] != null)
                        <img src="{{ $item['photo'] }}" alt=""
                            class="w-full aspect-video rounded-lg object-cover" />
                    @else
                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&fit=crop&q=80&w=1160"
                            alt="" class="w-full aspect-video rounded-lg object-cover" />
                    @endif

                    <div class="mt-4 flex items-center justify-between gap-4">
                        <div>
                            <h3 id="TeamMember1Name" class="text-lg/tight font-semibold text-gray-900">
                                {{ $item['nama'] }}
                            </h3>

                            <p class="mt-0.5 text-sm text-gray-700">{{ $item['email'] }}</p>
                        </div>

                        <a href="#" target="_blank" rel="noreferrer"
                            class="text-[#0072b1] transition-opacity hover:opacity-90"
                            aria-labelledby="TeamMember1Name LinkedInLabel1">
                            <span id="LinkedInLabel1" class="sr-only">LinkedIn</span>

                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-7" aria-hidden="true">
                                <path
                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
