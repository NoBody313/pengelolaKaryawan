<div
    class="flex flex-col justify-center items-start p-6 gap-4 h-fit w-full bg-red-50 border-[1px] rounded-md border-red-950">
    <div class="flex flex-row items-center gap-3">
        <h1 class="font-normal text-lg tracking-wide">Selamat datang</h1>
        @if (isset($data))
            <p class="font-semibold text-lg tracking-wide">{{ $data->nama }}</p>
        @endif
    </div>
    <p class="font-normal text-base tracking-wide">Silahkan validasi data anda dahulu!</p>
</div>
