@extends('layouts.index')
@section('title', 'Home')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3   pl-10 pr-10 py-8 justify-items-center">
        @foreach ($response as $item)
            <div class="gap-14 pb-10 ">
                <a href="quran/{{ $item->number_of_surah }}">
                    <div
                        class="bg-green-700 text-white w-[352px] h-[75px] rounded-md flex  items-center justify-between px-5 py-5">

                        {{-- nama surah id --}}
                        <div class="flex items-center gap-3">
                            <p class="text-black bg-white  px-3 py-1 rounded-xl text-xl">{{ $item->number_of_surah }}</p>
                            <div class="text-white">
                                <h1 class="text-xl font-bold">{{ $item->name }}</h1>
                                <p class="">{{ $item->name_translations->id }}</p>
                            </div>

                        </div>
                        {{-- nama surah ar --}}
                        <div class=" text-white">
                            <h1 class="arabic text-xl font-bold">{{ $item->name_translations->ar }}</h1>
                            <p class="leading-9">{{ $item->number_of_ayah }}</p>
                        </div>
                    </div>
                </a>



            </div>
        @endforeach
    </div>
@endsection
