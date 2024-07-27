@extends('layouts.without-header') @section('content')

<!-- header section start -->
<section
    style="background-image: url(images/36115\ 1.png)"
    class="w-full min-h-screen bg-no-repeat bg-cover bg-center relative"
>
    <div
        class="min-h-screen w-full absolute bg-black bg-opacity-50 hero-section"
    >
        <!-- header start -->
        <header
            class="flex items-center justify-between bg-gradient-to-b from-[#000] absolute w-full"
        >
            <!-- logo -->
            <img
                src="images/logo/Group 4.png"
                class="w-40 p-5 md:w-60"
                alt=""
            />
            <!-- nav bar -->
            <div class="text-white flex gap-5 px-4 items-center">
                <a href="cart.html">
                    <button
                        class="flex gap-1 hover:bg-blue-500 p-2 duration-100"
                    >
                        <svg
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6.15375 19.5578C5.66792 19.5578 5.25483 19.3875 4.9145 19.047C4.57417 18.7067 4.404 18.2936 4.404 17.8078C4.404 17.3218 4.57417 16.9086 4.9145 16.5683C5.25483 16.2279 5.66792 16.0577 6.15375 16.0577C6.63975 16.0577 7.05292 16.2279 7.39325 16.5683C7.73358 16.9086 7.90375 17.3218 7.90375 17.8078C7.90375 18.2936 7.73358 18.7067 7.39325 19.047C7.05292 19.3875 6.63975 19.5578 6.15375 19.5578ZM15.8463 19.5578C15.3603 19.5578 14.9471 19.3875 14.6068 19.047C14.2664 18.7067 14.0963 18.2936 14.0963 17.8078C14.0963 17.3218 14.2664 16.9086 14.6068 16.5683C14.9471 16.2279 15.3603 16.0577 15.8463 16.0577C16.3321 16.0577 16.7452 16.2279 17.0855 16.5683C17.4258 16.9086 17.596 17.3218 17.596 17.8078C17.596 18.2936 17.4258 18.7067 17.0855 19.047C16.7452 19.3875 16.3321 19.5578 15.8463 19.5578ZM5.01525 3.75L7.55 9.05775H14.3673C14.4249 9.05775 14.4763 9.04333 14.5213 9.0145C14.5661 8.98567 14.6045 8.94558 14.6365 8.89425L17.3193 4.01925C17.3578 3.94875 17.3609 3.88625 17.3288 3.83175C17.2968 3.77725 17.2423 3.75 17.1653 3.75H5.01525ZM4.29625 2.25H18.1808C18.5898 2.25 18.899 2.42408 19.1085 2.77225C19.3182 3.12025 19.3282 3.47567 19.1385 3.8385L15.9345 9.64225C15.7705 9.93075 15.5536 10.1554 15.2838 10.3162C15.0138 10.4773 14.7179 10.5577 14.3963 10.5577H7.1L5.94225 12.673C5.89092 12.75 5.88933 12.8333 5.9375 12.923C5.9855 13.0128 6.05758 13.0577 6.15375 13.0577H16.8463C17.0589 13.0577 17.2371 13.1295 17.3808 13.273C17.5243 13.4167 17.596 13.5949 17.596 13.8077C17.596 14.0206 17.5243 14.1987 17.3808 14.3422C17.2371 14.4859 17.0589 14.5577 16.8463 14.5577H6.15375C5.48708 14.5577 4.98617 14.2703 4.651 13.6953C4.31567 13.1203 4.30383 12.5462 4.6155 11.973L6.04225 9.40775L2.404 1.75H1.25C1.03717 1.75 0.859 1.67817 0.7155 1.5345C0.571833 1.391 0.5 1.21283 0.5 1C0.5 0.787167 0.571833 0.609 0.7155 0.4655C0.859 0.321833 1.03717 0.25 1.25 0.25H2.77875C2.94942 0.25 3.10842 0.295166 3.25575 0.3855C3.40325 0.476 3.51542 0.60325 3.59225 0.76725L4.29625 2.25Z"
                                fill="white"
                            />
                        </svg>
                        Cart
                    </button>
                </a>
                <a href="login.html"
                    ><button class="hover:bg-blue-500 p-2 duration-100">
                        Login
                    </button></a
                >
            </div>
        </header>
        <!-- header end -->
        <!-- header content start -->
        <div class="hero-content">
            <div class="mt-20 md:mt-30">
                <h1
                    class="text-white mb-4 font-bold mx-auto text-center text-2xl md:text-5xl"
                >
                    One App For All things <br />
                    For School Needs
                </h1>
                <p
                    class="text-white text-2xl font-medium size-11/12 mx-auto text-center"
                >
                    Omnitrance gives you worldwide access to thousands of
                    top-rated schools, College, <br />
                    Institutional needs items and equipment's
                </p>
            </div>
            <div class="flex justify-center mt-5 mx-5">
                <select
                    name=""
                    class="flex bg-transparent backdrop-blur-lg text-slate-300 py-2 px-2 gap-1 rounded-l-xl items-center border-r-2 border-slate-400"
                    id=""
                >
                    <!-- select,search -->
                    <option value="">Select Category</option>
                    <option value="adsfa">asdfa</option>
                </select>
                <div
                    class="flex rounded-r-lg backdrop-blur-lg py-2 px-2 gap-1 items-center"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        class="size-4 text-white"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <input
                        class="outline-none bg-transparent text-white w-[40vw] md:w-[60vw] lg:w-[40vw]"
                        type="text"
                        placeholder="Search for products, Brand and more..."
                    />
                </div>
            </div>
            <!-- options menus -->
            <div class="text-white py-4 flex flex-wrap justify-center px-6">
                <button class="new-box">Tables</button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Academic Supplies
                </button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Hardware/Software
                </button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Furniture
                </button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Office Supplies
                </button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Suporting Goods Supplies
                </button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Musical Instruments
                </button>
                <button
                    class="p-2 bg-[#FFFFFF] text-black border-2 border-slate-300/40 rounded-full hover:bg-slate-500 duration-300 m-1"
                >
                    Laboratory Equipment
                </button>
            </div>
        </div>
    </div>
