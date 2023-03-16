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

                    <div id="profileMenuSection" class="hidden">
                        <div :class="themeIndex == 2 ? 'bg-gray-800 text-white' : themeIndex == 3 ? 'text-black bg-white dark:text-white dark:bg-gray-800' : 'text-black bg-white' "
                        x-data="{ themeSelect: 1 }" x-modelable="themeSelect" x-model="themeIndex" class="shadow-md fixed top-10 -right-14 md:top-5 md:-right-2 lg:top-5 lg:-right-3 px-2 py-2 rounded-md flex flex-col justify-center items-center gap-1">
                            <a href="" 
                            :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' "
                            class="px-4 py-1 w-full rounded transition-all duration-200 hover:bg-gray-200/40">Beranda</a>
                            <span :class="themeIndex == 2 ? 'text-white' : themeIndex == 3 ? 'text-black dark:text-white' : 'text-black' " 
                            class="w-full py-1 flex justify-center items-center transition-all duration-200 hover:bg-gray-200/40 rounded cursor-pointer"  @click="themeSelect >= 3 ? themeSelect = 1 : themeSelect++ ">
                            <i :class="themeIndex == 2 ? 'fa-moon-o' : themeIndex == 3 ? 'fa-desktop' : 'fa-sun-o' " class="text-xl fa"></i>
                            </span>
                            <form method="POST" action="{{ route('logout') }}" class="flex justify-center items-center font-medium w-full text-xs rounded transition-all duration-200 cursor-pointer hover:bg-gray-200/40" :class="themeIndex == 2 ? 'text-white hover:text-red-600' : themeIndex == 3 ? 'text-black hover:text-red-700 hover:dark:text-red-600 dark:text-white' : 'text-black hover:text-red-700' "
                            >
                            @csrf

                                <a :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" title="Yakin keluar?"
                                class="flex gap-1 py-1 justify-center items-center font-medium text-xs rounded h-full w-full ">Logout <i class="ml-1 fa text-xs fa-sign-out"></i></a>
                            </form>
                    </div>
            
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