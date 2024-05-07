@extends('layouts.web')

@section('title', 'Stedigate.COM')

@section('content')


    <div class="grid lg:grid-cols-1 lg:gap-8">
        <!-- Pricing table component -->
        <div x-data="{ isAnnual: true }">

            <!-- Pricing toggle -->
            <div class="flex justify-center max-w-[14rem] m-auto mb-8 lg:mb-16">
                <div class="relative flex w-full p-1 bg-white dark:bg-slate-900 rounded-full">
            <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                <span class="absolute inset-0 w-1/2 bg-indigo-500 rounded-full shadow-sm shadow-indigo-950/10 transform transition-transform duration-150 ease-in-out" :class="isAnnual ? 'translate-x-0' : 'translate-x-full'"></span>
            </span>
                    <button class="relative flex-1 text-sm font-medium h-8 rounded-full focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150 ease-in-out" :class="isAnnual ? 'text-white' : 'text-slate-500 dark:text-slate-400'" @click="isAnnual = true" :aria-pressed="isAnnual">Yearly <span :class="isAnnual ? 'text-indigo-200' : 'text-slate-400 dark:text-slate-500'">-10%</span></button>
                    <button class="relative flex-1 text-sm font-medium h-8 rounded-full focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150 ease-in-out" :class="isAnnual ? 'text-slate-500 dark:text-slate-400' : 'text-white'" @click="isAnnual = false" :aria-pressed="isAnnual">Monthly</button>
                </div>
            </div>

            <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none">

                <!-- Pricing tab 1 -->
                <div class="h-full">
                    <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-900 shadow shadow-slate-950/5">
                        <div class="mb-5">
                            <div class="text-slate-900 dark:text-slate-200 font-semibold mb-1">Startups</div>
                            <div class="inline-flex items-baseline mb-2">
                                <span class="text-slate-900 dark:text-slate-200 font-bold text-3xl">$</span>
                                <span class="text-slate-900 dark:text-slate-200 font-bold text-4xl" x-text="isAnnual ? '0' : '0'">0</span>
                                <span class="text-slate-500 font-medium">/mo</span>
                            </div>
                            <div class="text-sm text-slate-500 mb-5">There are many variations available, but the majority have suffered.</div>
                            <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="#0">
                                Purchase Plan
                            </a>
                        </div>
                        <div class="text-slate-900 dark:text-slate-200 font-medium mb-3">Includes:</div>
                        <ul class="text-slate-600 dark:text-slate-400 text-sm space-y-3 grow">
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Up to 100 wallets</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Tron blockchain</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Transaction fee 1.5%</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Invoice payment</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Manual withdrawal</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pricing tab 2 -->
                <div class="dark h-full">
                    <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-900 shadow shadow-slate-950/5">
                        <div class="absolute top-0 right-0 mr-6 -mt-4">
                            <div class="inline-flex items-center text-xs font-semibold py-1.5 px-3 bg-emerald-500 text-white rounded-full shadow-sm shadow-slate-950/5">Most Popular</div>
                        </div>
                        <div class="mb-5">
                            <div class="text-slate-900 dark:text-slate-200 font-semibold mb-1">Small Businesses</div>
                            <div class="inline-flex items-baseline mb-2">
                                <span class="text-slate-900 dark:text-slate-200 font-bold text-3xl">$</span>
                                <span class="text-slate-900 dark:text-slate-200 font-bold text-4xl" x-text="isAnnual ? '49' : '55'">49</span>
                                <span class="text-slate-500 font-medium">/mo</span>
                            </div>
                            <div class="text-sm text-slate-500 mb-5">There are many variations available, but the majority have suffered.</div>
                            <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="#0">
                                Purchase Plan
                            </a>
                        </div>
                        <div class="text-slate-900 dark:text-slate-200 font-medium mb-3">Includes:</div>
                        <ul class="text-slate-600 dark:text-slate-400 text-sm space-y-3 grow">
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Up to 10,000 wallets</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Tron, Ethereum, Solana, Avalanche blockchains</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Transaction fee 1%</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Invoice/Api Payment</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Manual/Automatic withdrawal</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Email Support</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Pricing tab 3 -->
                <div class="h-full">
                    <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-900 shadow shadow-slate-950/5">
                        <div class="mb-5">
                            <div class="text-slate-900 dark:text-slate-200 font-semibold mb-1">Enterprise</div>
                            <div class="inline-flex items-baseline mb-2">
                                <span class="text-slate-900 dark:text-slate-200 font-bold text-3xl">$</span>
                                <span class="text-slate-900 dark:text-slate-200 font-bold text-4xl" x-text="isAnnual ? '99' : '110'">99</span>
                                <span class="text-slate-500 font-medium">/mo</span>
                            </div>
                            <div class="text-sm text-slate-500 mb-5">There are many variations available, but the majority have suffered.</div>
                            <a class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-indigo-500 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-indigo-950/10 hover:bg-indigo-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300 dark:focus-visible:ring-slate-600 transition-colors duration-150" href="#0">
                                Purchase Plan
                            </a>
                        </div>
                        <div class="text-slate-900 dark:text-slate-200 font-medium mb-3">Includes:</div>
                        <ul class="text-slate-600 dark:text-slate-400 text-sm space-y-3 grow">
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Up to 100,000 wallets</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Tron, Ethereum, Solana, Avalanche blockchains</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Transaction fee 0.75%</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Invoice/Api Payment</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Manual/Automatic withdrawal</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-emerald-500 mr-3 shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Email Support</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        <!-- End: Pricing table component -->
    </div>
@endsection