</section>
<!-- header section end -->
<!-- component section strart -->
<section class="w-11/12 mx-auto">
    <h1 class="text-3xl font-semibold mt-10">Best Academic Choices</h1>

    <div class="md:grid sm:grid-cols-2 gap-2 lg:grid-cols-3 mt-10">
        <div class="md:w-full">
            <div class="w-full border-2 border-slate-400 p-2">
                <div class="flex justify-between my-2">
                    <div class="bg-[#BE1616] text-white px-2 pt-2">
                        Best Seller
                    </div>
                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <div>
                    AR jouiet Mansion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </div>
                <span class="text-[#3E67C9]">$4.45</span>
            </div>
        </div>
        <div class="md:w-full">
            <div class="w-full border-2 border-slate-400 p-2">
                <div class="flex justify-between my-2">
                    <div class="bg-[#BE1616] text-white px-2 pt-2">
                        Best Seller
                    </div>
                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <div>
                    AR jouiet Mansion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </div>
                <span class="text-[#3E67C9]">$4.45</span>
            </div>
        </div>
        <div class="md:w-full">
            <div class="w-full border-2 border-slate-400 p-2">
                <div class="flex justify-between my-2">
                    <div class="bg-[#BE1616] text-white px-2 pt-2">
                        Best Seller
                    </div>
                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <div>
                    AR jouiet Mansion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </div>
                <span class="text-[#3E67C9]">$4.45</span>
            </div>
        </div>
        <div class="md:w-full">
            <div class="w-full border-2 border-slate-400 p-2">
                <div class="flex justify-between my-2">
                    <div class="bg-[#BE1616] text-white px-2 pt-2">
                        Best Seller
                    </div>
                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <div>
                    AR jouiet Mansion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </div>
                <span class="text-[#3E67C9]">$4.45</span>
            </div>
        </div>
        <div class="md:w-full">
            <div class="w-full border-2 border-slate-400 p-2">
                <div class="flex justify-between my-2">
                    <div class="bg-[#BE1616] text-white px-2 pt-2">
                        Best Seller
                    </div>
                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <div>
                    AR jouiet Mansion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </div>
                <span class="text-[#3E67C9]">$4.45</span>
            </div>
        </div>
        <div class="md:w-full">
            <div class="w-full border-2 border-slate-400 p-2">
                <div class="flex justify-between my-2">
                    <div class="bg-[#BE1616] text-white px-2 pt-2">
                        Best Seller
                    </div>
                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>

                <div>
                    AR jouiet Mansion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </div>
                <span class="text-[#3E67C9]">$4.45</span>
            </div>
        </div>
    </div>
