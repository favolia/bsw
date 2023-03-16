<x-app-layout>
    <section
    :class="themeIndex == 2 ? 'bg-gradient-to-br from-gray-800 via-gray-700 to-gray-800' : themeIndex == 3 ? 'bg-slate-200/50 dark:bg-gradient-to-br dark:from-gray-800 dark:via-gray-700 dark:to-gray-800' : 'bg-slate-200/50' "
    class="min-h-screen py-7 px-2 md:px-4 lg:px-7 flex flex-col w-full" id="webSection">

    <div class="mb-5 px-3 py-1">
        <h3 :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
            class="text-base font-medium">
            Formulir Permintaan
            Cuti</h3>
        <span class="breadcrumb text-[.50rem] relative -top-2 md:-top-1 lg:-top-0 lg:text-xs text-gray-400 font-medium">Home <i
                class="mx-1 font-bold fa fa-angle-right"></i>
            Formulir Permintaan Cuti</span>
    </div>

    <form action=""
        :class="themeIndex == 2 ? 'bg-transparent' : themeIndex == 3 ? 'bg-white dark:bg-transparent' : 'bg-white' "
        class="rounded-md flex flex-col py-5 px-6 -z-1 border w-full shadow-xl">

        <!-- Form -->
        <div class="w-full min-h-screen flex flex-col lg:flex-row-reverse">

            <div class="w-full order-2">

                <label class="inline-flex items-center select-none cursor-pointer">
                    <input type="checkbox"
                        class="lg:w-4 lg:h-4 cursor-pointer outline-blue-600 accent-blue-600 border-0 rounded-md focus:ring-0"
                        x-model="changeDate" />
                    <span
                        :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                        class="ml-2 text-xs lg:text-sm">Menggunakan
                        Kalender</span>
                </label>

                <!-- multiple date picker -->
                <div x-show="changeDate" class="my-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>

                            <input name="datePick" id="datePick" type="text"  readonly
                            :class="themeIndex == 2 ? 'bg-gray-700 border-gray-600 placeholder-gray-400 text-white' : themeIndex == 3 ? 'border-gray-600 text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white' : 'border-gray-600 text-gray-900'  "
                            class="bg-white/5 border  outline-none text-sm rounded-lg block w-full pl-10 p-2.5 "
                            placeholder="Pilih tanggal" :required="changeDate">
                    </div>
                </div>
                <!-- end multiple date picker -->

                <!-- date range picker -->
                <div x-show="!changeDate" date-rangepicker
                    class="flex my-4 justify-between select-none items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="start" type="text" readonly
                        :class="themeIndex == 2 ? 'bg-gray-700 border-gray-600 placeholder-gray-400 text-white' : themeIndex == 3 ? 'border-gray-600 text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white' : 'border-gray-600 text-gray-900'  "
                            class="bg-white/5 border  outline-none text-sm rounded-lg block w-full pl-10 p-2.5 "
                            placeholder="Awal" :required="!changeDate" autocomplete="false">
                    </div>
                    <span
                    class="mx-4 text-gray-500 ">Sampai</span>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400 dark:text-gray-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="end" type="text" readonly
                        :class="themeIndex == 2 ? 'bg-gray-700 border-gray-600 placeholder-gray-400 text-white' : themeIndex == 3 ? 'border-gray-600 text-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white' : 'border-gray-600 text-gray-900'  "
                            class="bg-white/5 border  outline-none text-sm rounded-lg block w-full pl-10 p-2.5 "
                            placeholder="Akhir" :required="!changeDate">
                    </div>
                </div>
                <!-- end date range picker -->


                <div>

                    <select class=" hidden" name="" id="" required>
                        <option :value="leaveTypes" class="text-black" x-text="leaveTypes"></option>
                    </select>

                    <div id="leaveTypeBtn" 
                    :class="themeIndex == 2 ? leaveTypes != '' ? 'text-white border-dotted border-gray-400' : 'text-gray-400 border-dotted border-gray-400' : themeIndex == 3 ? leaveTypes != '' ? 'text-black dark:text-white border-gray-700 dark:border-dotted dark:border-gray-400' : 'dark:text-gray-400 border-gray-700 dark:border-dotted dark:border-gray-400 text-gray-500' : leaveTypes != '' ? 'text-black border-gray-700' : 'text-gray-700 border-gray-700' "
                        class="w-full py-2 shadow-sm text-xs font-medium lg:text-sm border-dotted bg-transparent border text-center cursor-pointer rounded-md">
                        <span  x-text="leaveTypes == '' ? 'Pilih Jenis cuti' : leaveTypes"></span><i
                            class="fa fa-angle-down translate-x-2 font-bold"></i>
                    </div>

                    <div id="leaveTypeSection" style="display: none;" class="">
                        
                        <div x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        :class="themeIndex == 2 ? 'dark:text-white' : themeIndex == 3 ? 'text-gray-700 dark:text-white' : 'text-gray-700'   "
                        class="transition-all backdrop-blur-md border-gray-600 rounded-md flex flex-col gap-1 hover:[&>p]:bg-white/10 [&>p]:px-3 [&>p]:py-1 [&>p]:rounded-md [&>p]:cursor-pointer bg-transparent border border-dotted p-2">
                    <p @click="leaveTypes = '2 Hari' ">2 Hari</p>
                    <p @click="leaveTypes = '3 Hari' ">3 Hari</p>
                    <p @click="leaveTypes = '4 Hari' ">4 Hari</p>
                    <p @click="leaveTypes = 'Cuti Tahunan (ANL) - 10 Hari' ">Cuti Tahunan (ANL) - 10 Hari</p>
                    <p @click="leaveTypes = '' ">Batal</p>
                </div>

                    </div>


                    <p :class="leaveTypes == '' ? 'opacity-100' : 'opacity-0'"
                        class="text-red-500 px-2 text-[.60rem] bg-black/5 idark:bg-black/10 lg:py-1 rounded lg:rounded-md font-medium mt-1 lg:mt-2 w-fit transition-all duration-300 lg:text-xs text-center">
                        Anda belum memilih jenis cuti</p>

                </div>

                <div x-show="leaveTypes == '' ? false : true"
                :class="themeIndex == 2 ? 'text-white/60 border-white/30 border-dotted' : themeIndex == 3 ? 'text-gray-500 border-gray-300 dark:text-white/60 dark:border-white/30 dark:border-dotted' : 'text-gray-500 border-gray-300' "
                    class="w-full py-1 px-2 text-xs 0 h-14 mt-1 bg-transparent border rounded-md ">
                    <p>Your Leave Period <span class="text-red-500 font-bold">IS INACTIVE:</span></p>
                    <p>24-Jan-2024 To 23-Apr-2005</p>
                    <p>Dan total sisa cuti anda adalah : 10 Hari</p>
                </div>

                <p 
                :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                class="mt-3 mb-2 text-sm lg:text-base">Alasan <span
                        class="text-red-600">*</span>
                </p>
                <textarea name="" id=""
                :class="themeIndex == 2 ? 'text-white border-dotted' : themeIndex == 3 ? 'text-black dark:border-dotted dark:text-white' : 'text-black border-gray-600' "
                    class="bg-white/[0.02] text-sm outline-none w-full h-52 border resize-none py-1 px-3 rounded-md"
                    required>Urusan keluarga</textarea>

                <div class="text-black my-3">

                    <select class=" hidden" name="" id="">
                        <option :value="pjs" class="" x-text="pjs"></option>
                    </select>

                    
                    <div id="pjsBtn" 
                    :class="themeIndex == 2 ? pjs != '' ? 'text-white border-dotted border-gray-400' : 'text-gray-400 border-dotted border-gray-400' : themeIndex == 3 ? pjs != '' ? 'text-black dark:text-white border-gray-700 dark:border-dotted dark:border-gray-400' : 'dark:text-gray-400 border-gray-700 dark:border-dotted dark:border-gray-400 text-gray-500' : pjs != '' ? 'text-black border-gray-700' : 'text-gray-700 border-gray-700' "
                        class="w-full py-2 shadow-sm text-xs font-medium lg:text-sm border-dotted bg-transparent border text-center cursor-pointer rounded-md">
                        <span  x-text="pjs == '' ? 'Pilih PJS' : pjs"></span><i
                            class="fa fa-angle-down translate-x-2 font-bold"></i>
                    </div>

                    <div id="pjsSection" style="display: none;">

                        <div x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        :class="themeIndex == 2 ? 'dark:text-white' : themeIndex == 3 ? 'text-gray-700 dark:text-white' : 'text-gray-700'   "
                        class="transition-all backdrop-blur-md border-gray-600 rounded-md flex flex-col gap-1 hover:[&>p]:bg-white/10 [&>p]:px-3 [&>p]:py-1 [&>p]:rounded-md [&>p]:cursor-pointer bg-transparent border border-dotted p-2">
                    <p @click="pjs = 'Miah Said [D450144]' ">Miah Said [D450144]</p>
                    <p @click="pjs = 'Name 2' ">Name 2</p>
                    <p @click="pjs = 'Name 3' ">Name 3</p>
                    <p @click="pjs = 'Name 4' ">Name 4</p>
                    <p @click="pjs = '' ">Batal</p>
                </div>

                    </div>

                </div>

                <div
                :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                class="my-3 leading-[.1rem]">

                    <p class="text-sm lg:text-base">Duties & Responsibility</p>
                    <p class="text-xs font-medium">TO BE TRANSFERRED</p>
                    <span 
                :class="themeIndex == 2 ? 'text-white/50' : themeIndex == 3 ? 'text-gray-500 dark:text-white/50' : 'text-gray-500' "
                    class="text-[.60rem] italic text-gray-500 leading-3">( Please explain
                        your duties and
                        to
                        whorm
                        it will be
                        transferred during your leave
                        period )</span>

                </div>

                <textarea name="" id=""
                :class="themeIndex == 2 ? 'text-white border-dotted' : themeIndex == 3 ? 'text-black dark:border-dotted dark:text-white' : 'text-black border-gray-600' "

                    class="bg-white/[0.02] text-sm outline-none w-full h-52 border resize-none py-1 px-3 rounded-md">- arship berkas
