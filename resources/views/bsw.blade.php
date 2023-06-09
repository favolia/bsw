<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="img/BosowaLogoB2.ico">
    <script type="text/javascript" src="https://unpkg.com/countup.js@2.3.2/dist/countUp.umd.js"></script>
    <title>Dashboard</title>
</head>

<body x-data="{
    smallSidebarButton: true,
    showEmployeeDropdown: false,
    showTimeAttendanceDropdown: false,
    showDropdownOne: false,
    themeIndex: $persist(1),
    themeBtn: false,
}">

    <style>
        .tippy-tooltip {
            background-color: transparent;
        }

        aside::-webkit-scrollbar {
            width: .07rem;
            border-radius: .2rem;
            background-color: transparent;
        }

        aside::-webkit-scrollbar-thumb {
            /* border-bottom-left-radius: .2rem;
            border-top-left-radius: .2rem; */
            background-color: #cbd5e1;
            border-radius: .2rem;
        }

        .scroller::-webkit-scrollbar { 
            width: .07rem;
            border-radius: .2rem;
            background-color: transparent;            
        }

        .scroller::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: .2rem;
        }

        
    </style>

    <div class="min-h-screen w-full lg:flex lg:flex-row sm:flex-col">

        <!-- sidebar -->
        <aside id="menu" :class="smallSidebarButton ? 'lg:w-14' : 'lg:w-60' "
            class="h-screen lg:sticky transition-all duration-500 ease-in-out -translate-x-full fixed top-0 lg:-translate-x-0 w-[65%] bg-gradient-to-b from-blue-700 via-blue-600 to-red-400 overflow-y-scroll z-50 lg:z-50">

            <div class="hris-logo w-full py-5 flex justify-center">

                <!-- example logo -->
                <div
                    class="h-10 w-full ml-5 mr-7 lg:ml-0 lg:mr-0 py-2 italic font-bold flex lg:justify-center justify-between text-center text-white">

                    <div class="flex justify-center items-center gap-2">
                        <a href="/index.html"><img src="img/BosowaLogo2.png" x-show="smallSidebarButton ? false : true " width="144"></a>
                        <a href="/index.html"><img src="img/BosowaLogoB.png" x-show="smallSidebarButton ? true : false " width="30"></a>
                    </div>

                    <span id="closeMenu" class="cursor-pointer lg:hidden scale-150 flex justify-end items-center px-2 translate-x-2 translate-y-1 hover:opacity-80">
                        <i class="fa fa-angle-left font-medium"></i>
                    </span>

                </div>
                <!-- end example logo -->

            </div>

            <!-- sidebar menu list -->
            <div id="sidebarMenus" :class="smallSidebarButton ? 'px-3' : 'px-5' "
                class="links transition-all duration-500 ease-in-out lg:pr-0 w-full pb-3">

                <span class="text-white text-xs">
                    <span x-show=" ! smallSidebarButton" x-transition.delay.360ms>Menu</span>
                </span>
                <div class="menu-link text-white w-full mt-1 flex flex-col gap-1">

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-th-large"></i>
                            <span x-show=" ! smallSidebarButton" x-transition.delay.360ms>Dashboard</span></span>
                        <!-- notif here -->
                    </a>

                    <span @click="showEmployeeDropdown = ! showEmployeeDropdown"
                        class=" text-xs cursor-pointer py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-list-ul"></i><span x-show=" ! smallSidebarButton"
                                x-transition.delay.360ms>Employee</span></span>
                        <span x-show=" ! smallSidebarButton" x-transition.delay.360ms class="flex gap-3">
                            <span id=""
                                class="notif h-4 w-4 font-bold flex justify-center items-center rounded-full text-[.70rem] pb-[.05rem] bg-green-500">5</span>
                            <i id="dropdownMenuIcon"
                                :class="showEmployeeDropdown ? 'fa fa-sort-up translate-y-[.30rem]' : 'fa fa-sort-down -translate-y-[.10rem]' "></i>
                        </span>
                    </span>

                    <!-- dropdown -->
                    <div id=" dropdownMenuItem" x-show="showEmployeeDropdown"
                        class="lg:w-[90%] lg:translate-x-2 list-disc text-xs shadow-inner text-white/80 py-2 w-full rounded-md bg-slate-700/20 border border-t-blue-600 border-x-blue-600 border-b-red-500/10  px-2">

                        <div class="flex flex-col gap-1">

                            <a href="" class="font-medium"><i class="fa fa-link pr-1"></i>Personal information</a>

                        </div>

                    </div>
                    <!-- end dropdown -->

                    <span x-show="smallSidebarButton == false" x-id="['text-input']"
                        @click=" showTimeAttendanceDropdown=! showTimeAttendanceDropdown"
                        class=" text-xs cursor-pointer py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-spin fa-clock-o"></i><span
                                x-show=" ! smallSidebarButton" x-transition.delay.360ms>Time Attendance</span></span>
                        <span x-show=" ! smallSidebarButton" x-transition.delay.360ms class="flex gap-3">
                            <span id=""
                                class="notif h-4 w-4 font-bold flex justify-center items-center rounded-full text-[.70rem] pb-[.05rem] bg-green-500">5</span>
                            <i id="dropdownMenuIcon"
                                :class="showTimeAttendanceDropdown? 'fa fa-sort-up translate-y-[.30rem]' : 'fa fa-sort-down -translate-y-[.10rem]' "></i>
                        </span>
                    </span>

                    <!-- dropdown -->
                    <div id=" dropdownMenuItem" x-show="showTimeAttendanceDropdown"
                        class="lg:w-[90%] lg:translate-x-2 list-disc text-xs shadow-inner text-white/80 py-2 w-full rounded-md bg-slate-700/20 border border-t-blue-600 border-x-blue-600 border-b-red-500/10  px-2">

                        <div class="flex flex-col gap-2">

                            <a href="" class="font-medium"><i class="fa fa-link pr-1"></i>Attendance
                                archive</a>
                            <a href="annualLeave.html" class="font-medium"><i class="fa fa-link pr-1"></i>Annual
                                leave</a>

                        </div>

                    </div>
                    <!-- end dropdown -->

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-money"></i><span x-show=" ! smallSidebarButton"
                                x-transition.delay.360ms>Payroll</span></span>
                        <!-- notif here -->
                    </a>

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-shield"></i><span x-show=" ! smallSidebarButton"
                                x-transition.delay.360ms>Reimbursment</span></span>
                        <!-- notif here -->
                    </a>

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-signal"></i><span x-show=" ! smallSidebarButton"
                                x-transition.delay.360ms>Performance</span></span>
                        <!-- notif here -->
                    </a>

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-handshake-o"></i><span x-show=" ! smallSidebarButton"
                                x-transition.delay.360ms>Recruitment</span></span>
                        <!-- notif here -->
                    </a>

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-graduation-cap"></i><span
                                x-show=" ! smallSidebarButton" x-transition.delay.360ms>Training</span></span>
                        <!-- notif here -->
                    </a>

                    <a href=""
                        class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                class="mr-3 w-3 text-center fa fa-sitemap"></i><span x-show=" ! smallSidebarButton"
                                x-transition.delay.360ms>Structure
                                Organization</span></span>
                        <!-- notif here -->
                    </a>

                    <!-- account menu section -->
                    <span class="text-white text-xs mt-5"><span x-show=" ! smallSidebarButton"
                            x-transition.delay.360ms>Account</span></span>
                    <div class="menu-link text-white w-full mt-1 flex flex-col gap-1">

                        <a href=""
                            class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                    class="mr-3 w-3 text-center fa fa-user"></i><span x-show=" ! smallSidebarButton"
                                    x-transition.delay.360ms>Profile</span></span>
                            <!-- notif here -->
                        </a>

                        <a href=""
                            class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                    class="mr-3 w-3 text-center fa fa-spin fa-gear"></i><span
                                    x-show=" ! smallSidebarButton" x-transition.delay.360ms>Setting</span></span>
                            <!-- notif here -->
                        </a>

                        <a href=""
                            class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                    class="mr-3 w-3 text-center fa fa-universal-access"></i><span
                                    x-show=" ! smallSidebarButton" x-transition.delay.360ms>Permission</span></span>
                            <!-- notif here -->
                        </a>

                        <a href=""
                            class="text-xs py-1 lg:pl-2 px-2 pr-3 w-full flex flex-row justify-between items-center transition-all duration-200 ease-in-out hover:bg-slate-100/30 rounded-md lg:rounded-r-none "><span><i
                                    class="mr-3 w-3 text-center fa fa-sign-out"></i><span x-show=" ! smallSidebarButton"
                                    x-transition.delay.360ms>Logout</span></span>
                            <!-- notif here -->
                        </a>

                        <!-- search bar sidebar -->
                        <form class="mt-2 md:hidden">

                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                            <div class="relative w-full">

                                <div
                                    class="absolute opacity-40 inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>

                                <input type="text" id="default-search"
                                    class="block w-full pl-10 py-2 pr-2 text-xs cursor-pointer bg-gray-300 rounded-full placeholder-gray-400/80 text-slate-500 outline-none focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Search">

                            </div>

                        </form>
                        <!-- end search bar sidebar -->

                    </div>
                    <!-- end account menu section -->
                </div>
            </div>
            <!-- end sidebar menu list -->

        </aside>
        <!-- end sidebar -->

        <div class="w-full  z-50">

            <!-- navbar -->
            <nav @resize.window="
            width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
            if (width <= 1250) {
                smallSidebarButton = true
                if (width <= 1024) {
                    smallSidebarButton = ! smallSidebarButton;
                }
            } 
            " :class="themeIndex == 2 ? 'bg-gradient-to-r from-gray-800  via-gray-700 to-gray-800' : themeIndex == 3 ? 'bg-white dark:bg-gradient-to-r dark:from-gray-800  dark:via-gray-700 dark:to-gray-800' : 'bg-white' "
                class=" w-full h-14 z-40
                transition-all duration-500 ease-in-out shadow flex flex-row justify-between px-5 items-center
                sticky top-0" id="webNavbar">

                <!-- small sidebar button -->
                <div id="smallSidebarButton" @click="smallSidebarButton=! smallSidebarButton, showDropdownOne = false "
                    class="hidden lg:inline-block overflow-hidden rounded-md cursor-pointer -translate-x-8 :bg-indigo-50 bg-white w-6 h-6 shadow-lg border text-red-500 border-red-500 hover:text-blue-500 hover:border-blue-500">
                    <div id="smallSidebarIcon"
                        :class="smallSidebarButton ? '-translate-x-[0.96rem]' : 'translate-x-[0.96rem]'"
                        class="h-full w-full flex justify-center items-center space-x-6 transition-all duration-300 ease-in-out">
                        <i class=" text-sm fa fa-angle-double-left"></i>
                        <i class=" text-sm fa fa-angle-double-right"></i>
                    </div>
                </div>
                <!-- end small sidebar button -->

                <!-- burger menu -->
                <div id="burgerButton" @click=" smallSidebarButton = false"
                    class="burger-menu lg:hidden h-6 w-8 flex flex-col justify-between cursor-pointer" title="menu">
                    <div :class="themeIndex == 2 ? 'bg-white' : themeIndex == 3 ? 'dark:bg-white' : 'bg-blue-800' "
                        class="burger-line w-full h-1 rounded-full"></div>
                    <div :class="themeIndex == 2 ? 'bg-white' : themeIndex == 3 ? 'dark:bg-white' : 'bg-blue-800' "
                        class="burger-line w-[70%] h-1 rounded-full"></div>
                    <div :class="themeIndex == 2 ? 'bg-white' : themeIndex == 3 ? 'dark:bg-white' : 'bg-blue-800' "
                        class="burger-line w-[40%] h-1 rounded-full"></div>
                </div>
                <!-- end burger menu -->

                <!-- search bar -->
                <form class="hidden md:block">

                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative lg:w-96 md:w-72 w-52">

                        <div class="absolute opacity-40 inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                        <input type="text" id="default-search"
                            class="block w-full pl-10 py-2 pr-2 text-xs cursor-pointer placeholder:font-normal bg-gray-100 rounded-full placeholder-gray-400/60 text-gray-700 font-medium border outline-none transition-all duration-300 ease-linear focus:border-gray-500"
                            placeholder="Search" autofocus autocomplete="false">

                    </div>

                </form>
                <!-- end search bar -->

                <!-- account -->
                <div :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'dark:text-white' : ''  "
                    class=" flex flex-row gap-3 translate-x-4 scale-75 sm:translate-x-0 sm:scale-100 justify-center items-center">

                    <span class="mx-2 scale-125 lg:scale-110 cursor-pointer" id="bellNotif">
                        <!-- bell no notif -->
                        <!-- <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path :class="themeIndex == 2 ? 'stroke-white' : themeIndex == 3 ? 'stroke-black dark:stroke-white' : 'stroke-black'" d="M18 8.4C18 6.70261 17.3679 5.07475 16.2426 3.87452C15.1174 2.67428 13.5913 2 12 2C10.4087 2 8.88258 2.67428 7.75736 3.87452C6.63214 5.07475 6 6.70261 6 8.4C6 15.8667 3 18 3 18H21C21 18 18 15.8667 18 8.4Z"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path :class="themeIndex == 2 ? 'stroke-white' : themeIndex == 3 ? 'stroke-black dark:stroke-white' : 'stroke-black'" d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> -->
                        <!-- end bell no notif -->
                        
                        <!-- bell notif -->
                        <span class="relative">
                            <span class="bg-yellow-400 rounded-full grid place-items-center font-medium w-4 h-4 absolute -top-2 -right-[.4rem] text-[6pt] text-black">67</span>
                            <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path :class="themeIndex == 2 ? 'stroke-white' : themeIndex == 3 ? 'stroke-black dark:stroke-white' : 'stroke-black'" d="M18.1336 11C18.7155 16.3755 21 18 21 18H3C3 18 6 15.8667 6 8.4C6 6.70261 6.63214 5.07475 7.75736 3.87452C8.88258 2.67428 10.4087 2 12 2C12.3373 2 12.6717 2.0303 13 2.08949" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path :class="themeIndex == 2 ? 'stroke-white' : themeIndex == 3 ? 'stroke-black dark:stroke-white' : 'stroke-black'" d="M19 8C20.6569 8 22 6.65685 22 5C22 3.34315 20.6569 2 19 2C17.3431 2 16 3.34315 16 5C16 6.65685 17.3431 8 19 8Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path :class="themeIndex == 2 ? 'stroke-white' : themeIndex == 3 ? 'stroke-black dark:stroke-white' : 'stroke-black'" d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <!-- end bell notif -->
                    </span>
                    <div class="flex flex-row justify-center items-center gap-2">
                        <div
                            class="avatar h-8 w-8 bg-slate-300 grid place-items-center border rounded-full overflow-hidden">
                            <img src="img/bannerPhoto.png" width="20px" alt="">
                        </div>
                        <span class="text-xs">Profile</span>
                        <i id="profileMenu" class="p-2 fa fa-sort-down -translate-y-[.15rem] cursor-pointer"></i>
                    </div>


                </div>
                <!-- end account -->

                                <!-- start notif popUp -->
                                <div id="notifPopup" class="hidden">

                                    <div class="bg-gray-800 overflow-hidden rounded-md h-fit flex flex-col border-t border-t-gray-700 w-48 items-center justify-center">
                                        <div class="w-full border-b border-b-gray-500 flex items-center justify-center py-1">
                                            <p class="text-white text-xs text-center">You have 64 notification</p>
                                        </div>
                
                                        <div class="scroller w-full flex flex-col text-xs overflow-y-auto leading-none h-36">
                
                                            <div class="w-full flex justify-between items-center px-2 py-2 border-b border-b-white/30">
                                                <div class="flex flex-col gap-1">
                                                    <p class="text-white font-medium truncate w-32">Header</p>
                                                    <p class="truncate font-medium text-[.52rem] text-white/60 w-28 italic">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore iusto porro ea adipisci iste perspiciatis nostrum cumque commodi perferendis quibusdam, doloremque, eaque odio illo accusantium eligendi saepe eius eveniet cum.</p>
                                                </div>
                                                <span class="p-[.30rem] rounded-full bg-green-500"></span>
                                            </div>
                                            
                                            <div class="w-full flex justify-between items-center px-2 py-2 border-b border-b-white/30">
                                                <div class="flex flex-col gap-1">
                                                    <p class="text-white font-bold truncate w-32">Header</p>
                                                    <p class="truncate font-medium text-[.52rem] text-white/60 w-28 italic">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore iusto porro ea adipisci iste perspiciatis nostrum cumque commodi perferendis quibusdam, doloremque, eaque odio illo accusantium eligendi saepe eius eveniet cum.</p>
                                                </div>
                                                <span class="p-[.30rem] rounded-full bg-yellow-400"></span>
                                            </div>
                                            
                                            <div class="w-full flex justify-between items-center px-2 py-2 border-b border-b-white/30">
                                                <div class="flex flex-col gap-1">
                                                    <p class="text-white font-bold truncate w-32">Header</p>
                                                    <p class="truncate font-medium text-[.52rem] text-white/60 w-28 italic">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore iusto porro ea adipisci iste perspiciatis nostrum cumque commodi perferendis quibusdam, doloremque, eaque odio illo accusantium eligendi saepe eius eveniet cum.</p>
                                                </div>
                                                <span class="p-[.30rem] rounded-full bg-red-600"></span>
                                            </div>
                
                                            <div class="w-full flex justify-between items-center px-2 py-2 border-b border-b-white/30">
                                                <div class="flex flex-col gap-1">
                                                    <p class="text-white font-bold truncate w-32">Header</p>
                                                    <p class="truncate font-medium text-[.52rem] text-white/60 w-28 italic">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore iusto porro ea adipisci iste perspiciatis nostrum cumque commodi perferendis quibusdam, doloremque, eaque odio illo accusantium eligendi saepe eius eveniet cum.</p>
                                                </div>
                                                <span class="p-[.30rem] rounded-full bg-yellow-400"></span>
                                            </div>
                
                                        </div>
                
                                    </div>
                                    
                                </div>
                                <!-- end notif popUp -->
                

            </nav>
            <!-- end navbar -->

            <!-- content -->
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
                                <img src="img/bannerPhoto.png" class="w-32" alt="">
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
                                <p class="text-[.60rem]">Late</p>
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
                                    <img class="w-11 bg-indigo-400 rounded-md" src="img/face1.jpg" alt="">
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
            <!-- end content -->
        </div>

    </div>

    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <script src="date.js"></script>
    <script>
        const menu = document.querySelector('#menu')
        const closeMenu = document.querySelector('#closeMenu')
        const burgerButton = document.querySelector('#burgerButton')
        const webNavbar = document.querySelector('#webNavbar')
        const webSection = document.querySelector('#webSection')

        const profileMenuSection = `
        <div :class="themeIndex == 2 ? 'bg-gray-800 text-white' : themeIndex == 3 ? 'text-black bg-white dark:text-white dark:bg-gray-800' : 'text-black bg-white' "
            x-data="{ themeSelect: 1 }" x-modelable="themeSelect" x-model="themeIndex" class="shadow-md fixed top-10 -right-14 md:top-5 md:-right-2 lg:top-5 lg:-right-3 px-2 py-2 rounded-md flex flex-col justify-center items-center gap-1" id="profileMenuSection">
                <a href="" 
                :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                class="px-4 py-1 w-full rounded transition-all duration-200 hover:bg-gray-200/40">Beranda</a>
                <span :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' " 
                class="w-full py-1 flex justify-center items-center transition-all duration-200 hover:bg-gray-200/40 rounded cursor-pointer"  @click="themeSelect >= 3 ? themeSelect = 1 : themeSelect++ ">
                <i :class="themeIndex == 2 ? 'fa-moon-o' : themeIndex == 3 ? 'fa-desktop' : 'fa-sun-o' " class="text-xl fa"></i>
                </span>
                <a href="" title="Yakin keluar?"
                :class="themeIndex == 2 ? 'text-white hover:text-red-600' : themeIndex == 3 ? 'text-black hover:text-red-700 hover:dark:text-red-600 dark:text-white' : 'text-black hover:text-red-700' "
                class="flex justify-center items-center font-medium gap-1 py-1 w-full text-xs rounded transition-all duration-200 hover:bg-gray-200/40">Logout <i class="fa text-xs fa-sign-out"></i></a>
        </div>
        `;

        tippy('#profileMenu', {
            content: profileMenuSection,
            placement: 'bottom',
            interactive: true,
            allowHTML: true,
            arrow: false,
            trigger: 'click',
            theme: 'light',
            hideOnClick: true
        });

        const notifPopup = document.querySelector('#notifPopup')
        tippy('#bellNotif', {
            content: notifPopup.innerHTML,
            placement: 'bottom',
            interactive: true,
            allowHTML: true,
            arrow: false,
            trigger: 'click',
            theme: 'light',
            hideOnClick: true,
            popperOptions: {
            modifiers: {
            computeStyle: {
                gpuAcceleration: false
            }}
        }

        });

        burgerButton.addEventListener('click', () => {
            menu.classList.remove('-translate-x-full')
            webNavbar.classList.add('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
            webSection.classList.add('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
        })

        closeMenu.addEventListener('click', () => {
            menu.classList.add('-translate-x-full')
            webNavbar.classList.remove('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
            webSection.classList.remove('blur-[1px]', 'pointer-events-none', 'brightness-75', 'select-none')
        })

        var xValues = ["Completed", "On Hold", "Rejected", "In Progres"];
        var yValues = [60, 5, 15, 15];
        var barColors = [
            "#6366f1",
            "#fde758",
            "#ff1f1f",
            "#3ee06e",
        ];

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                responsive: false
            }

        });

        setTimeout(() => {
            const totalEmployee = new countUp.CountUp('totalEmployee', 350, { enableScrollSpy: true });
            const present = new countUp.CountUp('present', 390, { enableScrollSpy: true });
            const late = new countUp.CountUp('late', 350, { enableScrollSpy: true });
            const annualLeave = new countUp.CountUp('annualLeave', 40, { enableScrollSpy: true });
            totalEmployee.start()
            present.start()
            late.start()
            annualLeave.start()
        }, 800);


    </script>

</body>

</html>