</section>
<!-- component section end -->
<!-- Shop By Category strat -->
<section class="w-11/12 mx-auto">
    <div class="text-center mt-10">
        <h1 class="text-3xl font-semibold">Shop By Category</h1>
    </div>
    <div class="mt-10 gap-2 md:grid sm:grid-cols-2 lg:grid-cols-4">
        <div
            class="bg-[#DCEFFA] p-5 mb-2 flex flex-col justify-between items-end md:w-full md:mb-0 cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2
                class="self-start text-2xl font-semibold text-2xl font-semibold"
            >
                Stationary
            </h2>
            <img
                src="images/18038-removebg-preview 1.png"
                alt=""
                class="w-40"
            />
        </div>
        <div
            class="bg-[#ECFAC3] p-5 flex flex-col justify-between items-end md:w-full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">Sports Supplies</h2>
            <img
                src="images/13791-removebg-preview 2.png"
                alt=""
                class="w-40"
            />
        </div>
        <div
            class="bg-[#F8ECC0] p-5 flex flex-col justify-between mb-2 items-end md:mb-0 md:w-full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">Office Supplies</h2>
            <img
                src="images/418189-removebg-preview 1.png"
                alt=""
                class="w-40"
            />
        </div>
        <div
            class="bg-[#E8E8E8] p-5 flex justify-between flex-col mb-2 items-end md:mb-0 md:w-full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">
                Musical Instrumentals
            </h2>
            <img src="images/809-removebg-preview 1.png" alt="" class="w-40" />
        </div>
        <div
            class="bg-[#D1F3E3] p-5 flex flex-col justify-between mb-2 items-end md:mb-0 md:w-full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">Furniture</h2>
            <img
                src="images/451540-removebg-preview 2.png"
                alt=""
                class="w-24"
            />
        </div>
        <div
            class="bg-[#D3E2F2] p-5 flex flex-col justify-between mb-2 items-end md:mb-0 md:w-full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">Art Supplies</h2>
            <img src="images/3993-removebg-preview 2.png" alt="" class="w-40" />
        </div>
        <div
            class="bg-[#F9E6D3] p-5 flex flex-col justify-between mb-2 items-end md:mb-0 md:w-full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">Laboratory Tools</h2>
            <img
                src="images/32194-removebg-preview 1.png"
                alt=""
                class="w-40"
            />
        </div>
        <div
            class="bg-[#F8E1EE] p-5 flex flex-col justify-between mb-2 items-end md:mb-0 md:full cursor-pointer cat-cont"
            onclick="goToSearchResult()"
        >
            <h2 class="self-start text-2xl font-semibold">House Keeping</h2>
            <img
                src="images/210980-removebg-preview 1.png"
                alt=""
                class="w-40"
            />
        </div>
    </div>
</section>
<!-- Shop By Category end -->
<!-- Featured Products start -->
<section class="w-11/12 mx-auto container">
    <div class="flex justify-between mt-10 items-center">
        <h1 class="mb-5 font-semi-bold text-3xl">Featured Products</h1>
        <div class="slider-controls flex justify-between">
            <div
                class="bg-slate-200 flex items-center p-2 rounded-full mx-2 cursor-pointer"
            >
                <svg
                    width="20"
                    height="20"
                    viewBox="0 0 10 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M2.09025 9.24245L9.623 16.7752C9.82167 16.9739 9.9185 17.2078 9.9135 17.4769C9.90833 17.7463 9.80642 17.9803 9.60775 18.1789C9.40892 18.3776 9.17492 18.4769 8.90575 18.4769C8.63658 18.4769 8.40259 18.3776 8.20375 18.1789L0.53275 10.5232C0.351917 10.3424 0.217917 10.1398 0.13075 9.91545C0.0435833 9.69111 0 9.46678 0 9.24245C0 9.01811 0.0435833 8.79378 0.13075 8.56945C0.217917 8.34511 0.351917 8.14253 0.53275 7.9617L8.20375 0.290446C8.40259 0.0917794 8.63917 -0.00497022 8.9135 0.000196444C9.18783 0.00536311 9.42433 0.107279 9.623 0.305946C9.82167 0.504613 9.921 0.738613 9.921 1.00795C9.921 1.27711 9.82167 1.51103 9.623 1.7097L2.09025 9.24245Z"
                        fill="#1C1B1F"
                    />
                </svg>
            </div>
            <div
                class="bg-slate-200 flex items-center p-2 rounded-full mx-2 cursor-pointer"
            >
                <svg
                    width="20"
                    height="20"
                    viewBox="0 0 10 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M7.83052 10L0.297771 2.46725C0.0991044 2.26858 0.00235399 2.03208 0.00752066 1.75775C0.0126873 1.48342 0.114604 1.24683 0.313271 1.048C0.511938 0.849333 0.748438 0.75 1.02277 0.75C1.2971 0.75 1.53369 0.849333 1.73252 1.048L9.38827 8.71925C9.56894 8.90008 9.70285 9.10267 9.79002 9.327C9.87735 9.55133 9.92102 9.77567 9.92102 10C9.92102 10.2243 9.87735 10.4487 9.79002 10.673C9.70285 10.8973 9.56894 11.0999 9.38827 11.2808L1.71702 18.952C1.51835 19.1507 1.28444 19.2474 1.01527 19.2423C0.745937 19.2371 0.511938 19.1352 0.313271 18.9365C0.114604 18.7378 0.0152706 18.5013 0.0152706 18.227C0.0152706 17.9527 0.114604 17.7161 0.313271 17.5173L7.83052 10Z"
                        fill="#1C1B1F"
                    />
                </svg>
            </div>
        </div>
    </div>
    <div class="md:flex gap-3">
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex justify-between items-center">
                <span class="bg-[#748639] text-white text-sm font-semibold px-2"
                    >New Arrival</span
                >

                <div
                    class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-xl font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div
                    class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-xl font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div
                    class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-xl font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div
                    class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-xl font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div
                    class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-xl font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
    </div>
