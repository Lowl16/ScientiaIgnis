<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scientia | Code</title>
    
    <link rel="icon" href="{{ asset('/images/logo.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism-okaidia.min.css">

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
                    class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-0 hover:before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-0 hover:after:w-[45%] after:bottom-0 after:right-[50%]">
                    <a href="{{ route('scientia-process') }}">Process</a>
                </li>
                <li
                    class="text-base font-semibold transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-red-600 before:origin-center before:h-[2px] before:w-[45%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-red-600 after:origin-center after:h-[2px] after:w-[45%] after:bottom-0 after:right-[50%]">
                    <a>Code</a>
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
                <h2 class="font-heading text-neutral mb-14 text-2xl md:mb-28 md:text-3xl font-bold pb-4 border-b-4 border-neutral lg:text-4xl text-center mx-auto max-w-fit">Scientia's Code for Modeling
                </h2>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Import the library</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
from marshal import dumps, loads
from langdetect import detect
from langdetect.lang_detect_exception import LangDetectException
from mpstemmer import MPStemmer
from numpy import argsort, inf, set_printoptions
from polars import col, read_csv, Series
from re import sub
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from types import FunctionType</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Read the dataset from a CSV file</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
df = read_csv(file_path_dataset_clean)</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Initialize a TF-IDF vectorizer</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
vectorizer = TfidfVectorizer()</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Fit the TF-IDF model to the 'f' column of the dataset</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
tfidf_matrix = vectorizer.fit_transform(df["f"].to_list())</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Create find similar documents function</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
from types import FunctionType

def find_similar_documents(title: str, abstract: str, top_n: int):
    from mpstemmer import MPStemmer
    from numpy import argsort
    from polars import Series
    from re import sub
    from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory
    from sklearn.metrics.pairwise import cosine_similarity</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Combine title and abstract into one string and convert to lowercase</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
combined_text = (title + " " + abstract).lower()</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Remove all non-alphabetic characters and replace them with spaces</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
cleaned_text = sub(r"[^a-z]", " ", combined_text)</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Split the cleaned text into words and rejoin to remove extra spaces</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
trimmed_text = " ".join(cleaned_text.split())</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Apply stemming to the cleaned text</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
stemmed_text = MPStemmer().stem_kalimat(trimmed_text)</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Remove stop words from the stemmed text</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
processed_text = (
    StopWordRemoverFactory().create_stop_word_remover().remove(stemmed_text)
)</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Compute cosine similarity between the processed text and the TF-IDF matrix</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
cosine_scores = cosine_similarity(
    vectorizer.transform([processed_text]), tfidf_matrix
).flatten()</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Get the indices of the top N most similar documents</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
top_n_indices = argsort(cosine_scores)[-top_n:][::-1]</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-neutral">
                                    <path d="M12 5l0 14"></path>
                                    <path d="M18 13l-6 6"></path>
                                    <path d="M6 13l6 6"></path>
                                </svg></div>
                        </div>
                        <div class="h-full w-px bg-neutral"></div>
                    </div>
                    <div class="pt-1 pb-8">
                        <p class="mb-2 text-xl font-bold text-neutral">Return the top N most similar documents along with their similarity scores</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
return (
    df[top_n_indices]
    .with_columns(
        Series(name="similarity", values=cosine_scores[top_n_indices] * 100)
    )
    .drop("f")
)</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-4 flex flex-col items-center">
                        <div>
                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-neutral bg-neutral">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6 text-gray-200">
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <p class="mb-2 text-xl font-bold text-neutral">Inference</p>
                        <div class="w-max mt-4 bg-neutral rounded-lg overflow-hidden">
                            <div class="p-4 -pb-10">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-200 text-xl font-bold">Code Snippet</span>
                                    <button id="copyButton" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">Copy</button>
                                </div>
                            </div>
                            <div class="px-4 py-2 -mt-4 max-w-72 md:max-w-4xl">
                                <pre class="language-javascript"><code class="text-sm">
with open(file_path_model, "rb") as file:
model = file.read()

print(
    FunctionType(loads(model), globals())(
        title="APLIKASI VARIABLE SPEED DRIVE ATV610U75N4 PADA KONTROL MOTOR AC 3 FASA BERBASIS PLC",
        abstract="Penggunaan Variable Speed Drive (VSD) pada motor induksi tiga fasa dapat mengurangi konsumsi energi",
        top_n=1000,
    )
)</code>
                                </pre>
                            </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"></script>

    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            const codeElement = document.querySelector('.language-javascript code');
            const textArea = document.createElement('textarea');
            textArea.value = codeElement.textContent;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
        });
    </script>
</body>
</html>