<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="https://unpkg.com/countup.js@2.3.2/dist/countUp.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/BosowaLogoB2.ico">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/gh/dubrox/Multiple-Dates-Picker-for-jQuery-UI@master/jquery-ui.multidatespicker.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="datepicker.css">
    <link rel="stylesheet" href="{{ asset('css/.css') }}">
    <title>Dashboard</title>
</head>

<body x-data="{
    smallSidebarButton: true,
    showEmployeeDropdown: false,
    showTimeAttendanceDropdown: false,
    showDropdownOne: false,
    themeIndex: $persist(1),
    themeBtn: false,
    leaveTypes: '',
    pjs: '',
    changeDate: false,
}">

    <div class="min-h-screen w-full lg:flex lg:flex-row sm:flex-col">

        <!-- sidebar -->
        @include('layouts.sidebar')
        <!-- end sidebar -->

        <div class="w-full  z-50">

            <!-- navbar -->
            @include('layouts.navigation')
            <!-- end navbar -->

            <!-- content -->
            {{ $slot }}
            <!-- end content -->
        </div>

    </div>

    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    <script src="date.js"></script>
    @stack('scripts')


</body>

</html>