<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token( ) }}">
    <title>List Data</title>

    @include('helper.helper')
</head>

<body>
    <div class="flex flex-row gap-10">
        @include('shared.admin-sidebar')
        <div class="flex flex-col ms-3 lg:ms-0 w-full pt-2 px-4 sm:px-6 md:px-8 lg:ps-80 mt-4 lg:mt-8">
            <div class="flex items-center py-4">
                <!-- Navigation Toggle -->
                <button type="button" class="text-gray-500 hover:text-gray-600 lg:hidden" data-hs-overlay="#application-sidebar"
                    aria-controls="application-sidebar" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <!-- End Navigation Toggle -->

                <!-- Breadcrumb -->
                <ol class="ms-3 flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                    <li class="flex items-center text-sm text-gray-800 capitalize">
                        {{ $data->role }}
                        <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400"
                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </li>
                    <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                        Lihat Data
                    </li>
                </ol>
                <!-- End Breadcrumb -->
            </div>
            <div class="flex flex-col lg:flex-row justify-between w-full py-4">
                <h1 class="py-3 font-medium text-base">Daftar Data Karyawan</h1>
                <div class="flex flex-col lg:flex-row justify-center items-center gap-2">
                    <form action="{{ route('import_excel', ['nik_admedika' => $data->nik_admedika]) }}" method="post"
                        enctype="multipart/form-data" class="flex flex-col lg:flex-row justify-between gap-2" id="form-import">
                        @csrf
                        <p id="import" for="file" class="sr-only">Choose file</p>
                        <input type="file" name="file" accept=".xlsx, .xls"
                            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:border-0 file:bg-gray-100 file:me-4 file:p-4">
                        <button type="submit"
                            class="inline-flex w-full lg:w-44 justify-center items-center bg-blue-500 text-white rounded-md mt-2 lg:mt-0 p-4 lg:p-3">Import
                            Excel</button>
                    </form>
                    <a href="{{ route('karyawan-export', ['nik_admedika' => $data->nik_admedika]) }}"
                        class="w-full lg:w-40 flex justify-center p-4 bg-green-600 font-medium text-base text-white rounded-md" target="_blank">Export
                        ke
                        Excel</a>
                </div>
            </div>
            <table class="w-full divide-y divide-gray-200 border-2 border-red-100 my-4 lg:my-0">
                <thead class="bg-red-100">
                    <tr>
                        <th scope="col" class="px-4 py-4 text-center text-xs lg:text-base font-medium">
                            No.
                        </th>
                        <th scope="col" class="px-4 py-4 text-center text-xs lg:text-base font-medium">
                            NIK Admedika
                        </th>
                        <th scope="col" class="px-4 py-4 text-center text-xs lg:text-base font-medium hidden lg:table-cell">
                            NIK TG
                        </th>
                        <th scope="col" class="px-4 py-4 text-center text-xs lg:text-base font-medium">
                            Nama
                        </th>
                        <th scope="col" class="py-4 text-center text-xs lg:text-base font-medium hidden lg:table-cell">
                            Role
                        </th>
                        <th scope="col" class="w-8 px-4 py-4 text-center text-xs lg:text-base font-medium">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 my-4 px-4">
                    @foreach ($pegawaiDatas as $pegawaiData)
                        <tr class="min-w-full h-full p-4">
                            <td class="justify-center items-center text-center text-xs lg:text-base py-4">
                                {{ $pegawaiData->urutan }}
                            </td>
                            <td class="justify-center items-center text-center text-xs lg:text-base py-4">
                                {{ $pegawaiData->nik_admedika }}
                            </td>
                            <td class="justify-center items-center text-center text-xs lg:text-base py-4 hidden lg:table-cell">
                                {{ $pegawaiData->nik_tg }}
                            </td>
                            <td class="justify-center items-center text-center text-xs lg:text-base py-4">
                                {{ $pegawaiData->nama }}
                            </td>
                            <td class="justify-center items-center text-center text-xs lg:text-base py-4 capitalize hidden lg:table-cell">
                                {{ $pegawaiData->role }}
                            </td>
                            <td class="flex flex-col lg:flex-row mx-auto justify-center items-center gap-1">
                                <a href="{{ route('edit-data-karyawan', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
                                    class="p-2 px-7 text-center bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 m-2 rounded-md">Edit</a>
                                <a href="#" onclick="openConfirmationModal('{{ $pegawaiData->nik_admedika }}')"
                                    class="p-2 px-5 text-center bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 m-2 rounded-md cursor-pointer">Hapus</a>
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
                                                class="flex flex-row justify-center items-center gap-4 px-8 pb-4 pt-2 w-full">
                                                <a onclick="closeConfirmationModal({{ $pegawaiData->nik_admedika }})"
                                                    class="w-1/2 inline-flex justify-center rounded-md px-5 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:text-sm">
                                                    Batal
                                                </a>
                                                <a href="{{ route('delete-data-karyawan', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
                                                    class="w-1/2 p-2 text-center bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 m-2 rounded-md cursor-pointer"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $pegawaiData->id }}').submit();">Hapus</a>
                                                <form id="delete-form-{{ $pegawaiData->id }}"
                                                    action="{{ route('delete-data-karyawan', ['nik_admedika' => $data->nik_admedika, 'id' => $pegawaiData->id]) }}"
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
        </div>
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
