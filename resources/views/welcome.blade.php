@php
    $imagePath = 'storage/images/thumbnail/thumb-23.jpg';
    $defaultImagePath = 'storage/images/thumbnail/no-image.png';
@endphp

@extends('layouts.main')

@section('content')
    <div id="home" class="min-h-screen flex flex-col items-center justify-center">
        <div class="w-8/12 flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="1000">
            <p class="md:text-6xl sm:text-3xl text-2xl text-center font-semibold dark:text-white ">Infusing Creativity and
                Magic into <span class="text-sky-600 dark:text-sky-400">App Development</span> & <span
                    class="text-sky-600 dark:text-sky-400">Web Development.</span></p>
            <p class="md:text-md text-center my-3 dark:text-white opacity-50">Crafting Dynamic Experiences with Flutter and
                Laravel Mastery</p>
            <a class="cursor-pointer" href="#"><img class="py-4 max-h-16 drop-shadow-lg hover:scale-125 duration-300"
                    src="{{ asset('/storage/images/bmc-button.png') }}" alt="logo"></a>
            <a href="/#endeavors"
                class="mt-5 rounded-md bg-sky-800 px-8 py-2 text-center text-sm font-semibold text-white shadow-sm hover:outline hover:scale-125 outline-offset-2 outline-blue-500 duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Endeavors<i
                    class="fa-solid fa-angle-down fa-bounce pl-2"></i></a>
        </div>
    </div>

    <div id="endeavors" class="min-h-auto max-w-screen pb-20 flex flex-col items-center justify-center">

        <p class="py-10 text-5xl font-semibold dark:text-white" data-aos="fade-up" data-aos-duration="1000">Endeavors</p>


        <div class="pb-5 w-10/12">
            <div class="container m-auto px-6 text-gray-600 dark:text-gray-300 md:px-12 xl:px-6">
                <div class="mb-20 px-6 md:px-0" data-aos="fade-up" data-aos-duration="1000">
                    <div class="space-y-4 p-8 rounded-3xl bg-gray-50 dark:bg-black/30 text-center">
                        <span>Tailus v2 is Coming soon !</span>
                        <p class="text-xl">This block is among a set of 50+ redesigned blocks that support dark mode.</p>
                        <a target="_blank"
                            href="https://5qotv9mbvdj.typeform.com/to/lOIROT5f?utm_source=waitlist&typeform-source=t.co"
                            class="inline-block text-lg text-blue-600 dark:text-blue-400">Notify me when released !</a>
                    </div>
                </div>
                <div class="md:columns-2 lg:columns-3 gap-8 space-y-8" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="aspect-video p-5 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <div class="thumbnail relative">
                                <img class="mx-auto"
                                    src="{{ file_exists(public_path($imagePath)) ? asset($imagePath) : asset($defaultImagePath) }}"
                                    alt="thumbnail-image">
                                <span
                                    class="absolute top-3 right-3 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><i
                                        class="fa-solid fa-eye fa-fade px-2"></i>free</span>
                            </div>
                        </div>
                        <div class="max-w-full py-5">
                            <p class="text-base font-semibold text-gray-600 dark:text-white">Pay once, own it forever</p>
                            <a href="#"
                                class="mt-5 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                Source Code <i class="fa-solid fa-file-code px-2"></i></a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-300">Invoices and receipts
                                available for easy company
                                reimbursement</p>
                        </div>
                    </div>
                    <div
                        class="aspect-video p-5 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <div class="thumbnail relative">
                                <img class="mx-auto" src="{{ asset('storage/images/thumbnail/thumb-3.png') }}"
                                    alt="thumbnail-image">
                                <span
                                    class="absolute top-3 right-3 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><i
                                        class="fa-solid fa-eye fa-fade px-2"></i>free</span>
                            </div>
                        </div>
                        <div class="max-w-full py-5">
                            <p class="text-base font-semibold text-gray-600 dark:text-white">Pay once, own it forever</p>
                            <a href="#"
                                class="mt-5 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                Source Code <i class="fa-solid fa-file-code px-2"></i></a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-300">Invoices and receipts
                                available for easy company
                                reimbursement</p>
                        </div>
                    </div>
                    <div
                        class="aspect-video p-5 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <div class="thumbnail relative">
                                <img class="mx-auto" src="{{ asset('storage/images/thumbnail/thumb-2.jpg') }}"
                                    alt="thumbnail-image">
                                <span
                                    class="absolute top-3 right-3 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><i
                                        class="fa-solid fa-eye fa-fade px-2"></i>free</span>
                            </div>
                        </div>
                        <div class="max-w-full py-5">
                            <p class="text-base font-semibold text-gray-600 dark:text-white">Pay once, own it forever</p>
                            <a href="#"
                                class="mt-5 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                Source Code <i class="fa-solid fa-file-code px-2"></i></a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-300">Invoices and receipts
                                available for easy company
                                reimbursement</p>
                        </div>
                    </div>
                    <div
                        class="aspect-video p-5 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <div class="thumbnail relative">
                                <img class="mx-auto" src="{{ asset('storage/images/thumbnail/thumb-1.png') }}"
                                    alt="thumbnail-image">
                                <span
                                    class="absolute top-3 right-3 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><i
                                        class="fa-solid fa-eye fa-fade px-2"></i>free</span>
                            </div>
                        </div>
                        <div class="max-w-full py-5">
                            <p class="text-base font-semibold text-gray-600 dark:text-white">Pay once, own it forever</p>
                            <a href="#"
                                class="mt-5 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                Source Code <i class="fa-solid fa-file-code px-2"></i></a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-300">Invoices and receipts
                                available for easy company
                                reimbursement</p>
                        </div>
                    </div>
                    <div
                        class="aspect-video p-5 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <div class="thumbnail relative">
                                <img class="mx-auto" src="{{ asset('storage/images/thumbnail/thumb-1.png') }}"
                                    alt="thumbnail-image">
                                <span
                                    class="absolute top-3 right-3 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><i
                                        class="fa-solid fa-eye fa-fade px-2"></i>free</span>
                            </div>
                        </div>
                        <div class="max-w-full py-5">
                            <p class="text-base font-semibold text-gray-600 dark:text-white">Pay once, own it forever</p>
                            <a href="#"
                                class="mt-5 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                Source Code <i class="fa-solid fa-file-code px-2"></i></a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-300">Invoices and receipts
                                available for easy company
                                reimbursement</p>
                        </div>
                    </div>
                    <div
                        class="aspect-video p-5 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">
                        <div class="flex gap-4">
                            <div class="thumbnail relative">
                                <img class="mx-auto" src="{{ asset('storage/images/thumbnail/thumb-2.jpg') }}"
                                    alt="thumbnail-image">
                                <span
                                    class="absolute top-3 right-3 inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"><i
                                        class="fa-solid fa-eye fa-fade px-2"></i>free</span>
                            </div>
                        </div>
                        <div class="max-w-full py-5">
                            <p class="text-base font-semibold text-gray-600 dark:text-white">Pay once, own it forever</p>
                            <a href="#"
                                class="mt-5 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                Source Code <i class="fa-solid fa-file-code px-2"></i></a>
                            <p class="mt-6 text-xs leading-5 text-gray-600 dark:text-gray-300">Invoices and receipts
                                available for easy company
                                reimbursement</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </body>

        </html>


    </div>
@endsection
