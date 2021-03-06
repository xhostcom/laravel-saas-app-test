<header x-data="{ mobileMenuOpen: false }" class="relative z-30 @if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">
    <div class="px-8 mx-auto xl:px-5 max-w-7xl">
        <div class="flex items-center justify-between h-24 border-b-2 border-gray-100 md:justify-start md:space-x-6">
            <div class="inline-flex">
            <!-- data-replace='{ "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }' -->
                <a href="{{ route('wave.home') }}" class="flex items-center justify-center space-x-3 transition-all duration-1000 ease-out transform text-wave-500">
                    @if(Voyager::image(theme('logo')))
                        <img class="h-9" src="{{ Voyager::image(theme('logo')) }}" alt="Company name">
                    @else
                        <svg class="w-auto h-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415 61" ><g fill="#bf1e5c" color="#bf1e5c" transform="translate(0 4) scale(0.6363637)"><svg width="44.0" height="44.0" x="0.0" y="0.0" viewBox="0 0 44 44"><path fill="currentColor" fill-rule="evenodd" d="M21.973 29.756l14.787 8.535-9.168 5.28-5.605-3.224-5.563 3.225-9.182-5.281 14.73-8.535zm0-15.005L44 27.454v6.492l-3.52 2.07-18.506-10.675L3.525 36.016l-3.52-2.042v-6.52L21.973 14.75zM21.97 0l22.026 12.689v10.576L21.984 10.591 0 23.294V12.703L21.97 0z"></path></svg></g><path fill="#384684" fill-rule="nonzero" d="M3.22 22.25L3.22 4.63L0 4.63L0 2.24L9.47 2.24L9.47 4.63L6.26 4.63L6.26 22.25L3.22 22.25ZM12.88 22.25L10.22 6.12L13.04 6.12L14.20 14.86L14.48 18.13L14.58 18.13L14.93 14.86L16.48 6.12L18.97 6.12L20.57 14.86L21 18.13L21.09 18.13L21.29 14.86L22.31 6.12L25.08 6.12L22.46 22.25L19.73 22.25L18.06 13.28L17.68 10.80L17.59 10.80L17.25 13.28L15.73 22.25L12.88 22.25ZM28.59 3.81L28.59 3.81Q27.77 3.81 27.30 3.32Q26.82 2.82 26.82 1.88L26.82 1.88Q26.82 1.35 26.95 0.99Q27.07 0.63 27.30 0.42Q27.53 0.20 27.86 0.10Q28.18 0 28.61 0L28.61 0Q29.48 0 29.94 0.45Q30.40 0.89 30.40 1.88L30.40 1.88Q30.40 2.79 29.94 3.30Q29.47 3.81 28.59 3.81ZM27.06 22.25L27.06 6.12L30.02 6.12L30.02 22.25L27.06 22.25ZM33.16 22.25L33.16 0.94L36.13 0.94L36.13 22.25L33.16 22.25ZM39.27 22.25L39.27 0.94L42.23 0.94L42.23 22.25L39.27 22.25ZM47.12 22.25L44.24 2.24L47.14 2.24L48.49 14.33L48.64 17.16L48.94 17.16L49.22 13.98L51.38 2.24L53.80 2.24L55.86 13.98L56.10 17.16L56.40 17.16L56.54 14.33L57.77 2.24L60.69 2.24L57.89 22.25L54.81 22.25L53.16 12.63L52.64 8.45L52.41 8.45L51.90 12.63L50.17 22.25L47.12 22.25ZM64.89 22.43L64.89 22.43Q64.14 22.43 63.56 22.13Q62.98 21.83 62.58 21.32Q62.18 20.80 61.97 20.09Q61.77 19.38 61.77 18.55L61.77 18.55Q61.77 17.55 62.02 16.78Q62.26 16.01 62.74 15.39Q63.21 14.77 63.91 14.26Q64.62 13.75 65.54 13.29L65.54 13.29Q65.99 13.07 66.54 12.84Q67.10 12.61 67.54 12.45L67.54 12.45L67.54 10.31Q67.54 9.84 67.50 9.44Q67.46 9.04 67.33 8.74Q67.20 8.44 66.93 8.27Q66.66 8.10 66.19 8.10L66.19 8.10Q65.87 8.10 65.57 8.21Q65.27 8.33 65.04 8.61Q64.82 8.89 64.68 9.36Q64.55 9.83 64.55 10.52L64.55 10.52L64.55 11.23L62.29 11.23Q62.18 10.77 62.13 10.39Q62.07 10.01 62.07 9.63L62.07 9.63Q62.07 8.73 62.38 8.04Q62.70 7.35 63.25 6.88Q63.81 6.41 64.58 6.17Q65.36 5.93 66.28 5.93L66.28 5.93Q67.49 5.93 68.29 6.19Q69.08 6.46 69.56 6.98Q70.03 7.51 70.22 8.31Q70.42 9.11 70.42 10.17L70.42 10.17L70.42 22.25L68.21 22.25L68.00 20.87Q67.52 21.56 66.72 22.00Q65.92 22.43 64.89 22.43ZM66.20 20.14L66.20 20.14Q66.57 20.14 66.93 19.95Q67.29 19.76 67.54 19.48L67.54 19.48L67.54 14.43Q67.30 14.52 67.01 14.65Q66.71 14.78 66.38 14.99L66.38 14.99Q66.06 15.19 65.75 15.47Q65.45 15.75 65.21 16.14Q64.97 16.52 64.82 17.01Q64.68 17.50 64.68 18.09L64.68 18.09Q64.68 19.02 65.04 19.58Q65.40 20.14 66.20 20.14ZM73.83 18.23L73.83 8.23L72.57 8.23L72.57 6.12L74.09 6.12L74.68 1.93L76.79 1.93L76.79 6.12L79.37 6.12L79.37 8.23L76.79 8.23L76.79 18.49Q76.79 19.02 76.89 19.34Q76.99 19.66 77.17 19.85Q77.34 20.03 77.58 20.09Q77.81 20.14 78.07 20.14L78.07 20.14Q78.50 20.14 78.84 20.04Q79.17 19.93 79.48 19.75L79.48 19.75L79.48 21.39Q79.22 21.70 78.92 21.90Q78.62 22.10 78.30 22.22Q77.99 22.35 77.66 22.39Q77.33 22.44 77.02 22.44L77.02 22.44Q76.39 22.44 75.82 22.28Q75.25 22.11 74.80 21.65Q74.36 21.19 74.09 20.37Q73.83 19.55 73.83 18.23L73.83 18.23ZM85.16 22.43L85.16 22.43Q83.12 22.43 82.05 20.75Q80.98 19.08 80.98 15.64L80.98 15.64L80.98 12.60Q80.98 11.06 81.20 9.97Q81.42 8.87 81.79 8.13Q82.16 7.38 82.63 6.95Q83.11 6.52 83.61 6.29Q84.12 6.06 84.61 5.99Q85.10 5.93 85.51 5.93L85.51 5.93Q86.33 5.93 87.01 6.15Q87.69 6.36 88.18 6.80Q88.68 7.24 88.95 7.91Q89.21 8.58 89.21 9.48L89.21 9.48Q89.21 10.04 89.16 10.45Q89.11 10.85 89.02 11.23L89.02 11.23L86.65 11.23L86.65 10.69Q86.65 9.47 86.36 8.78Q86.07 8.10 85.42 8.10L85.42 8.10Q85.05 8.10 84.79 8.27Q84.52 8.44 84.33 8.85Q84.15 9.26 84.06 9.95Q83.98 10.64 83.98 11.68L83.98 11.68L83.98 16.27Q83.98 17.32 84.05 18.06Q84.12 18.80 84.29 19.26Q84.47 19.72 84.76 19.93Q85.05 20.14 85.49 20.14L85.49 20.14Q85.71 20.14 85.92 20.03Q86.13 19.92 86.29 19.66Q86.45 19.41 86.55 18.98Q86.65 18.55 86.65 17.92L86.65 17.92L86.65 17.41L89.20 17.41L89.20 18.04Q89.20 20.33 88.19 21.38Q87.18 22.43 85.16 22.43ZM91.61 22.25L91.61 0.94L94.57 0.94L94.57 4.73L94.42 7.50Q94.75 7.04 95.13 6.74Q95.51 6.45 95.91 6.26Q96.32 6.08 96.73 6.01Q97.15 5.93 97.56 5.93L97.56 5.93Q98.98 5.93 99.74 6.92Q100.51 7.91 100.51 9.89L100.51 9.89L100.51 22.25L97.55 22.25L97.55 10.00Q97.55 8.93 97.22 8.51Q96.89 8.10 96.26 8.10L96.26 8.10Q95.81 8.10 95.36 8.40Q94.91 8.70 94.57 9.22L94.57 9.22L94.57 22.25L91.61 22.25Z" transform="translate(36, 6.874)"></path></svg>
                    @endif
 
                </a>
            </div>
            <div class="flex justify-end flex-grow -my-2 -mr-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </button>
            </div>

            <!-- This is the homepage nav when a user is not logged in -->
            @if(auth()->guest())
                @include('theme::menus.guest')
            @else <!-- Otherwise we want to show the menu for the logged in user -->
                @include('theme::menus.authenticated')
            @endif

        </div>
    </div>

    @if(auth()->guest())
        @include('theme::menus.guest-mobile')
    @else
        @include('theme::menus.authenticated-mobile')
    @endif
</header>