</section>

<!-- Best Selling Unforms Choices start-->
<section class="w-11/12 mx-auto container mt-20">
    <h1 class="mb-5 font-semi-bold text-3xl">Best Selling Unforms Choices</h1>
    <div class="gap-2 md:flex">
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div class="bg-slate-200 p-2 rounded-full cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="#EE5A51"
                        viewBox="0 0 24 24"
                        stroke-width="0"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-lg font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div class="bg-slate-200 flex p-2 rounded-full cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-lg font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div class="bg-slate-200 flex p-2 rounded-full cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-lg font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
        <div class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0">
            <div class="flex items-center fav-cont">
                <div class="bg-slate-200 flex p-2 rounded-full cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                        />
                    </svg>
                </div>
            </div>
            <p class="mt-5 mb-2 text-lg font-medium">
                AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                1,Blue)
            </p>
            <div class="text-[#3E67C9] text-xl font-semibold mt-10">$4.454</div>
        </div>
    </div>
</section>
<!-- Best Selling Unforms Choices end-->
<!-- New arrivals start-->
<section class="w-11/12 mx-auto container">
    <h1 class="mt-10 mb-5 font-semi-bold text-3xl">New Arrivals</h1>
    <div class="#">
        <div class="md:flex gap-2">
            <div
                class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0"
            >
                <div class="flex justify-between items-center">
                    <span class="bg-[#748639] text-white px-2"
                        >New Arrival</span
                    >

                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>
                <p class="mt-5 mb-2 text-lg font-medium">
                    AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </p>
                <div class="text-[#3E67C9] text-xl font-semibold mt-10">
                    $4.454
                </div>
            </div>

            <div
                class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0"
            >
                <div class="flex justify-between items-center">
                    <span class="bg-[#748639] text-white px-2"
                        >New Arrival</span
                    >

                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>
                <p class="mt-5 mb-2 text-lg font-medium">
                    AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </p>
                <div class="text-[#3E67C9] text-xl font-semibold mt-10">
                    $4.454
                </div>
            </div>

            <div
                class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0"
            >
                <div class="flex justify-between items-center">
                    <span class="bg-[#748639] text-white px-2"
                        >New Arrival</span
                    >

                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>
                <p class="mt-5 mb-2 text-lg font-medium">
                    AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </p>
                <div class="text-[#3E67C9] text-xl font-semibold mt-10">
                    $4.454
                </div>
            </div>

            <div
                class="w-full border-2 border-gray-300 mb-2 p-5 md:w-1/4 md:mb-0"
            >
                <div class="flex justify-between items-center">
                    <span class="bg-[#748639] text-white px-2"
                        >New Arrival</span
                    >

                    <div
                        class="bg-slate-200 flex items-center p-2 rounded-full cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                            />
                        </svg>
                    </div>
                </div>
                <p class="mt-5 mb-2 text-lg font-medium">
                    AR jouiet Msnsion Astronaut 3D Art EVA Pencil Box (Set of
                    1,Blue)
                </p>
                <div class="text-[#3E67C9] text-xl font-semibold mt-10">
                    $4.454
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New arrivals end-->
<!-- Our Top Venders  slider-->
<section class="w-11/12 mx-auto slider-cont">
    <h1 class="text-3xl font-semi-bold text-center mt-10">Our Top Venders</h1>
    <div class=" ">
        <div class="swiper-container first-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/logo/image 11.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 44.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 45 (2).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 46.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 47.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 48.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 49.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 50.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 51.png" alt="" />
                </div>
                <!-- Add more slides as needed -->
            </div>
        </div>
        <!-- Second Slider -->
        <div class="swiper-container second-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/logo/Frame 51 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 43.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 44 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 45 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 46 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 47 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 48 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 49 (1).png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="images/logo/Frame 50 (1).png" alt="" />
                </div>
                <!-- Add more slides as needed -->
            </div>
        </div>
    </div>
</section>
<!-- Our Top Venders -->

@stop
