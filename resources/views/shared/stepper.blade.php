<!-- Stepper -->
<div data-hs-stepper>
    <!-- Stepper Nav -->
    <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto">
        <!-- Item -->
        <li class="shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{
            "index": 1
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    1
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="shrink basis-0 flex-1 group"data-hs-stepper-nav-item='{
            "index": 2
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    2
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="shrink basis-0 flex-1 group"data-hs-stepper-nav-item='{
            "index": 3
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    3
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="shrink basis-0 flex-1 group"data-hs-stepper-nav-item='{
            "index": 4
          }'>
            <div class="min-w-[28px] min-h-[28px] w-full inline-flex items-center text-xs align-middle">
                <span
                    class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700">
                    4
                </span>
                <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700"></div>
            </div>
        </li>
        <!-- End Item -->
    </ul>
    <!-- End Stepper Nav -->

    <!-- Stepper Content -->
    <div class="mt-5 sm:mt-8">
        <!-- First Contnet -->
        <div data-hs-stepper-content-item='{
        "index": 1
      }'>
            <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">NIK Admedika</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">NIK TG</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                    <label for="input-nama" class="block text-sm font-medium mb-2">Nama</label>
                    <input type="text" id="input-nama"
                        class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="Masukan nama sesuai KTP">
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="hs-select-label" class="block text-sm font-medium mb-2">Jenis Kelamin</label>
                        <select id="hs-select-label"
                            class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option disabled selected>Buka untuk memilih</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="hs-select-label" class="block text-sm font-medium mb-2">Agama</label>
                        <select id="hs-select-label"
                            class="py-3 px-4 pe-9 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            <option disabled selected>Buka untuk memilih</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Kota Kelahiran</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Tanggal Lahir</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Tahun Lahir</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">No. KTP</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                </div>
            </div>
        </div>
        <!-- End First Contnet -->

        <!-- First Contnet -->
        <div data-hs-stepper-content-item='{
        "index": 2
      }' style="display: none;">
            <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Alamat Lengkap</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kab/Kota</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Alamat Lengkap</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kab/Kota</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End First Contnet -->

        <!-- First Contnet -->
        <div data-hs-stepper-content-item='{
        "index": 3
      }' style="display: none;">
            <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kab/Kota</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                        <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                            <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                            <input type="text" id="input-nama"
                                class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukan nama sesuai KTP">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End First Contnet -->
        <!-- First Contnet -->
        <div data-hs-stepper-content-item='{
        "index": 4
      }' style="display: none;">
            <div class="flex flex-col justify-center items-center px-8 gap-4 w-full">
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center self-stretch gap-4 w-full">
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Provinsi</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                    <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                        <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                        <input type="text" id="input-nama"
                            class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Masukan nama sesuai KTP">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start gap-2 self-stretch w-full">
                    <label for="input-nama" class="block text-sm font-medium mb-2">Kode Pos</label>
                    <input type="text" id="input-nama"
                        class="py-3 px-4 block w-full border-[1.5px] border-red-900 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="Masukan nama sesuai KTP">
                </div>
            </div>
        </div>
        <!-- End First Contnet -->

        <!-- Final Contnet -->
        {{-- <div data-hs-stepper-content-item='{
        "isFinal": true
      }' style="display: none;">
            <div class="">
                <h3 class="text-gray-500">
                    Final content
                </h3>
            </div>
        </div> --}}
        <!-- End Final Contnet -->

        <!-- Button Group -->
        <div class="mt-5 flex justify-between items-center gap-x-2">
            <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-back-btn>
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                </svg>
                Back
            </button>
            <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                data-hs-stepper-next-btn>
                Next
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
            <a href="/">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-stepper-finish-btn style="display: none;">
                    Finish
                </button>
            </a>
        </div>
        <!-- End Button Group -->
    </div>
    <!-- End Stepper Content -->
</div>
<!-- End Stepper -->
