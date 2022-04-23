<x-guest-layout>
    <!-- Main Hero Content -->
    <div
        class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://cdn.pixabay.com/photo/2016/11/18/14/39/beans-1834984_960_720.jpg')">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome To Foodies Restaurant</span>
        </h1>

        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
              <a href="{{ route('reservations.step.one') }}" type="button"
                 class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                Make your Reservation
              </a>
            </span>
        </div>
    </div>

    @if(count($offers) >= 1)
        <section class="mt-8 bg-white">
            <div class="mt-4 text-center">
                <h3 class="text-2xl font-bold">Offers</h3>
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    TODAY'S OFFERS</h2>
            </div>
            <div class="container w-full px-5 py-6 mx-auto">
                <div class="grid lg:grid-cols-4 gap-y-6">
                    @foreach($offers as $offer)
                        <div class="max-w-xs mx-6 mb-2 rounded-lg shadow-lg">
                            <img class="w-full h-48" src="{{ Storage::url($offer->image) }}"
                                 alt="Image" />
                            <div class="px-6 py-4">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $offer->name }}</h4>
                                <p class="leading-normal text-gray-700">{{ $offer->description }}.</p>
                            </div>
                            <div class="flex items-center justify-between p-4">
                                <span class="text-xl text-green-600">${{ $offer->price }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <!-- <h1
                        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
                      > -->
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Foodies is a Lebanese restaurant named after the famous book store, founded by Narjes Wehbe,
                            Bookies. Bookies was one of the smallest book stores in Lebanon. Now, Foodies is one of the
                            smallest restaurants, and hopefully it becomes bigger and bigger!.
                        </p>
                        <div class="relative flex">
                            <a href="{{ route('aboutUs.index') }}"
                               class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            WHY CHOOSE US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                            We are Mahdi Naseri, and Narjes Wehbe. Computer Science students at the Lebanese University.
                            We have worked on this project to create a good, and efficient restaurant CMS web-app.
                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Efficient Functionalities</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8"  stroke="currentColor" viewBox="0 0 475 500"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M156.8 411.8l31.22-31.22l-60.04-53.09l-52.29 52.28C61.63 393.8 60.07 416.1 72 432l48 64C127.9 506.5 139.9 512 152 512c8.345 0 16.78-2.609 23.97-8c17.69-13.25 21.25-38.33 8-56L156.8 411.8zM224 159.1c44.25 0 79.99-35.75 79.99-79.1S268.3 0 224 0S144 35.75 144 79.1S179.8 159.1 224 159.1zM408.7 145c-12.75-18.12-37.63-22.38-55.76-9.75l-40.63 28.5c-52.63 37-124.1 37-176.8 0l-40.63-28.5C76.84 122.6 51.97 127 39.22 145C26.59 163.1 30.97 188 48.97 200.8l40.63 28.5C101.7 237.7 114.7 244.3 128 250.2L128 288h192l.0002-37.71c13.25-5.867 26.22-12.48 38.34-21.04l40.63-28.5C417.1 188 421.4 163.1 408.7 145zM320 327.4l-60.04 53.09l31.22 31.22L264 448c-13.25 17.67-9.689 42.75 8 56C279.2 509.4 287.6 512 295.1 512c12.16 0 24.19-5.516 32.03-16l48-64c11.94-15.92 10.38-38.2-3.719-52.28L320 327.4z">
                                    </path>

                                </svg>
                                <span class="font-medium text-gray-500">User Friendly</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png" alt="feature image"></div>
            </div>
        </div>
    </section>
    @if(count($specials->menus) >= 1)
        <section class="mt-8 bg-white">
            <div class="mt-4 text-center">
                <h3 class="text-2xl font-bold">Our Menu</h3>
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    TODAY'S SPECIALITY</h2>
            </div>
            <div class="container w-full px-5 py-6 mx-auto">
                <div class="grid lg:grid-cols-4 gap-y-6">
                    @foreach($specials->menus as $menu)
                        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                            <img class="w-full h-48" src="{{ Storage::url($menu->image) }}"
                                 alt="Image" />
                            <div class="px-6 py-4">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">{{ $menu->name }}</h4>
                                <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                            </div>
                            <div class="flex items-center justify-between p-4">
                                <span class="text-xl text-green-600">${{ $menu->price }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="pt-4 pb-12 bg-gray-50">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Food Gallery</h2>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
        </div>
        <div class="container grid gap-4 mx-auto lg:grid-cols-3">
            <div class="w-full rounded">
                <img src="https://cdn.pixabay.com/photo/2013/07/12/19/20/sushi-154590__340.png" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="https://cdn.pixabay.com/photo/2015/08/20/19/18/market-897990__340.jpg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="https://cdn.pixabay.com/photo/2014/10/19/20/59/hamburger-494706__340.jpg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="https://cdn.pixabay.com/photo/2016/02/19/11/30/pizza-1209748_960_720.jpg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="https://cdn.pixabay.com/photo/2015/07/12/14/26/coffee-842020__340.jpg" alt="image">
            </div>
            <div class="w-full rounded">
                <img src="https://cdn.pixabay.com/photo/2016/11/23/18/31/pasta-1854245__340.jpg" alt="image">
            </div>
        </div>
    </section>

    @if(count($feedbacks) >= 1)
        <section class="pt-4 pb-12 bg-gray-800">
            <div class="my-16 text-center">
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    Feedbacks </h2>
                <p class="text-xl text-white">Check our clients' Feedbacks!</p>
            </div>
            <div class="grid gap-2 lg:grid-cols-3">
                @for ($i = 0; $i < 3; $i++)
                    <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                        <div class="flex justify-start mt-4">
                            <a href="#" class="text-xl font-medium text-green-500">{{ $feedbacks[$i]->firstName }} {{ $feedbacks[$i]->lastName }}</a>
                        </div>
                        <div>
                            <p class="mt-2 text-gray-600">{{ $feedbacks[$i]->feedback }}</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="relative flex m-2">
                <a href="{{route('show-all')}}"
                   class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </section>
    @endif

    <section class="pt-12 pb-12 bg-red-50">
        <form method="POST" enctype="multipart/form-data" action="{{route('feedbacks.store')}}">
            @csrf
            <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
                <div class="w-full">
                    <h1
                        class="mb-4 ml-1 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">Leave us your feedback!
                    </h1>
                    <div class="gap-2 mb-8 lg:flex">
                        <div class="w-full">
                            <label class="block text-base">
                                First Name
                            </label>
                            <input type="text"
                                   name="firstName"
                                   class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                                   placeholder="Your Name" />
                        </div>
                        <div class="w-full">
                            <label class="block text-base">
                                Last Name
                            </label>
                            <input type="text"
                                   name="lastName"
                                   class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                                   placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="gap-2 mb-8 lg:flex">
                        <div class="w-full">
                            <label class="block text-base">
                                Email
                            </label>
                            <input type="email"
                                   name="email"
                                   class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                                   placeholder="Email" />
                        </div>
                    </div>
                    <div class="">
                        <label class="block text-base">
                            Feedback
                        </label>
                        <textarea name="feedback" id="" rows="4" cols="30"
                                  class="w-full text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                                  placeholder="Feedback">

                        </textarea>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="rating" class="block text-base">Rating out of 5</label>
                        <div class="mt-1">
                            <select name="rating"
                                    class="block w-full mt-1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <button>
                        <input type="submit" value="Submit"
                               class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
                        >
                    </button>
                </div>
            </div>
        </form>
    </section>

</x-guest-layout>
