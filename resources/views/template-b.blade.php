<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moonton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="{{ asset('assets/script/tailwind-config.js') }}"></script>

    <style type="text/tailwindcss">
        .flex::before,
        .flex::after {
            display: none !important;
        }

        @layer components{
            .side-link{
                @apply flex items-center font-normal text-black text-sm w-full mb-5 gap-3 transition-all;
            }

            .side-link svg{
                @apply text-[#B7B7B7];
            }
            .side-link.active{
                @apply font-semibold border-r-[3px] border-alerange;
            }

            .side-link.active svg{
                @apply text-alerange;
            }

            input.top-search{
                @apply rounded-full border border-gray-2 placeholder:text-gray-1 text-base text-gray-1 px-5 py-[11px]
                w-full max-w-[570px] focus:outline-none focus:ring-2 transition-all bg-no-repeat bg-center
                bg-[center_right_20px];
            }
        }
    </style>
</head>

<body class="font-poppins">
    <!-- Desktop Only -->
    <div class="mx-auto max-w-screen hidden lg:block">
        <!-- START: Sidebar -->
        <aside class="fixed z-50 w-[300px] h-full">

            <div class="flex flex-col p-[30px] pr-0 border-r border-gray-[#F1F1F1] overflow-y-auto h-full">
                <a href="#">
                    <img src="{{ asset('assets/images/moonton.svg') }}" alt="">
                </a>
                <div class="links flex flex-col mt-[60px] h-full gap-[50px]">

                    <!-- Menu -->
                    <div>
                        <div class="text-gray-1 text-sm mb-4">Menu</div>
                        <a href="{{ url('pemesanan') }}" class="side-link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.33037 2.0004H16.6694C20.0704 2.0004 21.9904 3.9294 22.0004 7.3304V16.6704C22.0004 20.0704 20.0704 22.0004 16.6694 22.0004H7.33037C3.92937 22.0004 2.00037 20.0704 2.00037 16.6704V7.3304C2.00037 3.9294 3.92937 2.0004 7.33037 2.0004ZM12.0494 17.8604C12.4804 17.8604 12.8394 17.5404 12.8794 17.1104V6.9204C12.9194 6.6104 12.7704 6.2994 12.5004 6.1304C12.2194 5.9604 11.8794 5.9604 11.6104 6.1304C11.3394 6.2994 11.1904 6.6104 11.2194 6.9204V17.1104C11.2704 17.5404 11.6294 17.8604 12.0494 17.8604ZM16.6504 17.8604C17.0704 17.8604 17.4294 17.5404 17.4804 17.1104V13.8304C17.5094 13.5094 17.3604 13.2104 17.0894 13.0404C16.8204 12.8704 16.4804 12.8704 16.2004 13.0404C15.9294 13.2104 15.7804 13.5094 15.8204 13.8304V17.1104C15.8604 17.5404 16.2194 17.8604 16.6504 17.8604ZM8.21937 17.1104C8.17937 17.5404 7.82037 17.8604 7.38937 17.8604C6.95937 17.8604 6.59937 17.5404 6.56037 17.1104V10.2004C6.53037 9.8894 6.67937 9.5804 6.95037 9.4104C7.21937 9.2404 7.56037 9.2404 7.83037 9.4104C8.09937 9.5804 8.25037 9.8894 8.21937 10.2004V17.1104Z"
                                    fill="#B7B7B7" />
                            </svg>
                            Data Pemesanan
                        </a>                        
                    </div>
                    <!-- ./Menu -->

                    <!-- Others -->
                    <div>
                        <a href="#!" class="side-link mb-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.89535 11.23C9.45785 11.23 9.11192 11.57 9.11192 12C9.11192 12.42 9.45785 12.77 9.89535 12.77H16V17.55C16 20 13.9753 22 11.4724 22H6.51744C4.02471 22 2 20.01 2 17.56V6.45C2 3.99 4.03488 2 6.52762 2H11.4927C13.9753 2 16 3.99 16 6.44V11.23H9.89535ZM19.6302 8.5402L22.5502 11.4502C22.7002 11.6002 22.7802 11.7902 22.7802 12.0002C22.7802 12.2002 22.7002 12.4002 22.5502 12.5402L19.6302 15.4502C19.4802 15.6002 19.2802 15.6802 19.0902 15.6802C18.8902 15.6802 18.6902 15.6002 18.5402 15.4502C18.2402 15.1502 18.2402 14.6602 18.5402 14.3602L20.1402 12.7702H16.0002V11.2302H20.1402L18.5402 9.6402C18.2402 9.3402 18.2402 8.8502 18.5402 8.5502C18.8402 8.2402 19.3302 8.2402 19.6302 8.5402Z" />
                            </svg>
                            Logout
                        </a>
                    </div>
                    <!-- ./Others -->
                </div>
            </div>
        </aside>
        <!-- END: Sidebar -->

        <!-- START: Content -->
        <div class="ml-[300px] px-[50px]">
            <div class="py-10 flex flex-col gap-[50px]">
                <!-- Topbar -->
                <div class="flex justify-between items-center">
                    <input type="text" class="top-search" placeholder="Search movie, cast, genre"
                        style="background-image: url('assets/icons/ic_search.svg');" />
                    <div class="flex items-center gap-4">
                        <span class="text-black text-sm font-medium">Welcome, Granola Sky</span>
                        <!-- user avatar -->
                        <div class="collapsible-dropdown flex flex-col gap-2 relative">
                            <a href="#!"
                                class="outline outline-2 outline-gray-2 p-[5px] rounded-full w-[60px] dropdown-button"
                                data-target="#dropdown-button">
                                <img src="{{ asset('assets/images/avatar.webp') }}" class="rounded-full object-cover w-full" alt="" />
                            </a>
                            <div class="bg-white rounded-2xl text-black font-medium flex flex-col gap-1 absolute z-[999] right-0 top-[80px] min-w-[180px] hidden overflow-hidden"
                                id="dropdown-target">
                                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Dashboard</a>
                                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Settings</a>
                                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Sign Out</a>
                            </div>
                        </div>
                    </div>
                </div>
 
                {{-- Konten --}}

                @yield('isi')

                {{-- End Konten --}}

            </div>
        </div>
        <!-- END: Content -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/script/script.js') }}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.__scroll-selector').removeClass('hidden').flickity({
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": false,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })
    </script>
</body>

</html>