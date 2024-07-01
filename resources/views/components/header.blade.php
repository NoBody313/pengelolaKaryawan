<div class="sticky inset-x-0 top-0 px-4 bg-white z-8 border-y sm:px-6 md:px-8 lg:hidden">
    <div class="flex items-center py-4">
        <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
            aria-controls="application-sidebar" aria-label="Toggle navigation">
            <span class="sr-only">Toggle Navigation</span>
            <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
    </div>
</div>

<div class="w-full px-4 pt-2 mt-4 sm:px-6 md:px-8 lg:ps-72 lg:mt-8">
    <header
        class="flex flex-col items-start justify-center w-full gap-4 p-6 bg-blue-100 border border-blue-400 rounded-md h-fit">
        <div class="flex flex-row items-center gap-3">
            <h1 class="text-lg font-medium tracking-wide text-blue-950">Selamat datang</h1>
            <p class="text-lg font-semibold tracking-wide text-blue-950">{{ $data->nama }}</p>
        </div>
        <p class="text-base font-normal tracking-wide text-blue-950">Silahkan validasi data anda dahulu!</p>
    </header>
</div>
