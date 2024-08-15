<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScientiaIgnis | Home</title>

    <link rel="icon" href="{{ asset('/images/logo.ico') }}">

    @vite('resources/css/app.css')
</head>
<body>

    {{-- Navigation Bar --}}
    <div id="navbar" class="navbar bg-neutral fixed top-0 z-10 transition-all duration-1000">
        <div class="navbar-start text-neutral-content">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
            </div>
            <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-neutral rounded-box z-[1] mt-4 w-52 p-2 shadow">
            <li class="text-base font-semibold"><a href="{{ route('home') }}">Home</a></li>
            <li class="text-base font-semibold"><a href="{{ route('scientia-search') }}">Scientia (Unstructured)</a></li>
            <li class="text-base font-semibold"><a href="{{ route('ignis-dashboard') }}">Ignis (Structured)</a></li>
            </ul>
        </div>
        <div>
            <a href="{{ route('home') }}" class="btn btn-ghost text-xl">
                <img src="{{ asset('/images/logo.png') }}" alt="" class="hidden md:block md:h-9 md:pr-2">
                ScientiaIgnis
            </a>
        </div>
        </div>
        <div class="navbar-center hidden lg:flex text-neutral-content">
            <ul class="menu menu-horizontal px-1">
                <li class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-[45%] after:bottom-0 after:right-[50%]"><a href="{{ route('home') }}">Home</a></li>
                <li class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]"><a href="{{ route('scientia-search') }}">Scientia (Unstructured)</a></li>
                <li class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]"><a href="{{ route('ignis-dashboard') }}">Ignis (Structured)</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a href="https://pnj.ac.id/" target="_blank">
                <img src="{{ asset('/images/pnj.svg') }}" alt="" class="h-10 w-10 mr-2">
            </a>
        </div>
    </div>

    {{-- Content 1 --}}
    <div
        class="hero min-h-screen"
        style="background-image: url(https://learnobots.com/wp-content/uploads/2021/06/students-working-on-a-project-plan-KH7U83J.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl text-gray-100 font-bold">ScientiaIgnis</h1>
                <p class="mb-5 text-gray-100 mx-8 md:mx-0">
                    ScientiaIgnis is a project-based learning initiative that integrates structured and unstructured data, machine learning, NLP, and IoT technologies.
                </p>
                <button class="btn btn-neutral text-gray-100" onclick="scrollToContent()">Learn More</button>
            </div>
        </div>
    </div>
    
    {{-- Content 2 --}}
    <div id="content-2" class="bg-gray-200 min-h-96 py-16">
        <div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 max-w-5xl max-md:max-w-md mx-auto">
            <div class="max-md:order-1 max-md:text-center">
                <h1 class="text-neutral md:text-5xl text-2xl md:leading-10 font-bold">Scientia</h3>
                <p class="mt-6 text-neutral mx-10 md:mx-0">
                    Scientia is a project aimed at developing a system to help students find similar thesis and research journal titles using Cosine Similarity and TF-IDF techniques, aiming to streamline and expedite this process.                    
                </p>
                <ul class="mt-4 text-neutral list-disc list-inside">
                    <li class="flex space-x-3 mx-10 mt-8 md:mx-0 md:mt-0">
                        <svg class="flex-shrink-0 w-5 h-5 text-neutral" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-neutral">Improves academic document search efficiency</span>
                    </li>
                    <li class="flex space-x-3 mt-3 mx-10 md:mx-0">
                        <svg class="flex-shrink-0 w-5 h-5 text-neutral" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-neutral">Ensures accurate search results using Cosine Similarity</span>
                    </li>
                    <li class="flex space-x-3 mt-3 mx-10 md:mx-0">
                        <svg class="flex-shrink-0 w-5 h-5 text-neutral" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-neutral">Enhances accessibility to similar scholarly research documents</span>
                    </li>
                </ul>
                <a href="{{ route('scientia-search') }}">
                    <button class="btn btn-neutral text-gray-100 mt-10 md:mt-6">Get Started</button>
                </a>
            </div>
            <div class="h-48 -mt-6 md:h-[470px] md:mt-0 ">
                <img src="{{ asset('images/hero-scientia.svg') }}" class="w-full h-full md:object-contain md:ml-6" />
            </div>
        </div>
    </div>

    {{-- Content 3 --}}
    <div class="bg-neutral min-h-96 py-20">
        <div class="grid md:grid-cols-2 items-center md:gap-4 gap-8 max-w-5xl max-md:max-w-md mx-auto">
            <div class="h-48 ml-20 -mt-6 md:h-[470px] md:ml-0 md:mt-0 md:col-start-1 md:row-start-1">
                <img src="{{ asset('images/hero-ignis.png') }}" class="w-full h-full md:object-contain -ml-8" />
            </div>
            <div class="max-md:order-2 max-md:text-center md:ml-8">
                <h1 class="text-gray-200 md:text-5xl text-2xl md:leading-10 font-bold">Ignis</h1>
                <p class="mt-6 text-gray-200 mx-10 md:mx-0">
                    Ignis is a project focused on early fire detection and automatic firefighting using smoke, temperature, humidity, and flame sensors based on the ESP32 microcontroller and a random forest classifier model.                    
                </p>
                <ul class="mt-4 text-neutral list-disc list-inside">
                    <li class="flex space-x-3 mx-16 mt-8 md:mx-0 md:mt-0">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-200">Integration of IoT Technology</span>
                    </li>
                    <li class="flex space-x-3 mt-3 mx-16 md:mx-0">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-200">Automated Responsive System</span>
                    </li>
                    <li class="flex space-x-3 mt-3 mx-16 md:mx-0">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-medium leading-tight text-gray-200">High-Accuracy Fire Detection with Random Forest (97%)</span>
                    </li>
                </ul>
                <a href="{{ route('ignis-dashboard') }}">
                    <button class="btn bg-gray-200 text-neutral mt-10 md:mt-6">Get Started</button>
                </a>
            </div>
        </div>
    </div>
    
    {{-- Content 4 --}}
    <div class="bg-gray-200 min-h-96 pt-16 pb-20 md:pt-24 md:pb-32">
        <div class="max-w-5xl max-lg:max-w-4xl max-sm:max-w-sm mx-auto">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-neutral text-5xl font-extrabold">Our Team</h2>
                <p class="text-neutral text-base mt-4 leading-relaxed">The people that contributed to this project.</p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-x-6 gap-y-16 text-center mt-24 mx-10 md:mx-0">
                <div class="bg-neutral relative rounded">
                    <img src="{{ asset('images/ihsan.jpeg') }}" class="w-36 h-36 rounded-full inline-block -mt-12 border-8 border-neutral" />

                    <div class="py-4">
                        <h4 class="text-gray-200 text-base font-extrabold">Ihsan Alamal</h4>
                        <h4 class="text-gray-200 text-base font-extrabold">Ahmad</h4>
                        <p class="text-gray-200 text-sm mt-2">2107411001</p>

                        <div class="space-x-4 mt-5">
                            <a href="https://github.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://raw.githubusercontent.com/github/explore/main/topics/github/github.png" alt="GitHub" width="20px">
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/linkedin.svg" alt="LinkedIn" width="20px">
                            </a>
                            <a href="https://www.instagram.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/instagram.svg" alt="Instagram" width="20px">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-neutral relative rounded mt-10 md:mt-0">
                    <img src="{{ asset('images/sandhi.jpg') }}" class="w-36 h-36 rounded-full inline-block -mt-12 border-8 border-neutral" />

                    <div class="py-4">
                        <h4 class="text-gray-200 text-base font-extrabold">Sandhi Karunia</h4>
                        <h4 class="text-gray-200 text-base font-extrabold">Sugihartana</h4>
                        <p class="text-gray-200 text-sm mt-2">2107411007</p>

                        <div class="space-x-4 mt-5">
                            <a href="https://github.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://raw.githubusercontent.com/github/explore/main/topics/github/github.png" alt="GitHub" width="20px">
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/linkedin.svg" alt="LinkedIn" width="20px">
                            </a>
                            <a href="https://www.instagram.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/instagram.svg" alt="Instagram" width="20px">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-neutral relative rounded mt-10 md:mt-0">
                    <img src="{{ asset('images/hilmawan.jpeg') }}" class="w-36 h-36 rounded-full inline-block -mt-12 border-8 border-neutral" />

                    <div class="py-4">
                        <h4 class="text-gray-200 text-base font-extrabold">Hilmawan Fauzy</h4>
                        <h4 class="text-gray-200 text-base font-extrabold">Wibowo</h4>
                        <p class="text-gray-200 text-sm mt-2">2107411009</p>

                        <div class="space-x-4 mt-5">
                            <a href="https://github.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://raw.githubusercontent.com/github/explore/main/topics/github/github.png" alt="GitHub" width="20px">
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/linkedin.svg" alt="LinkedIn" width="20px">
                            </a>
                            <a href="https://www.instagram.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/instagram.svg" alt="Instagram" width="20px">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-neutral relative rounded mt-10 md:mt-0">
                    <img src="{{ asset('images/haikal.jpeg') }}" class="w-36 h-36 rounded-full inline-block -mt-12 border-8 border-neutral" />

                    <div class="py-4">
                        <h4 class="text-gray-200 text-base font-extrabold">Muhammad Haikal</h4>
                        <h4 class="text-gray-200 text-base font-extrabold">Al Rasyid</h4>
                        <p class="text-gray-200 text-sm mt-2">2107411025</p>

                        <div class="space-x-4 mt-5">
                            <a href="https://github.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://raw.githubusercontent.com/github/explore/main/topics/github/github.png" alt="GitHub" width="20px">
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/linkedin.svg" alt="LinkedIn" width="20px">
                            </a>
                            <a href="https://www.instagram.com/" target="_blank"
                                class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                                <img src="https://simpleicons.org/icons/instagram.svg" alt="Instagram" width="20px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Footer --}}
    <footer class="footer bg-neutral text-neutral-content p-4 flex items-center justify-between flex-nowrap">
        <aside class="flex items-center">
            <svg
                width="30"
                height="30"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
                class="fill-current">
                <path
                d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
            </svg>
            <p class="ml-2">Copyright © 2024 - All right reserved</p>
        </aside>
        <nav class="flex items-center gap-4">
            <a href="https://github.com/ScientiaIgnis">
                <svg 
                xmlns="http://www.w3.org/2000/svg" 
                width="40" height="40" viewBox="0 0 24 24" class="fill-current">
                    <path d="M12 2C6.477 2 2 6.477 2 12c0 4.419 2.865 8.17 6.839 9.49.5.09.682-.216.682-.48 0-.237-.01-.866-.015-1.698-2.782.603-3.37-1.34-3.37-1.34-.455-1.155-1.113-1.463-1.113-1.463-.912-.623.07-.61.07-.61 1.006.07 1.536 1.034 1.536 1.034.894 1.53 2.347 1.087 2.918.83.09-.646.35-1.087.636-1.337-2.23-.253-4.573-1.115-4.573-4.96 0-1.095.39-1.992 1.034-2.69-.103-.254-.448-1.275.098-2.656 0 0 .845-.27 2.76 1.03a9.593 9.593 0 0 1 2.49-.335c.845.004 1.698.114 2.49.335 1.915-1.3 2.758-1.03 2.758-1.03.548 1.381.202 2.402.1 2.656.644.698 1.033 1.595 1.033 2.69 0 3.855-2.347 4.703-4.582 4.953.36.31.678.923.678 1.858 0 1.34-.01 2.425-.01 2.755 0 .267.18.578.688.478C19.14 20.165 22 16.413 22 12c0-5.523-4.477-10-10-10z"/>
                </svg>
            </a>
        </nav>
    </footer>

    <script>
        function scrollToContent() {
            const target = document.getElementById('content-2');
            window.scrollTo({
                top: target.offsetTop - 64,
                behavior: 'smooth'
            });
        }

        let navbar = document.getElementById("navbar");

        let prevScrollpos = window.pageYOffset;

        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            
            if (prevScrollpos > currentScrollPos) {
                navbar.style.top = "0";
            } else {
                navbar.style.top = "-80px";
            }
            
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>
</html>