<header>
    <div class="flex bg-black justify-between items-center w-full p-5">
        <!-- Logo -->
        <img src="images/logo.svg" class="w-40" alt="Logo" />

        <!-- Search Bar -->
        <div
            class="flex items-center bg-white/20 p-2 h-12 rounded-lg shadow-md w-[70vw]"
        >
            <select
                class="select select-ghost w-40 max-w-xs bg-transparent text-white rounded-l-lg border-none outline-none"
            >
                <option disabled selected>Select Category</option>
                <option>Svelte</option>
                <option>Vue</option>
                <option>React</option>
            </select>
            <div
                class="flex items-center bg-transparent text-white py-2 px-3 rounded-r-lg flex-1"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-6 w-6 text-white"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                        clip-rule="evenodd"
                    />
                </svg>
                <input
                    type="text"
                    class="bg-transparent outline-none text-white pl-2 rounded-r-lg w-full"
                    placeholder="Search for products, Brand and more..."
                />
            </div>
        </div>

        <!-- Cart and Login Buttons -->
        <div class="flex items-center gap-4 text-white">
            <button class="btn btn-ghost px-8">
                <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M6.154 19.558c-.485 0-.898-.17-1.238-.51-.34-.34-.51-.753-.51-1.238s.17-.898.51-1.238c.34-.34.753-.51 1.238-.51s.898.17 1.238.51c.34.34.51.753.51 1.238s-.17.898-.51 1.238c-.34.34-.753.51-1.238.51zM15.846 19.558c-.485 0-.898-.17-1.238-.51-.34-.34-.51-.753-.51-1.238s.17-.898.51-1.238c.34-.34.753-.51 1.238-.51s.898.17 1.238.51c.34.34.51.753.51 1.238s-.17.898-.51 1.238c-.34.34-.753.51-1.238.51zM5.015 3.75h12.151L15.935 9.642l-2.682 4.875h-8.558L5.015 3.75zM4.296 2.25h13.885c.409 0 .718.174.928.522.21.348.22.704.03 1.067L15.934 9.642a1.496 1.496 0 0 1-1.358.915H7.1l-1.158 2.566c-.05.077-.052.161-.004.251.048.09.12.135.216.135H16.846a.75.75 0 0 1 0 1.5H6.154c-.667 0-1.168-.287-1.504-.862-.335-.575-.347-1.149.004-1.722l1.427-3.565L2.404 1.75H1.25c-.213 0-.391.072-.535.215-.144.144-.215.322-.215.535s.071.391.215.535c.144.143.322.215.535.215h1.528l.703 1.483z"
                        fill="white"
                    />
                </svg>
                Cart
            </button>
            <a href="/login">
                <button class="btn btn-primary px-8">Login</button>
            </a>
        </div>
    </div>
    <!-- Navigation Links -->
    <div class="bg-white mx-auto p-2 shadow-lg w-full">
        <ul class="flex flex-wrap gap-5 justify-center">
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Table</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Academic Supplies</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Hardware/Software</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Furniture</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Office Supplies</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Sporting Goods Supplies</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Musical Instruments</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="hover:font-semibold hover:text-primary px-2 py-1 block"
                    >Laboratory Equipment</a
                >
            </li>
        </ul>
    </div>
</header>
