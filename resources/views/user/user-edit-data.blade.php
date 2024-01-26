<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data {{ optional($pegawaiData)->nama }}</title>

    @include('helper.helper')
</head>

<body>
    <div class="m-8">
        <div data-hs-stepper class="flex flex-col">
            <div class="flex flex-col md:flex-row items-center justify-center">
                <ul class="flex flex-wrap justify-center items-center gap-4 w-full max-w-3xl">
                    <li>
                        <a href="{{ route('user-dashboard', ['nik_admedika' => $pegawaiData->nik_admedika]) }}"
                            class="w-fit my-4 mx-10 py-2 px-2 text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 40 40"
                                fill="none">
                                <mask id="mask0_418_673" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="40" height="40">
                                    <rect width="40" height="40" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_418_673)">
                                    <path
                                        d="M15.0256 20L28.0032 32.9776C28.2817 33.2561 28.4195 33.5962 28.4166 33.9979C28.4138 34.3996 28.2731 34.7454 27.9946 35.0353C27.7119 35.3251 27.3679 35.4701 26.9626 35.4701C26.5573 35.4701 26.2098 35.3251 25.9199 35.0353L12.7116 21.8248C12.4516 21.5648 12.2621 21.276 12.1432 20.9584C12.0243 20.6407 11.9648 20.3212 11.9648 20C11.9648 19.6788 12.0243 19.3594 12.1432 19.0417C12.2621 18.724 12.4516 18.4317 12.7116 18.1646L25.9477 4.93915C26.2304 4.64926 26.5712 4.5086 26.9701 4.51715C27.3689 4.52571 27.7133 4.67492 28.0032 4.96478C28.2817 5.25467 28.4238 5.59761 28.4295 5.99361C28.4351 6.38961 28.293 6.73256 28.0032 7.02244L15.0256 20Z"
                                        fill="#1C1B1F" />
                                </g>
                            </svg>
                            <span class="hidden md:inline-block">Kembali ke Dashboard</span>
                        </a>
                    </li>
                    <!-- Item -->
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{
                        "index": 1
                      }'>
                        <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                            <span
                                class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium">
                                Data Pribadi
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                        </div>
                    </li>

                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{
                        "index": 2
                      }'>
                        <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                            <span
                                class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium">
                                Alamat
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                        </div>
                    </li>

                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{
                          "index": 3
                        }'>
                        <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                            <span
                                class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium">
                                Status & Pendidikan
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                        </div>
                    </li>
                    <!-- End Item -->

                    <!-- Item -->
                    <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                        data-hs-stepper-nav-item='{
                          "index": 4
                        }'>
                        <span class="min-w-[28px] min-h-[28px] group inline-flex items-center text-xs align-middle">
                            <span
                                class="w-7 h-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-300 hs-stepper-active:text-white hs-stepper-success:bg-blue-300 hs-stepper-success:text-white">
                                <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">4</span>
                                <svg class="hidden flex-shrink-0 h-3 w-3 hs-stepper-success:block"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                            </span>
                            <span class="ms-2 text-sm font-medium">
                                Kontak
                            </span>
                        </span>
                        <div class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-300">
                        </div>
                    </li>
                    <!-- End Item -->
                </ul>
                <!-- End Stepper Nav -->
            </div>
            <!-- End Stepper Nav -->

            <div class="flex flex-col justify-center items-center py-4">
                <form action="{{ route('update-data', ['nik_admedika' => $pegawaiData->nik_admedika]) }}"
                    method="POST" class="flex flex-col w-full">
                    @csrf
                    @method('PUT')
                    <!-- Stepper Content -->
                    @include('components.form-edit-data')
                </form>
            </div>
        </div>
    </div>
</body>

</html>
