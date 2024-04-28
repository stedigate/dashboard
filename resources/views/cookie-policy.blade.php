@extends('layouts.web')

@section('title', 'Stedigate.COM - Term of Use')

@section('content')
    <div class="grid gap-6 lg:gap-8">
        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#9340E4]/10 sm:size-16">
                <svg class="size-8 sm:size-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="2 2 20 20">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_cookies_24_filled</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_cookies_24_filled" fill="#bf9ae5" fill-rule="nonzero"> <path d="M12,2 C12.7139344,2 13.4186669,2.07493649 14.1058513,2.22228153 C14.6865234,2.34678839 14.8990219,3.06470877 14.4796691,3.48521478 C14.0147885,3.95137375 13.75,4.57867916 13.75,5.25 C13.75,6.42043414 14.5611837,7.42718287 15.6858365,7.68625206 C16.0559035,7.77149876 16.3038519,8.11989963 16.2631619,8.49747198 C16.2544079,8.57870262 16.25,8.66307444 16.25,8.75 C16.25,10.1307119 17.3692881,11.25 18.75,11.25 C19.4766017,11.25 20.151276,10.9392994 20.6235262,10.4053218 C21.0526462,9.92011177 21.8536336,10.1704416 21.9300905,10.8136579 C21.9765784,11.2047517 22,11.6008646 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M15,16 C14.4477153,16 14,16.4477153 14,17 C14,17.5522847 14.4477153,18 15,18 C15.5522847,18 16,17.5522847 16,17 C16,16.4477153 15.5522847,16 15,16 Z M8,15 C7.44771525,15 7,15.4477153 7,16 C7,16.5522847 7.44771525,17 8,17 C8.55228475,17 9,16.5522847 9,16 C9,15.4477153 8.55228475,15 8,15 Z M12,11 C11.4477153,11 11,11.4477153 11,12 C11,12.5522847 11.4477153,13 12,13 C12.5522847,13 13,12.5522847 13,12 C13,11.4477153 12.5522847,11 12,11 Z M7,8 C6.44771525,8 6,8.44771525 6,9 C6,9.55228475 6.44771525,10 7,10 C7.55228475,10 8,9.55228475 8,9 C8,8.44771525 7.55228475,8 7,8 Z" id="🎨-Color"> </path> </g> </g> </g>                </svg>
            </div>

            <div class="pt-3 sm:pt-5 text-gray-900 dark:text-gray-300">
                <h2 class="text-xl font-semibold text-black dark:text-white">Cookie Policy</h2>
                <p class="mt-4 text/relaxed">
                    Last updated: 2024-01-01
                </p>

                <h3 class="text-xl font-semibold text-black dark:text-white mt-4">1. Introduction</h3>
                <p class="mt-4 text/relaxed">
                    This Cookies Policy explains what Cookies are and how We use them. You should read this policy so You can understand what type of cookies We use, or the information We collect using Cookies and how that information is used.
                    <br>
                    Cookies do not typically contain any information that personally identifies a user, but personal information that we store about You may be linked to the information stored in and obtained from Cookies. For further information on how We use, store, and keep Your personal data secure, see our Privacy Policy.
                    <br>
                    We do not store sensitive personal information, such as mailing addresses, account passwords, etc. in the Cookies We use.
                    <br>
                    The words of which the initial letter is capitalised have meanings defined under the following conditions.
                    <br>
                    The following definitions shall have the same meaning regardless of whether they appear is singular or in plural.
                </p>

                <h3 class="text-xl font-semibold text-black dark:text-white mt-4">2. Definitions</h3>
                <p class="mt-4 text/relaxed">
                    For the purposes of this Cookies Policy:
                </p>
                <ul class="list-disc list-inside">
                    <li>Company (referred to as either “the Company”, “We”, “Us” or “Our” in this Cookies Policy) refers to Stedigate affiliate.</li>
                    <li>You means the individual accessing or using the Website, or a company, or any legal entity on behalf of which such individual is accessing or using the Website, as applicable.</li>
                    <li>Cookies mean small files that are placed on Your computer, mobile device, or any other device by a website, containing details of your browsing history on that website among its many uses.</li>
                    <li>Website refers to Stedigate, accessible from <a href="{{ url(filament()->getHomeUrl()) }}" class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">stedigate.com</a></li>
                </ul>

                <h3 class="text-xl font-semibold text-black dark:text-white mt-4">3. Types of Cookies We Use</h3>
                <p class="mt-4 text/relaxed">
                    Cookies can be “Persistent” or “Session” Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser.
                    We use both session and persistent Cookies for the purposes set out below:
                </p>
                <ul class="list-decimal list-inside">
                    <li>
                        Necessary / Essential Cookies
                        <ul class="list-disc list-inside">
                            <li>Type: Session Cookies</li>
                            <li>Administered by: Us</li>
                            <li>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</li>
                        </ul>
                    </li>
                    <li>
                        Functionality Cookies
                        <ul class="list-disc list-inside">
                            <li>Type: Persistent Cookies</li>
                            <li>Administered by: Us</li>
                            <li>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</li>
                        </ul>
                    </li>
                </ul>
                <p class="my-4 text/relaxed">
                    You can find more information about the individual cookies We use and the purposes for which We use them in the table below:
                </p>
                <div class="orelative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border dark:border-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3">Source</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Purpose</th>
                            <th scope="col" class="px-6 py-3">Expiration</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-x dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Stedigate</th>
                            <td class="px-6 py-4">__Secure_SULUSESSID</td>
                            <td class="px-6 py-4">This cookie is used to distinguish between visitors and how they use the Website, which We use in order to improve Our Website.</td>
                            <td class="px-6 py-4">This Cookie will expire when your browsing session is over</td>
                        </tr>
                        <tr class="border-x dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Google*</th>
                            <td class="px-6 py-4">__ga</td>
                            <td class="px-6 py-4">This Cookie is used to maintain an anonymised unique identifier for Your session. The session Cookie is not persisted on Your hard disk.</td>
                            <td class="px-6 py-4">2 years</td>
                        </tr>
                        <tr class="border-x dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Google</th>
                            <td class="px-6 py-4">_gid</td>
                            <td class="px-6 py-4">This cookie is used to distinguish between visitors and how they use the Website, which We use in order to improve Our Website.</td>
                            <td class="px-6 py-4">24 hours</td>
                        </tr>
                        <tr class="border-x dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Google</th>
                            <td class="px-6 py-4">_gat</td>
                            <td class="px-6 py-4">This cookie is used to distinguish between visitors and how they use the Website, which We use in order to improve Our Website.</td>
                            <td class="px-6 py-4">10 min</td>
                        </tr>
                        </tbody>
                        <tfoot class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border dark:border-gray-700">
                        <tr>
                            <td colspan="4" class="px-6">
                                <p class="text/relaxed">
                                    * This service may also collect information regarding the use of other sites, apps and online resources. more info on the <a href="https://policies.google.com/technologies/partner-sites" class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Google website</a>.
                                </p>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <h3 class="text-xl font-semibold text-black dark:text-white mt-4">4. Your Choice Regarding Cookies</h3>
                <p class="mt-4 text/relaxed">
                    If You prefer to avoid the use of Cookies on the Website, first You must disable the use of Cookies in your browser and then delete the Cookies saved in your browser associated with this website. You may use this option for preventing the use of Cookies at any time.
                    <br>
                    If You do not accept Our Cookies, You may experience some inconvenience in your use of the Website and some features may not function properly.
                    <br>
                    If You’d like to delete Cookies or instruct your web browser to delete or refuse Cookies, please visit the help pages of your web browser.
                </p>
                <ul class="list-disc list-inside">
                    <li>For the Chrome web browser, please visit this <a href="https://support.google.com/accounts/answer/32050" class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">page from Google</a>.</li>
                    <li>For the Internet Explorer web browser, please visit this <a href="http://support.microsoft.com/kb/278835" class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">page from Microsoft</a>.</li>
                    <li>For the Firefox web browser, please visit this <a href="https://support.mozilla.org/en-US/kb/delete-cookies-remove-info-websites-stored" class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">page from Mozilla</a>.</li>
                </ul>
                For any other web browser, please visit your web browser’s official web pages.
                <h3 class="text-xl font-semibold text-black dark:text-white mt-4">5. Contact us</h3>
                <p class="mt-4 text/relaxed">
                    If you have any questions about this Cookies Policy, You can contact us by email: info@stedigate.com
                </p>
            </div>
        </div>
    </div>
@endsection
