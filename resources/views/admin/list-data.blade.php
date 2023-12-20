<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>List Data</title>

    @include('helper.helper')
</head>

<body>
    <div class="flex flex-row gap-10">
        @include('shared.admin-sidebar')
        <div class="w-full m-14">
            <table class="w-full divide-y divide-gray-200 border-2 border-red-100">
                <thead class="bg-red-100">
                    <tr>
                        <th scope="col" class="w-1/12 px-6 py-4 text-center text-base font-medium">
                            No.
                        </th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-center text-base font-medium">
                            NIK Admedika
                        </th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-center text-base font-medium">
                            NIK TG
                        </th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-center text-base font-medium">
                            Nama
                        </th>
                        <th scope="col" class="w-1/5 px-6 py-4 text-center text-base font-medium">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 my-4 px-4">
                    @foreach ($pegawaiDatas as $pegawaiData)
                        <tr class="w-full h-full p-4">
                            <td class="w-auto justify-center items-center text-center text-sm px-6 py-4">
                                {{ $pegawaiData->id }}</td>
                            <td class="w-auto justify-center items-center text-center text-sm px-6 py-4">
                                {{ $pegawaiData->nik_admedika }}</td>
                            <td class="w-auto justify-center items-center text-center text-sm px-6 py-4">
                                {{ $pegawaiData->nik_tg }}</td>
                            <td class="w-auto justify-center items-center text-center text-sm px-6 py-4">
                                {{ $pegawaiData->nama }}</td>
                            <td class="flex flex-row justify-center items-center gap-2">
                                <a href="{{ route('edit-data-karyawan', $pegawaiData->nik_admedika) }}"
                                    class="w-1/2 p-3 text-center bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 m-2 rounded-md">Edit</a>
                                <a href="#" onclick="openConfirmationModal({{ $pegawaiData->nik_admedika }})"
                                    class="w-1/2 p-3 text-center bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 m-2 rounded-md"
                                    class="text-red-500 hover:underline cursor-pointer">Hapus</a>
                                <!-- Modal -->
                                <div class="fixed inset-0 overflow-y-auto hidden"
                                    id="confirmationModal-{{ $pegawaiData->nik_admedika }}">
                                    <div
                                        class="flex flex-col w-screen items-center justify-center h-screen pt-4 px-4 text-center">
                                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>
                                        <div
                                            class="flex flex-col items-center justify-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                            <div class="bg-white px-6 py-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                            Konfirmasi Hapus Data
                                                        </h3>
                                                        <div class="mt-2">
                                                            <p class="text-sm text-gray-500">
                                                                Apakah Anda yakin untuk menghapus data ini?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-row justify-center items-center gap-4 px-8 py-4 w-full">
                                                <a onclick="closeConfirmationModal({{ $pegawaiData->nik_admedika }})"
                                                    class="w-1/2 inline-flex justify-center rounded-md px-5 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:text-sm">
                                                    Batal
                                                </a>
                                                <a href="{{ route('delete-data-karyawan', $pegawaiData->id) }}"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pegawaiData->id }}').submit();">Hapus</a>
                                                <form id="delete-form-{{ $pegawaiData->id }}"
                                                    action="{{ route('delete-data-karyawan', $pegawaiData->id) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </div>
                                            <!-- End Modal -->
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class=" py-4">
                {{ $pegawaiDatas->links('pagination::tailwind') }}
            </div>


            <!-- Di bagian bawah file Blade Anda -->
            <script>
                function openConfirmationModal(nik_admedika) {
                    document.getElementById('confirmationModal-' + nik_admedika).classList.remove('hidden');
                    document.getElementById('confirmationModal-' + nik_admedika).classList.add('flex');
                }

                function closeConfirmationModal(nik_admedika) {
                    document.getElementById('confirmationModal-' + nik_admedika).classList.add('hidden');
                    document.getElementById('confirmationModal-' + nik_admedika).classList.remove('flex');
                }
            </script>

        </div>
    </div>
</body>

</html>
