<x-app-layout>
    <div class="bg-white">

        <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
            <div class="border-b border-gray-200 pb-10 pt-10">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
                <p class="mt-4 text-base text-gray-500">Checkout out the latest release of Basic Tees, new and improved with four openings!</p>
            </div>

            <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                <aside>
                    <h2 class="sr-only">Filters</h2>

                    <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                    <button type="button" class="inline-flex items-center lg:hidden">
                        <span class="text-sm font-medium text-gray-700">Filters</span>
                        <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                    </button>

                    <div class="hidden lg:block">
                        <form class="space-y-10 divide-y divide-gray-200">
                            <div>
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Color</legend>
                                    <div class="space-y-3 pt-6">
                                        <div class="flex items-center">
                                            <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-0" class="ml-3 text-sm text-gray-600">White</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-4" class="ml-3 text-sm text-gray-600">Green</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </aside>

                <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                    <h2 id="product-heading" class="sr-only">Products</h2>

                        <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
                        @foreach($products as $product)
                            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                                <div class="aspect-h-4 aspect-w-3 sm:aspect-none group-hover:opacity-75 sm:h-96">
                                    <img src="{{ asset('img/' . $product->image_url) }}" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="h-full px-12 object-center object-contain sm:h-full sm:w-full">
                                </div>
                                <div class="flex flex-1 flex-col space-y-2 p-4">
                                    <h3 class="text-sm font-medium text-gray-900">
                                        <a href="{{ route('ecommerce.product', $product->id) }}">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $product->title }}
                                        </a>
                                    </h3>
                                    <div class="flex flex-1 flex-col justify-end">
                                        <p class="text-base font-medium text-gray-900">{{ $product->price / 100 }}€</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </main>

        <footer aria-labelledby="footer-heading" class="border-t border-gray-200 bg-white">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="py-20">
                    <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">
                        <!-- Image section -->
                        <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">
                            <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
                        </div>

                        <!-- Sitemap sections -->
                        <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">
                            <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900">Products</h3>
                                    <ul role="list" class="mt-6 space-y-6">
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-sm font-medium text-gray-900">Company</h3>
                                    <ul role="list" class="mt-6 space-y-6">
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Secure Payments</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Newsletter section -->
                        <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">
                            <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                            <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                            <form class="mt-2 flex sm:max-w-md">
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white px-4 py-2 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                                <div class="ml-4 flex-shrink-0">
                                    <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-100 py-10 text-center">
                    <p class="text-sm text-gray-500">&copy; 2021 Your Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

</x-app-layout>
