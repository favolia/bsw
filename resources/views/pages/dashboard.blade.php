<x-app-layout>
    <section
        :class="themeIndex == 2 ? 'bg-gradient-to-br from-gray-800 via-gray-700 to-gray-800' : themeIndex == 3 ? 'bg-slate-200/50 dark:bg-gradient-to-br dark:from-gray-800 dark:via-gray-700 dark:to-gray-800' : 'bg-slate-200/50' "
        class="min-h-screen flex flex-col lg:flex-row w-full" id="webSection">
        <main class="w-full px-2 md:px-5 py-5 rounded-md flex flex-col gap-4">
    
            <!-- banner -->
            <div :class="themeIndex == 2 ? 'border border-dotted bg-none' : themeIndex == 3 ? 'dark:border dark:border-dotted dark:bg-none bg-gradient-to-r from-blue-700 via-blue-600 to-red-500/75' : 'bg-gradient-to-r from-blue-700 via-blue-600 to-red-500/75'  "
                class="welcome h-36 w-full overflow-hidden flex flex-row rounded-lg">
    
                <div class="h-full w-[55%] flex flex-col justify-between items-center px-6 sm:px-8 py-4">
    
                    <div class="self-baseline">
                        <h2 class="text-xs md:text-base text-white">WELCOME, <span class="font-bold">YOU</span>!
                        </h2>
                        <p class="text-[.60rem] lg:mt-1 lg:text-[.70rem] text-white ">You have
                            <span class="text-red-400 font-bold">5</span> pending task, let's see what you can
                            do
                            today!
                        </p>
                    </div>
    
                    <button
                        :class="themeIndex == 2 ? 'bg-white hover:bg-white/80 text-gray-800 ' : themeIndex == 3 ? 'bg-white hover:bg-white/80 text-red-700 px-2 dark:text-gray-800' : 'bg-white hover:bg-white/80 text-red-700'   "
                        class="  transition-all duration-200 py-2 text-xs font-medium md:font-normal px-5 lg:py-2 md:text-sm self-baseline rounded-md lg:rounded-lg">
                        Check Now
                    </button>
    
                </div>
    
                <div class="h-full w-[45%] flex items-center justify-center">
                    <div class="md:translate-x-16 translate-y-3">
                        <img src="{{ asset('img/bannerPhoto.png') }}" class="w-32" alt="">
                    </div>
                </div>
    
            </div>
            <!-- end banner -->
    
            <!-- databox -->
            <div class="count-statistic grid grid-cols-2 sm:grid-cols-4 sm:flex sm:flex-row gap-5 w-full">
    
                <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted text-white' : themeIndex == 3 ? 'bg-white dark:text-white dark:bg-white/0 dark:border dark:border-dotted' : 'bg-white' "
                    class="total-employee flex cursor-pointer justify-between px-4 items-center h-28 sm:h-20 rounded-lg  shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 ease-in-out w-full">
    
                    <div class="flex w-fit flex-col justify-center items-start">
                        <p class="text-[.60rem]">Total Employee</p>
                        <h2 id="totalEmployee" class="text-2xl font-medium">0</h2>
                    </div>
                    <div :class="themeIndex == 2 ? 'border border-dotted bg-transparent' : themeIndex == 3 ? 'bg-blue-300 dark:border dark:border-dotted dark:bg-transparent' : 'bg-blue-300'  "
                        class="icon h-8 w-8 flex justify-center items-center rounded-full">
                        <i class="fa fa-users"></i>
                    </div>
    
                </div>
    
                <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted text-white' : themeIndex == 3 ? 'bg-white dark:text-white dark:bg-white/0 dark:border dark:border-dotted' : 'bg-white' "
                    class="total-employee flex cursor-pointer justify-between px-4 items-center h-28 sm:h-20 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 ease-in-out w-full">
    
                    <div class="flex w-fit flex-col justify-center items-start">
                        <p class="text-[.60rem]">Present</p>
                        <h2 id="present" class="text-2xl font-medium">0</h2>
                    </div>
                    <div :class="themeIndex == 2 ? 'border border-dotted bg-transparent' : themeIndex == 3 ? 'bg-yellow-300/50 dark:border dark:border-dotted dark:bg-transparent' : 'bg-yellow-300/50'  "
                        class="icon h-8 w-8 flex justify-center items-center rounded-full">
                        <i class="fa fa-newspaper-o"></i>
                    </div>
    
                </div>
    
                <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted text-white' : themeIndex == 3 ? 'bg-white dark:text-white dark:bg-white/0 dark:border dark:border-dotted' : 'bg-white' "
                    class="total-employee flex cursor-pointer justify-between px-4 items-center h-28 sm:h-20 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 ease-in-out w-full">
    
                    <div class="flex w-fit flex-col justify-center items-start">
                        <p class="text-[.60rem]">Late </p>
                        <h2 id="late" class="text-2xl font-medium">0</h2>
                    </div>
                    <div :class="themeIndex == 2 ? 'border border-dotted bg-transparent' : themeIndex == 3 ? 'bg-orange-300/50 dark:border dark:border-dotted dark:bg-transparent' : 'bg-orange-300/50'  "
                        class="icon h-8 w-8 flex justify-center items-center rounded-full">
                        <i class=" fa fa-clock-o"></i>
                    </div>
    
                </div>
    
                <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted text-white' : themeIndex == 3 ? 'bg-white dark:text-white dark:bg-white/0 dark:border dark:border-dotted' : 'bg-white' "
                    class="total-employee flex cursor-pointer justify-between px-4 items-center h-28 sm:h-20 rounded-lg shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 ease-in-out w-full">
    
                    <div class="flex w-fit flex-col justify-center items-start">
                        <p class="text-[.60rem]">Annual Leave</p>
                        <h2 id="annualLeave" class="text-2xl font-medium">0</h2>
                    </div>
                    <div :class="themeIndex == 2 ? 'border border-dotted bg-transparent' : themeIndex == 3 ? 'bg-purple-300/50 dark:border dark:border-dotted dark:bg-transparent' : 'bg-purple-300/50'  "
                        class="icon h-8 w-8 flex justify-center items-center rounded-full">
                        <i class="fa fa-calendar-times-o"></i>
                    </div>
    
                </div>
    
            </div>
            <!-- end databox -->
    
            <!-- task statisc and employee -->
            <div class="statistic-and-employee flex flex-col md:flex-row gap-5 w-full">
    
                <!-- chart -->
                <div :class="themeIndex == 2 ? 'bg-transparent text-white border border-dotted bg-white' : themeIndex == 3 ? 'dark:bg-transparent dark:text-white dark:border dark:border-dotted bg-white' : 'bg-white' "
                    class="box-statistic min-h-[16rem] rounded-lg cursor-default flex flex-col shadow-sm transition-all duration-300 ease-in-out w-full gap-5 px-5 py-3">
    
                    <div class="flex flex-row justify-between">
                        <h2>Task Statistic</h2>
                        <span><i class="fa fa-ellipsis-h"></i></span>
                    </div>
    
                    <div
                        class="w-full cursor-pointer md:-translate-y-4 h-full flex justify-center items-center">
                        <canvas id="myChart"
                            class="h-40 cursor-default w-h-40 transition-all duration-200"></canvas>
                    </div>
    
                </div>
                <!-- end chart -->
    
                <!-- star employee -->
                <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted text-white' : themeIndex == 3 ? 'dark:text-white dark:bg-transparent dark:border dark:border-dotted bg-white' : 'bg-white'    "
                    class="box-statistic h-64 rounded-lg flex flex-col shadow-sm transition-all duration-300 ease-in-out w-full gap-1 px-5 py-3">
    
                    <div class="flex flex-row justify-between">
                        <h2>Star Employee</h2>
                        <span><i class="fa fa-ellipsis-h"></i></span>
                    </div>
    
                    <div class="w-full h-full flex flex-col justify-between py-3 px-5">
    
                        <div :class="themeIndex == 2 ? 'border-dotted hover:bg-slate-200/30 text-white' : themeIndex == 3 ? 'dark:border-dotted dark:hover:bg-slate-200/30 dark:text-white border-slate-300' : ''  "
                            class="border flex flex-row rounded-md cursor-pointer hover:bg-slate-100 transition-all duration-200 gap-2 p-1">
                            <img class="w-11 bg-indigo-400 rounded-md" src="{{ asset('img/face1.jpg') }}" alt="">
                            <div class="">
                                <h3 class="text-xs font-medium w-40 truncate overflow-hidden">John doe</h3>
                                <p class="text-[.50rem] w-32 truncate overflow-hidden">
                                    Marcoom senior office</p>
                                <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500'    "
                                    class="text-[.50rem] font-medium w-36 truncate overflow-hidden">
                                    50 Tasks finished this month</p>
                            </div>
                        </div>
    
                        <div :class="themeIndex == 2 ? 'border-dotted hover:bg-slate-200/30 text-white' : themeIndex == 3 ? 'dark:border-dotted dark:hover:bg-slate-200/30 dark:text-white border-slate-300' : ''  "
                            class="border flex flex-row rounded-md cursor-pointer hover:bg-slate-100 transition-all duration-200 gap-2 p-1">
                            <img class="w-11 bg-green-400 rounded-md" src="img/face5.jpg" alt="">
                            <div class="">
                                <h3 class="text-xs font-medium w-40 truncate overflow-hidden">Arabella Chloe
                                </h3>
                                <p class="text-[.50rem] w-32 truncate overflow-hidden">
                                    UI / UX Designer</p>
                                <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500'    "
                                    class="text-[.50rem] font-medium w-36 truncate overflow-hidden">
                                    42 Tasks finished this month</p>
                            </div>
                        </div>
    
                        <div :class="themeIndex == 2 ? 'border-dotted hover:bg-slate-200/30 text-white' : themeIndex == 3 ? 'dark:border-dotted dark:hover:bg-slate-200/30 dark:text-white border-slate-300' : ''  "
                            class="border flex flex-row rounded-md cursor-pointer hover:bg-slate-100 transition-all duration-200 gap-2 p-1">
                            <img class="w-11 bg-yellow-400 rounded-md" src="img/face4.jpg" alt="">
                            <div class="">
                                <h3 class="text-xs font-medium w-40 truncate overflow-hidden">Anastasia Dee</h3>
                                <p class="text-[.50rem] w-32 truncate overflow-hidden">
                                    Graphic Designer</p>
                                <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500'    "
                                    class="text-[.50rem] font-medium w-36 truncate overflow-hidden">
                                    33 Tasks finished this month</p>
                            </div>
                        </div>
    
                    </div>
    
                </div>
                <!-- end star employee -->
    
            </div>
            <!-- end task statisc and employee -->
    
            <!-- who's online -->
            <div :class="themeIndex == 2 ? 'border border-dotted bg-transparent text-white' : themeIndex === 3 ? 'bg-white dark:text-white dark:bg-transparent dark:border dark:border-dotted' : 'bg-white'  "
                class="shadow-sm transition-all duration-300 ease-in-out flex flex-col rounded-lg w-full py-3 px-5 gap-4">
    
                <div class="flex flex-row justify-between">
                    <h2>Who's Online?</h2>
                    <span><i class="fa fa-ellipsis-h"></i></span>
                </div>
    
                <table class="w-full">
    
                    <tr class="border-b-2 font-thin text-slate-400">
                        <th class="text-[.45rem] md:text-xs py-2">Name</th>
                        <th class="text-[.45rem] md:text-xs py-2">Position</th>
                        <th class="text-[.45rem] md:text-xs py-2">Department</th>
                        <th class="text-[.45rem] md:text-xs py-2">Email</th>
                        <th class="text-[.45rem] md:text-xs py-2">Status</th>
                        <th class="text-[.45rem] md:text-xs py-2">Action</th>
                    </tr>
    
                    <tbody>
    
                        <tr :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'dark:text-white' : ''  "
                            class="[&>td]:py-2 text-center">
                            <td>
                                <div
                                    class="flex justify-center h-full md:justify-start gap-3 items-center text-[.45rem] md:text-xs">
                                    <img class="w-11 hidden md:grid bg-slate-400 rounded" src="img/face1.jpg"
                                        alt="">
                                    <span class="font-medium">John Doe</span>
                                </div>
                            </td>
                            <td class="text-[.45rem] md:text-xs">Marcoom Senior Officer</td>
                            <td class="text-[.45rem] md:text-xs">Dept. Marcoom</td>
                            <td class="text-[.45rem] md:text-xs">Johndoe@HRIS.com</td>
                            <td class="text-[.45rem] md:text-xs">
                                <span
                                    class="px-1 border border-green-400 rounded-full text-[.45rem] md:text-xs text-green-400 font-medium">Online</span>
                            </td>
                            <td>
                                <div class="w-full h-full flex justify-center items-center">
                                    <span
                                        :class="themeIndex == 2 ? 'hover:bg-transparent border border-dotted border-transparent hover:border-white bg-transparent' : themeIndex == 3 ? 'dark:hover:bg-transparent dark:border dark:border-dotted dark:border-transparent dark:hover:border-white dark:bg-transparent hover:bg-blue-400 bg-blue-200' : 'hover:bg-blue-400 bg-blue-200' "
                                        class="h-7 w-7 cursor-pointer scale-75 md:scale-100  rounded-full flex justify-center items-center">
                                        <i class="-translate-y-[.07rem] fa fa-comments-o"></i>
                                    </span>
                                </div>
                            </td>
                        </tr>
    
                        <tr :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'dark:text-white' : ''  "
                            class="[&>td]:py-2 text-center">
                            <td>
                                <div
                                    class="flex justify-center h-full md:justify-start gap-3 items-center text-[.45rem] md:text-xs">
                                    <img class="w-11 hidden md:grid bg-slate-400 rounded" src="img/face2.jpg"
                                        alt="">
                                    <span class="font-medium">Alexander Stan</span>
                                </div>
                            </td>
                            <td class="text-[.45rem] md:text-xs">Programmer Senior Officer</td>
                            <td class="text-[.45rem] md:text-xs">Dept. Developer</td>
                            <td class="text-[.45rem] md:text-xs">Alexanderstan@HRIS.com</td>
                            <td class="text-[.45rem] md:text-xs">
                                <span
                                    class="px-1 border border-green-400 rounded-full text-[.45rem] md:text-xs text-green-400 font-medium">Online</span>
                            </td>
                            <td>
                                <div class="w-full h-full flex justify-center items-center">
                                    <span
                                        :class="themeIndex == 2 ? 'hover:bg-transparent border border-dotted border-transparent hover:border-white bg-transparent' : themeIndex == 3 ? 'dark:hover:bg-transparent dark:border dark:border-dotted dark:border-transparent dark:hover:border-white dark:bg-transparent hover:bg-blue-400 bg-blue-200' : 'hover:bg-blue-400 bg-blue-200' "
                                        class="h-7 w-7 cursor-pointer scale-75 md:scale-100 rounded-full flex justify-center items-center">
                                        <i class="-translate-y-[.07rem] fa fa-comments-o"></i>
                                    </span>
                                </div>
                            </td>
                        </tr>
    
                        <tr :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'dark:text-white' : '' "
                            class="[&>td]:py-2 text-center">
                            <td>
                                <div
                                    class="flex justify-center h-full md:justify-start gap-3 items-center text-[.45rem] md:text-xs">
                                    <img class="w-11 hidden md:grid bg-slate-400 rounded" src="img/face3.jpg"
                                        alt="">
                                    <span class="font-medium">Elizabeth</span>
                                </div>
                            </td>
                            <td class="text-[.45rem] md:text-xs">HR Menager</td>
                            <td class="text-[.45rem] md:text-xs">Dept. HRD</td>
                            <td class="text-[.45rem] md:text-xs">Elizabeth@HRIS.com</td>
                            <td class="text-[.45rem] md:text-xs">
                                <span
                                    class="px-1 border border-green-400 rounded-full text-[.45rem] md:text-xs text-green-400 font-medium">Online</span>
                            </td>
                            <td>
                                <div class="w-full h-full flex justify-center items-center">
                                    <span
                                        :class="themeIndex == 2 ? 'hover:bg-transparent border border-dotted border-transparent hover:border-white bg-transparent' : themeIndex == 3 ? 'dark:hover:bg-transparent dark:border dark:border-dotted dark:border-transparent dark:hover:border-white dark:bg-transparent hover:bg-blue-400 bg-blue-200' : 'hover:bg-blue-400 bg-blue-200' "
                                        class="h-7 w-7 cursor-pointer scale-75 md:scale-100 rounded-full flex justify-center items-center">
                                        <i class="-translate-y-[.07rem] fa fa-comments-o"></i>
                                    </span>
                                </div>
                            </td>
                        </tr>
    
                    </tbody>
                </table>
    
    
            </div>
            <!-- end who's online -->
    
        </main>
    
        <!-- section aside -->
        <aside class=" w-full px-2 sm:px-5 lg:px-0 lg:w-2/5 flex flex-col py-5 lg:pr-4 gap-4">
    
            <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted' : themeIndex == 3 ? 'dark:bg-white/0 dark:border dark:border-dotted bg-white' : 'bg-white'  "
                class="w-full flex flex-col gap-3 rounded-lg shadow-sm h-[32rem] transition-all duration-300 ease-in-out  py-4 px-4">
    
                <!-- date -->
                <div class="date h-56 w-full rounded-lg grid place-items-center">
    
                    <div class="flex items-center w-full justify-center">
    
                        <div class=" w-full">
                            <div :class="themeIndex == 2 ? 'bg-transparent' : themeIndex == 3 ? 'dark:bg-transparent bg-white' : 'bg-white'  "
                                class="p-5 rounded">
                                <div class="px-2 flex items-center justify-between">
                                    <span
                                        :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'dark:text-gray-100 text-gray-800' : 'text-gray-800'  "
                                        class="focus:outline-none text-base font-bold"><span
                                            id="monthName"></span>
                                        <span id="yearName"></span></span>
                                    <div class="flex items-center">
                                        <button id="prev" aria-label="calendar backward"
                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-800 dark:text-gray-100' : 'text-gray-800' "
                                            class="focus:text-gray-400 hover:text-gray-400 ">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-chevron-left" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="15 6 9 12 15 18" />
                                            </svg>
                                        </button>
                                        <button id="next" aria-label="calendar forward"
                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-800 dark:text-gray-100' : 'text-gray-800'  "
                                            class="focus:text-gray-400 hover:text-gray-400 ml-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler  icon-tabler-chevron-right" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="9 6 15 12 9 18" />
                                            </svg>
                                        </button>
    
                                    </div>
                                </div>
                                <div class="flex items-center justify-between pt-2 overflow-x-auto">
                                    <!-- dates -->
                                    <table class="w-full">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Min
                                                        </p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Sen
                                                        </p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Sel
                                                        </p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Rab
                                                        </p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Kam
                                                        </p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Jum
                                                        </p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="w-full flex justify-center">
                                                        <p
                                                            class="text-xs font-medium text-center text-gray-400">
                                                            Sab
                                                        </p>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            class="text-xs text-red-500 font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td class="pt-1">
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            class="text-xs text-red-500 font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            class="text-xs text-red-500 font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            class="text-xs text-red-500 font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                            </tr>
                                            <tr>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            class="text-xs text-red-500 font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList" class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs  font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs  font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                            </tr>
                                            <tr>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            class="text-xs text-red-500 font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
    
                                                <td>
                                                    <div
                                                        class="px-1 py-1 cursor-pointer flex w-full justify-center">
                                                        <p id="dayList"
                                                            :class="themeIndex == 2 ? 'text-gray-100' : themeIndex == 3 ? 'text-gray-500 dark:text-gray-100' : 'text-gray-500' "
                                                            class="text-xs font-medium">
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- end dates -->
                                </div>
                            </div>
    
                        </div>
    
                    </div>
                </div>
                <!-- end date -->
    
                <!-- schedule & holidays list -->
                <div class="schedule-and-holidays px-1">
                    <h3 :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                        class="translate-x-2">Schedule & Holidays</h3>
    
                    <div class="w-full h-full flex flex-col justify-center">
    
                        <div :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                            class="py-2 px-2 flex flex-row justify-between items-center cursor-pointer transition-all duration-200 hover:bg-slate-200/30 rounded-lg">
    
                            <div class="flex justify-start w-full items-center gap-2">
    
                                <span
                                    :class="themeIndex == 2 ? 'bg-transparent' : themeIndex == 3 ? 'dark:bg-transparent bg-blue-200' : 'bg-blue-200' "
                                    class="h-7 w-7 rounded-full flex justify-center items-center">
                                    <i class="-translate-y-[.07rem] fa fa-comments-o"></i>
                                </span>
    
                                <span class="flex flex-col">
                                    <p class="text-xs font-medium">Huddle Meeting</p>
                                    <span class="text-[.60rem]">Meeting day</span>
                                </span>
    
                            </div>
                            <span
                                :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.60rem]">26/02/2023</span>
                        </div>
    
                        <div :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                            class="py-2 px-2 flex flex-row justify-between items-center cursor-pointer transition-all duration-200 hover:bg-slate-200/30 rounded-lg">
                            <div class="flex justify-start w-full items-center gap-2">
    
                                <span
                                    :class="themeIndex == 2 ? 'bg-transparent' : themeIndex == 3 ? 'dark:bg-transparent bg-blue-200' : 'bg-blue-200' "
                                    class="h-7 w-7 rounded-full flex justify-center items-center">
                                    <i class="-translate-y-[.07rem] fa fa-comments-o"></i>
                                </span>
    
                                <span class="flex flex-col">
                                    <p class="text-xs font-medium">Annual Meeting</p>
                                    <span class="text-[.60rem]">Meeting day</span>
                                </span>
    
                            </div>
                            <span
                                :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.60rem]">25/02/2023</span>
                        </div>
    
                        <div :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                            class="py-2 px-2 flex flex-row justify-between items-center cursor-pointer transition-all duration-200 hover:bg-slate-200/30 rounded-lg">
                            <div class="flex justify-start w-full items-center gap-2">
    
                                <span
                                    :class="themeIndex == 2 ? 'bg-transparent' : themeIndex == 3 ? 'dark:bg-transparent bg-blue-200' : 'bg-blue-200' "
                                    class="h-7 w-7 rounded-full flex justify-center items-center">
                                    <i class=" fa fa-sun-o"></i>
                                </span>
    
                                <span class="flex flex-col">
                                    <p class="text-xs font-medium">Good Friday</p>
                                    <span class="text-[.60rem]">Public Holiday</span>
                                </span>
    
                            </div>
                            <span
                                :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.60rem]">25/02/2023</span>
                        </div>
    
                        <div :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                            class="py-2 px-2 flex flex-row justify-between items-center cursor-pointer transition-all duration-200 hover:bg-slate-200/30 rounded-lg">
                            <div class="flex justify-start w-full items-center gap-2">
    
                                <span
                                    :class="themeIndex == 2 ? 'bg-transparent' : themeIndex == 3 ? 'dark:bg-transparent bg-blue-200' : 'bg-blue-200' "
                                    class="h-7 w-7 rounded-full flex justify-center items-center">
                                    <i class=" fa fa-sun-o"></i>
                                </span>
    
                                <span class="flex flex-col">
                                    <p class="text-xs font-medium">Regional Meeting</p>
                                    <span class="text-[.60rem]">Meeting day</span>
                                </span>
    
                            </div>
                            <span
                                :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.60rem]">24/02/2023</span>
                        </div>
    
                    </div>
                    <!-- end schedule & holidays list -->
    
                </div>
    
            </div>
    
            <!-- birtdays -->
            <div :class="themeIndex == 2 ? 'bg-transparent border border-dotted' : themeIndex == 3 ? 'bg-white dark:bg-transparent dark:border dark:border-dotted' : 'bg-white' "
                class="shadow-lg h-[17.37rem]  transition-all duration-300 ease-in-out flex flex-col gap-3 rounded-lg w-full py-3 px-5">
    
                <div class="flex flex-row justify-between">
                    <h2
                        :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' ">
                        Birthdays</h2>
                    <select name="" id="" required
                        class="text-[.60rem] outline-none border transition-all duration-200 ease-linear text-slate-500 rounded-full px-1 cursor-pointer bg-white focus:text-blue-700 font-bold focus:border-blue-500">
                        <option value="">This Month</option>
                        <option value="">This Year</option>
                        <option value="">This Week</option>
                    </select>
                </div>
    
                <div :class="themeIndex == 2 ? 'border-none' : themeIndex == 3 ? 'border border-slate-300 dark:border-none' : 'border border-slate-300' "
                    class="w-full h-full flex flex-col gap-2 justify-between border border-slate-300 dark:border-none p-2 rounded-lg ">
    
                    <div :class="themeIndex == 2 ? 'hover:bg-slate-200/30' : themeIndex == 3 ? 'hover:bg-slate-100 dark:hover:bg-slate-200/30' : 'hover:bg-slate-100' "
                        class="flex flex-row rounded-md cursor-pointer transition-all duration-200 gap-2 p-1">
                        <img class="w-12 bg-red-400 rounded-md" src="img/face5.jpg" alt="">
                        <div class="h-full flex flex-col">
                            <h3 :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                                class="text-xs font-medium w-40 truncate overflow-hidden">
                                Dessy
                                Path</h3>
                            <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.50rem] -translate-y-[.12rem] font-medium w-36 truncate overflow-hidden">
                                Finance Specialist</p>
                            <!-- birthday date here -->
                            <a title="send a gift?"
                                class="send-gift w-fit flex gap-1 items-center py-[.20rem] font-medium hover:scale-110 hover:translate-x-1 transition-all ease-in-out text-[.60rem]"
                                href="">
                                <i class="text-red-600 text-sm leading-3 fa fa-gift"></i>
                                <span
                                    :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' ">Send
                                    Gift</span>
                            </a>
                        </div>
                        <i></i>
                    </div>
    
    
                    <div :class="themeIndex == 2 ? 'hover:bg-slate-200/30' : themeIndex == 3 ? 'hover:bg-slate-100 dark:hover:bg-slate-200/30' : 'hover:bg-slate-100' "
                        class="flex flex-row rounded-md cursor-pointer transition-all duration-200 gap-2 p-1">
    
                        <img class="w-12 bg-sky-400 rounded-md" src="img/big-mc-logo.png" alt="">
    
                        <a class="h-full flex flex-col">
                            <h3 :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                                class="text-xs font-medium w-40 truncate overflow-hidden">
                                Dais
                            </h3>
                            <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.50rem] -translate-y-[.12rem] font-medium w-36 truncate overflow-hidden">
                                Front-End Developer</p>
                            <!-- send gift here -->
                            <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="birthday-date text-[.50rem] italic font-medium">
                                14/05/2023
                            </p>
                        </a>
                    </div>
    
                    <div :class="themeIndex == 2 ? 'hover:bg-slate-200/30' : themeIndex == 3 ? 'hover:bg-slate-100 dark:hover:bg-slate-200/30' : 'hover:bg-slate-100' "
                        class="flex flex-row rounded-md cursor-pointer transition-all duration-200 gap-2 p-1">
    
                        <img class="w-12 bg-yellow-400 rounded-md" src="img/face4.jpg" alt="">
    
                        <a class="h-full flex flex-col">
                            <h3 :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                                class="text-xs font-medium w-40 truncate overflow-hidden">
                                Anastasia Dee</h3>
                            <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="text-[.50rem] -translate-y-[.12rem] font-medium w-36 truncate overflow-hidden">
                                Graphic Designer</p>
                            <!-- send gift here -->
                            <p :class="themeIndex == 2 ? 'text-white/40' : themeIndex == 3 ? 'text-slate-500 dark:text-white/40' : 'text-slate-500' "
                                class="birthday-date text-[.50rem] italic font-medium ">
                                30/04/2023
                            </p>
                        </a>
                    </div>
    
                </div>
    
            </div>
            <!-- end birtdays -->
    
        </aside>
        <!-- end section aside -->
    
    
    </section>
    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/date.js') }}"></script>
    @endpush
</x-app-layout>