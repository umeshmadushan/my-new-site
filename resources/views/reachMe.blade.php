@extends('layouts.main')
@section('content')
    <div class="isolate bg-gray px-6 py-10 sm:pb-32 lg:px-8">
        <div class="flex flex-col items-center pb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="rounded-full bg-gray-300 overflow-hidden">
                <img class="max-h-20" src="{{ asset('/storage/images/personal-image/contact-memoji.png') }}" alt="profile-img">
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-white">Reach Me</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Want to discuss your project idea? Let me know.</p>
        </div>
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2" data-aos="fade-up" data-aos-duration="1000">
                <div class="sm:col-span-2">
                    <label for="email"
                        class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email"
                            placeholder="john@example.com"
                            class="block w-full dark:bg-gray-500 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="first-name"
                        class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Subject</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            placeholder="Let us know how we can help you"
                            class="block w-full dark:bg-gray-500 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                        class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" placeholder="Text your message"
                            class="block w-full dark:bg-gray-500 rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <button type="submit"
                    class="block w-full rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                    talk <i class="fa-solid fa-paper-plane pl-2"></i></button>
            </div>
        </form>
    </div>
@endsection