- menginput ... </textarea>

                <p
                :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                class="mt-3 mb-2 text-sm lg:text-base">Informasi Jika Akan
                    Dihubungi
                </p>
                <textarea name="" id=""
                :class="themeIndex == 2 ? 'text-white border-dotted' : themeIndex == 3 ? 'text-black dark:border-dotted dark:text-white' : 'text-black border-gray-600' "
                
                    class="bg-white/[0.02] text-sm outline-none w-full h-52 border resize-none py-1 px-3 rounded-md">08**********</textarea>

                <div class="btns flex mt-2 justify-between">

                    <div class="btn flex gap-2">


                        <button
                        class="transition-all duration-200 py-1 px-3 text-xs md:text-sm lg:text-base bg-blue-600 hover:bg-blue-700 active:bg-blue-900  font-medium rounded text-white">Simpan</button>
        
                        <button
                            class="transition-all duration-200 py-1 px-3 text-xs md:text-sm lg:text-base bg-gray-600 hover:bg-gray-700 active:bg-black font-medium rounded text-white">
                            Draft</button>

                    </div>

                    <div class="btn flex gap-2">

                        <button
                            class="transition-all duration-200 py-1 px-3 text-xs md:text-sm lg:text-base bg-red-700 hover:bg-red-800 active:bg-red-900 font-medium rounded text-white">Cancel</button>

                        <button
                            class="transition-all duration-200 py-1 px-3 text-xs md:text-sm lg:text-base bg-yellow-400 hover:bg-yellow-600 active:bg-yellow-700 font-medium rounded text-white">Reset</button>

                    </div>


                </div>

            </div>

            <!-- end Form -->



            <sidebar class="text-gray-400 w-full py-5 lg:translate-y-4 px-10 order-1">
                <div class="lg:sticky top-20">

                    <h3 class="text-xs lg:text-base">Devisi : <span
                        :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                        >Economy
                            Faculty</span>
                    </h3>
                    <h3 class="text-xs lg:text-base">Nama : <span
                :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' ">A.
                            Baso
                            [00016154]</span>
                    </h3>
                    <h3 class="text-xs lg:text-base">No. Surat Permintaan Cuti : <span
                        :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                        >EGLR-MMYYxxxxx</span>
                    </h3>

                </div>

            </sidebar>

        </div>

    </form>
</section>
@push('scripts')
<script type="text/javascript" src="{{ asset('js/cuti.js') }}"></script>
@endpush
</x-app-layout>