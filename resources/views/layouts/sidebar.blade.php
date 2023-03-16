<aside id="menu" :class="smallSidebarButton ? 'lg:w-14' : 'lg:w-60' "
class="h-screen overflow-x-hidden lg:sticky transition-all duration-500 ease-in-out -translate-x-full fixed top-0 lg:-translate-x-0 w-[65%] bg-gradient-to-b from-blue-700 via-blue-600 to-red-400 overflow-y-scroll z-50 lg:z-50">

<div class="hris-logo w-full py-5 flex justify-center">

    <!-- example logo -->
    <div
        class="h-10 w-full ml-5 mr-7 lg:ml-0 lg:mr-0 py-2 italic font-bold flex lg:justify-center justify-between text-center text-white">

        <div class="flex justify-center items-center gap-2">
            <a href="/dashboard"><img src="img/BosowaLogo2.png" x-show="smallSidebarButton ? false : true " width="144"></a>
            <a href="/dashboard"><img src="img/BosowaLogoB.png" x-show="smallSidebarButton ? true : false " width="30"></a>
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

        <a href="/dashboard"
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

                <p href="" class="font-medium"><i class="fa fa-link pr-1"></i>Personal information</p>

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
                <a href="/cuti" class="font-medium"><i class="fa fa-link pr-1"></i>Cuti</a>

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