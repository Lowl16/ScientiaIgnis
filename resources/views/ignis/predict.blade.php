<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ignis | Predict</title>

    <link rel="icon" href="{{ asset('/images/logo.ico') }}">

    @vite('resources/css/app.css')
</head>
<body class="overflow-hidden">

    <div class="flex h-screen bg-gray-200">

        {{-- Side Bar --}}
        <div class="hidden md:flex flex-col w-64 bg-gray-800">
            <div class="flex items-center justify-center h-16 bg-neutral border-b-2 border-red-600">
                <a href="{{ route('home') }}" class="btn btn-ghost -ml-4 text-xl font-bold text-neutral-content">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    ScientiaIgnis
                </a>
            </div>
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex-1 px-4 py-4 bg-neutral">
                    <a href="{{ route('ignis-dashboard') }}" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white"
                            viewBox="0 -960 960 960" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{ route('ignis-predict') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 bg-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white"
                            viewBox="0 -960 960 960" stroke="currentColor">
                            <path 
                                d="M197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763l43 43q-47 47-73.5 108T140-480q0 71 26.5 132T240-240l-43 43Zm85-85q-38-38-60-89t-22-109q0-58 22-109t60-89l42 42q-30 30-47 70t-17 86q0 46 17 86t47 70l-42 42Zm158-18q0-23-15.5-45.5t-34.5-47q-19-24.5-34.5-51T340-500q0-58 41-99t99-41q58 0 99 41t41 99q0 30-15.5 56.5t-34.5 51q-19 24.5-34.5 47T520-300h-80Zm0 100v-60h80v60h-80Zm238-82-42-42q30-30 47-70t17-86q0-46-17-86t-47-70l42-42q38 38 60 89t22 109q0 58-22 109t-60 89Zm85 85-43-43q47-47 73.5-108T820-480q0-71-26.5-132T720-720l43-43q54 54 85.5 127T880-480q0 83-31.5 156T763-197Z"/>
                        </svg>
                        Predict
                    </a>
                    <a href="{{ route('ignis-component') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white"
                            viewBox="0 -960 960 960" stroke="currentColor">
                            <path 
                                d="M120-40v-168q-35-12-57.5-42.5T40-320v-400h80v-160q0-17 11.5-28.5T160-920q17 0 28.5 11.5T200-880v160h80v400q0 39-22.5 69.5T200-208v168h-80Zm320 0v-168q-35-12-57.5-42.5T360-320v-400h80v-160q0-17 11.5-28.5T480-920q17 0 28.5 11.5T520-880v160h80v400q0 39-22.5 69.5T520-208v168h-80Zm320 0v-168q-35-12-57.5-42.5T680-320v-400h80v-160q0-17 11.5-28.5T800-920q17 0 28.5 11.5T840-880v160h80v400q0 39-22.5 69.5T840-208v168h-80ZM120-640v160h80v-160h-80Zm320 0v160h80v-160h-80Zm320 0v160h80v-160h-80ZM160-280q17 0 28.5-11.5T200-320v-80h-80v80q0 17 11.5 28.5T160-280Zm320 0q17 0 28.5-11.5T520-320v-80h-80v80q0 17 11.5 28.5T480-280Zm320 0q17 0 28.5-11.5T840-320v-80h-80v80q0 17 11.5 28.5T800-280ZM160-440Zm320 0Zm320 0Z"/>
                        </svg>
                        Component
                    </a>
                    <a href="{{ route('ignis-process') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white"
                            viewBox="0 -960 960 960" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m430-30-56-57 73-73H313q-13 35-43.5 57.5T200-80q-50 0-85-35t-35-85q0-39 22.5-69.5T160-313v-334q-35-13-57.5-43.5T80-760q0-50 35-85t85-35q39 0 69.5 22.5T313-800h134l-73-73 56-57 170 170-170 170-56-57 73-73H313q-9 26-28 45t-45 28v334q26 9 45 28t28 45h134l-73-73 56-57 170 170L430-30Zm330-50q-50 0-85-35t-35-85q0-40 22.5-70.5T720-313v-334q-35-12-57.5-42.5T640-760q0-50 35-85t85-35q50 0 85 35t35 85q0 40-22.5 70.5T800-647v334q35 13 57.5 43.5T880-200q0 50-35 85t-85 35Zm-560-80q17 0 28.5-11.5T240-200q0-17-11.5-28.5T200-240q-17 0-28.5 11.5T160-200q0 17 11.5 28.5T200-160Zm560 0q17 0 28.5-11.5T800-200q0-17-11.5-28.5T760-240q-17 0-28.5 11.5T720-200q0 17 11.5 28.5T760-160ZM200-720q17 0 28.5-11.5T240-760q0-17-11.5-28.5T200-800q-17 0-28.5 11.5T160-760q0 17 11.5 28.5T200-720Zm560 0q17 0 28.5-11.5T800-760q0-17-11.5-28.5T760-800q-17 0-28.5 11.5T720-760q0 17 11.5 28.5T760-720ZM200-200Zm560 0ZM200-760Zm560 0Z" />
                        </svg>
                        Process
                    </a>
                    <a href="{{ route('ignis-code') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white"
                            viewBox="0 -960 960 960" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M320-240 80-480l240-240 57 57-184 184 183 183-56 56Zm320 0-57-57 184-184-183-183 56-56 240 240-240 240Z" />
                        </svg>
                        Code
                    </a>
                </nav>
            </div>
        </div>

        {{-- Content --}}
        <div class="flex flex-col flex-1 overflow-y-auto min-h-screen">
            <div class="flex items-center justify-between h-16 bg-white border-b-2 border-gray-200">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="flex items-center px-4 h-16 md:hidden">
                        <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </button>
                        <ul tabindex="0" class="menu menu-sm dropdown-content bg-white rounded-box z-[1] mt-64 w-52 p-2 shadow">
                            <li class="text-neutral font-semibold"><a href="{{ route('ignis-dashboard') }}">Dashboard</a></li>
                            <li class="text-neutral font-semibold"><a href="{{ route('ignis-predict') }}">Predict</a></li>
                            <li class="text-neutral font-semibold"><a href="{{ route('ignis-component') }}">Component</a></li>
                            <li class="text-neutral font-semibold"><a href="{{ route('ignis-process') }}">Process</a></li>
                            <li class="text-neutral font-semibold"><a href="{{ route('ignis-code') }}">Code</a></li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('home') }}" class="-ml-24 md:hidden btn btn-ghost text-xl text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    ScientiaIgnis
                </a>
                <div class="flex items-center pr-4 h-16">
                    <a href="https://pnj.ac.id/" target="_blank">
                        <img src="{{ asset('/images/pnj-ignis.svg') }}" alt="" class="h-10 w-10">
                    </a>
                </div>
            </div>
            <div class="p-4 mt-12 mx-auto">
                <h1 class="text-xl md:text-4xl text-neutral font-bold mb-14 pb-4 border-b-4 border-neutral max-w-fit text-center">Ignis' Prediction on Fire Detection</h1>
                <div class="transition-all duration-300 bg-gray-200 p-4 rounded-lg shadow-md border-l-4 border-neutral mb-20">
                    <form class="grid grid-cols-1 gap-5" id="prediction-form" autocomplete="off">
                        @csrf
                        <label class="form-control">
                            <input class="input input-bordered @error('Temperature_C') input-error @enderror" step="0.01" name="Temperature_C"
                                type="number" value="{{ request()->input('Temperature_C', old('Temperature_C')) }}"
                                placeholder="Temperature ( °C )" required>
                            @error('Temperature_C')
                                <span class="label label-text-alt text-red-600">{{ $message }}</span>
                            @enderror
                        </label>
                        <label class="form-control">
                            <input class="input input-bordered @error('Humidity') input-error @enderror" step="0.01" name="Humidity"
                                type="number" value="{{ request()->input('Humidity', old('Humidity')) }}"
                                placeholder="Humidity ( % )" required>
                            @error('Humidity')
                                <span class="label label-text-alt text-red-600">{{ $message }}</span>
                            @enderror
                        </label>
                        <label class="form-control">
                            <input class="input input-bordered @error('eCO2_ppm') input-error @enderror" name="eCO2_ppm"
                                type="number" value="{{ request()->input('eCO2_ppm', old('eCO2_ppm')) }}"
                                placeholder="Smoke / Gas ( ppm )" required>
                            @error('eCO2_ppm')
                                <span class="label label-text-alt text-red-600">{{ $message }}</span>
                            @enderror
                        </label>
                        <button class="btn btn-neutral text-gray-100" type="submit">Predict</button>
                    </form>
                    <div id="prediction-result" class="mt-5 p-5 bg-white rounded-lg shadow-md hidden">
                        <h1 class="text-md text-neutral flex justify-center">Prediction Result:</h1>
                        <h1 class="mt-2 font-bold text-xl md:text-3xl flex justify-center"></h1>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <footer class="footer bg-neutral text-neutral-content p-4 flex items-center justify-between flex-nowrap sticky top-[100vh]">
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
        </div>
    </div>

    <script>
        document.getElementById('prediction-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let predictButton = document.querySelector('button[type=submit]');
            predictButton.innerText = 'Loading...';
            predictButton.style.cursor = 'not-allowed';

            let formData = new FormData(this);

            fetch('/ignis/predict', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    Temperature_C: formData.get('Temperature_C'),
                    Humidity: formData.get('Humidity'),
                    eCO2_ppm: formData.get('eCO2_ppm')
                })
            })
            .then(response => response.json())
            .then(data => {
                const resultDiv = document.getElementById('prediction-result');
                const resultText = document.querySelector('#prediction-result h1:nth-child(2)');

                resultDiv.classList.remove('hidden');

                if (data.prediction === 0) {
                    resultText.innerText = 'Fire Not Detected';
                    resultText.classList.remove('text-red-600');
                    resultText.classList.add('text-green-600');
                } else if (data.prediction === 1) {
                    resultText.innerText = 'Fire Detected';
                    resultText.classList.remove('text-green-600');
                    resultText.classList.add('text-red-600');
                }

                predictButton.innerText = 'Predict';
                predictButton.style.cursor = 'pointer';
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>