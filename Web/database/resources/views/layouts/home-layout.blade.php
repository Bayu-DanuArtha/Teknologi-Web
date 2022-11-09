<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 
 <title>{{ config('app.name', 'Laravel') }}</title>
 <!-- Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;6
00;700&display=swap">
 <!-- Scripts -->
 
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 <script src="{{ asset('js/app.js') }}" defer></script>
 {{-- karena terjadi maslah pada instalasi tailwind, shg masih menggunakan CDN --}}
 <script src="https://cdn.tailwindcss.com"></script>
 </head>
 <body class="font-sans antialiased">
 <header>
      <div class="relative overflow-hidden bg-white h-screen p-0">
        <div class="mx-auto max-w-7xl">
          <div
            class="relative bg-white pb-8 sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32"
          >
            <div class="flex items-end text-8xl">
              <div class="px-4 pt-6">
                <nav
                  class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                  aria-label="Global"
                >
                  <div
                    class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0"
                  >
                    <div
                      class="flex w-full items-center justify-between md:w-auto"
                    >
                      <div class="-mr-2 flex items-center md:hidden">
                        <button
                          type="button"
                          class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500"
                          aria-expanded="false"
                        >
                        </button>
                      </div>
                    </div>
                  </div>
                  <div
                    class="hidden md:ml-10 md:block md:space-x-8 md:pr-4 text-xl"
                  >
                    <a
                      href="#"
                      class="font-medium text-gray-500 hover:text-gray-900"
                      >Product</a
                    >

                    <a
                      href="#"
                      class="font-medium text-gray-500 hover:text-gray-900"
                      >Features</a
                    >

                    <a
                      href="#"
                      class="font-medium text-gray-500 hover:text-gray-900"
                      >Marketplace</a
                    >

                    <a
                      href="#"
                      class="font-medium text-gray-500 hover:text-gray-900"
                      >Company</a
                    >

                    <a
                      href="Login Page.html"
                      class="font-medium text-cyan-600 hover:text-cyan-500 bg-slate-300 p-2 border-black rounded-lg"
                      >Log in</a
                    >
                  </div>
                </nav>
              </div>

              <div
                class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden"
              >
                <div
                  class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5"
                >
                  <div class="flex items-center justify-end px-5 pt-4">
                    <div class="-mr-2">
                      <button
                        type="button"
                        class="inline-flex items-center justify-center rounded-md"
                      >
                        <span class="sr-only">Close main menu</span>

                        <svg
                          class="h-6 w-6"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          aria-hidden="true"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="space-y-1 px-2 pt-2 pb-3">
                    <a
                      href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                      >About</a
                    >

                    <a
                      href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                      >Service</a
                    >

                    <a
                      href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                      >Marketplace</a
                    >

                    <a
                      href="#"
                      class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900"
                      >Contact</a
                    >
                  </div>
                  <a
                    href="#"
                    class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-cyan-600 hover:bg-gray-100"
                    >Log in</a
                  >
                </div>
              </div>
            </div>

            <main
              class="mx-auto mt-24 max-w-7xl px-6 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
            >
              <div class="sm:text-center lg:text-left pt-16">
                <h1
                  class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl"
                >
                  <span class="block xl:inline">Data to enrich your</span>
                  <span class="block text-cyan-600 xl:inline"
                    >online business</span
                  >
                </h1>
                <p
                  class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0"
                >
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quae illo fugit numquam quod ipsum quis distinctio! Sapiente assumenda suscipit dolorem? Fuga, vel rerum cum excepturi ullam ex ipsa quaerat!
                </p>
                <div
                  class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start"
                >
                  <div class="rounded-md shadow">
                    <a
                      href="#"
                      class="flex w-full items-center justify-center rounded-md border border-transparent bg-cyan-600 px-8 py-3 text-base font-medium text-white hover:bg-cyan-700 md:py-4 md:px-10 md:text-lg"
                      >Get started</a
                    >
                  </div>
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                    <a
                      href="#"
                      class="flex w-full items-center justify-center rounded-md border border-transparent bg-cyan-100 px-8 py-3 text-base font-medium text-cyan-600 hover:bg-cyan-200 md:py-4 md:px-10 md:text-lg"
                      >Live demo</a
                    >
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w">
          <img
            class="h-96 object-cover sm:h-full md:h-full lg:h-full lg:w-full"
            src="../img/dashboard.png"
            alt=""
          />
        </div>
      </div>
    </header>
 </body>
</html>