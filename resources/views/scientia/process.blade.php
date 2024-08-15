<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scientia | Process</title>

    <link rel="icon" href="{{ asset('/images/logo.ico') }}">

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    @vite('resources/css/app.css')
</head>
<body>

    {{-- Navigation Bar --}}
    <div id="navbar" class="navbar bg-neutral fixed top-0 z-10 transition-all duration-1000">
        <div class="navbar-start text-neutral-content">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-neutral rounded-box z-[1] mt-4 w-52 p-2 shadow">
                    <li class="text-base font-semibold"><a href="{{ route('scientia-search') }}">Search</a></li>
                    <li class="text-base font-semibold"><a href="{{ route('scientia-process') }}">Process</a></li>
                    <li class="text-base font-semibold"><a href="{{ route('scientia-code') }}">Code</a>
                </ul>
            </div>
            <a href="{{ route('home') }}" class="btn btn-ghost text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                ScientiaIgnis
            </a>
        </div>
        <div class="navbar-center hidden lg:flex text-neutral-content">
            <ul class="menu menu-horizontal px-1">
                <li
                    class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]">
                    <a href="{{ route('scientia-search') }}">Search</a>
                </li>
                <li
                    class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-[45%] after:bottom-0 after:right-[50%]">
                    <a href="{{ route('scientia-process') }}">Process</a>
                </li>
                <li
                    class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]">
                    <a href="{{ route('scientia-code') }}">Code</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <a href="https://pnj.ac.id/" target="_blank">
                <img src="{{ asset('/images/pnj.svg') }}" alt="" class="h-10 w-10 mr-2">
            </a>
        </div>
    </div>

    {{-- Content 1 --}}
    <div class="bg-gray-200 min-h-96 pt-24 pb-14 md:pt-40 md:pb-32">
        <div class="max-w-5xl max-lg:max-w-4xl max-sm:max-w-sm mx-auto">
            <div class="p-4 max-w-full bg-gray-200">
                <h2 class="font-heading text-neutral mb-14 md:mb-28 text-2xl md:text-3xl font-bold pb-4 border-b-4 border-neutral lg:text-4xl text-center mx-auto max-w-fit">Scientia's 6 Steps in CRISP-DM
                </h2>
                <div class="transition-all duration-300 bg-gray-200 mt-4 p-4 pb-0 rounded-lg shadow-md border-l-4 border-neutral">
                    <div class="w-full">
                        <ul class="flex flex-col">
                            <li class="bg-gray-100 shadow-lg rounded-md mb-4" x-data="accordion(1)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-4 cursor-pointer">
                                    <div class="flex flex-col max-w-[calc(100%-2rem)]">
                                        <span>1. Business Understanding</span>
                                    </div>
                                    <svg :class="handleRotate()" class="fill-current text-neutral h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-t-2 border-neutral overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="p-4">
                                        <h1>This project aims to develop a thesis and research journal search system capable of finding academic documents based on similarity levels using the Cosine Similarity method. This system is expected to help students, researchers, and lecturers at the State Polytechnic of Jakarta find relevant references more quickly and efficiently. Currently, searching for academic documents often takes a long time and requires considerable effort as one has to read abstracts and titles one by one. With this system, it is hoped that the process will become easier and more automated, thereby increasing productivity and the quality of research and study.</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gray-100 shadow-lg rounded-md mb-4" x-data="accordion(2)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-4 cursor-pointer">
                                    <div class="flex flex-col max-w-[calc(100%-2rem)]">
                                        <span>2. Data Understanding</span>
                                    </div>
                                    <svg :class="handleRotate()" class="fill-current text-neutral h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-t-2 border-neutral overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="p-4">
                                        <h1>The dataset was obtained through scraping the repository of the State Polytechnic of Jakarta. The collected data consists of several important attributes: URL (link to the document), title (document title), abstract (document summary), document type (type of document, such as thesis or journal), subject (subject or topic of the document), unit field (department or field of study), user ID (identification of the user who uploaded the document), date deposited (upload date), and last modified (last modified date). Of all these attributes, the ones used for analysis are the title and abstract, as these two attributes are considered the most relevant in determining document similarity.</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gray-100 shadow-lg rounded-md mb-4" x-data="accordion(3)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-4 cursor-pointer">
                                    <div class="flex flex-col max-w-[calc(100%-2rem)]">
                                        <span>3. Data Preparation</span>
                                    </div>
                                    <svg :class="handleRotate()" class="fill-current text-neutral h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-t-2 border-neutral overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="p-4">
                                        <h1>The data preparation stage involves several preprocessing steps essential to ensure data quality and consistency. The first step is converting all text to lowercase to maintain consistency in text comparison. Next, missing values are removed to ensure the completeness of the data used. Titles and abstracts are then combined into a single text field to facilitate analysis. Non-alphabetic characters are removed to clean the text of unnecessary symbols or punctuation. Duplicate documents are removed to ensure no duplicate entries can affect the analysis results. Only documents written in Indonesian are retained to maintain language uniformity in the dataset. Stemming is performed to reduce words to their base form, thus normalizing variations of the same word. Finally, stopwords or common words that do not contribute to the text's meaning are removed to enhance the accuracy of the analysis.</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gray-100 shadow-lg rounded-md mb-4" x-data="accordion(4)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-4 cursor-pointer">
                                    <div class="flex flex-col max-w-[calc(100%-2rem)]">
                                        <span>4. Modeling</span>
                                    </div>
                                    <svg :class="handleRotate()" class="fill-current text-neutral h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-t-2 border-neutral overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="p-4">
                                        <h1>In the modeling stage, TF-IDF (Term Frequency-Inverse Document Frequency) is used to convert text data into numerical vectors. TF-IDF is a technique that measures the importance of each word in a document relative to its frequency across the corpus. This helps give higher weights to more important words and distinguish each document. After text vectorization with TF-IDF, the Cosine Similarity method is used to measure the similarity between two vectors. Cosine Similarity measures the cosine of the angle between two vectors in a high-dimensional space, allowing for similarity measurement without being influenced by document length. This method is very effective in text comparison contexts because it can capture conceptual similarity even if different words are used.</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gray-100 shadow-lg rounded-md mb-4" x-data="accordion(5)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-4 cursor-pointer">
                                    <div class="flex flex-col max-w-[calc(100%-2rem)]">
                                        <span>5. Evaluation</span>
                                    </div>
                                    <svg :class="handleRotate()" class="fill-current text-neutral h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-t-2 border-neutral overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="p-4">
                                        <h1>The evaluation stage is carried out with a comprehensive search approach. Each document in the dataset is tested by conducting a search to see if the system can identify the document itself with a similarity score of 100% or slightly below. This evaluation is essential to ensure that the system works with high accuracy and can find documents that match the given input. The evaluation results show that this system achieves an average accuracy of 100%, meaning the system can accurately find documents based on the provided titles and abstracts.</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-gray-100 shadow-lg rounded-md mb-4" x-data="accordion(6)">
                                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-4 cursor-pointer">
                                    <div class="flex flex-col max-w-[calc(100%-2rem)]">
                                        <span>6. Deployment</span>
                                    </div>
                                    <svg :class="handleRotate()" class="fill-current text-neutral h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                                        <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
                                    </svg>
                                </h2>
                                
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-t-2 border-neutral overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="p-4">
                                        <h1>The deployment stage involves providing access to the system through FastAPI, a framework for building fast and lightweight web applications. Using FastAPI, this search system is developed into a web-based application that allows users to interact with the search function via an API. Deployment steps include developing the API to receive search input and return search results, integrating it with the built TF-IDF and Cosine Similarity model, comprehensive testing to ensure the API functions correctly and efficiently, and launching the API on a server accessible to target users. The implementation of FastAPI allows this system to be easily accessed by students, researchers, and lecturers anytime and anywhere, providing ease in searching for academic documents.</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>