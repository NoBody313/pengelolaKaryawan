<div class="sticky top-0 inset-x-0 z-8 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden">
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

<div class="w-full pt-2 px-4 sm:px-6 md:px-8 lg:ps-72 mt-4 lg:mt-8">
    <header
        class="flex flex-col justify-center items-start p-6 gap-4 h-fit w-full bg-blue-100 border-blue-400 border rounded-md">
        <div class="flex flex-row items-center gap-3">
            <h1 class="font-medium text-lg tracking-wide text-blue-950">Selamat datang</h1>
            <p class="font-semibold text-lg tracking-wide text-blue-950">{{ $data->nama }}</p>
        </div>
        <p class="font-normal text-base tracking-wide text-blue-950">Silahkan validasi data anda dahulu!</p>
    </header>
</div>
