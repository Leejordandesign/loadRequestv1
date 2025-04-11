@extends('layouts.base')

@section('pageTitle')
    Getting Started
@endsection


@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="pb-12">
            <div>
                <h2 class="text-2xl text-center  font-medium tracking-tight text-gray-900">Select Your Primary Wholesaler</h2>
            </div>
            <div class="max-w-7xl text-center pt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque hic incidunt laborum necessitatibus nobis quis rem similique vero? Earum esse iure laudantium perferendis perspiciatis quia quod sequi similique voluptatibus.</p>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 flex justify-center">
            <div class="mx-auto grid max-w-7xl grid-cols-3 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div class="bg-gray-400/5 p-6 sm:p-10 hover:shadow-xl active:shadow-amber-500 cursor-pointer col-span-3 lg:col-span-1">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{asset('images/04_cardinal_health.png')}}" alt="Transistor" width="158" height="48">
                    <h5 class="text-center pt-4">Cardinal Health</h5>
                </div>
                <div class="bg-gray-400/5 p-6 sm:p-10 hover:shadow-xl active:shadow-amber-500 cursor-pointer col-span-3 lg:col-span-1">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                    <h5 class="text-center pt-4">Mckesson</h5>
                </div>
                <div class="bg-gray-400/5 p-6 sm:p-10 hover:shadow-xl active:shadow-amber-500 cursor-pointer col-span-3 lg:col-span-1">
                    <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                    <h5 class="text-center pt-4">AmerisourceBergen</h5>
                </div>

{{--                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">--}}
{{--                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">--}}
{{--                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">--}}
{{--                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">--}}
            </div>
        </div>
    </div>

@endsection
