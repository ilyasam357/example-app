@extends('layouts.index')
@section('title', 'detail surah')

@section('content')
    <div class="mb-5">

        <div class="flex justify-center  ">

            <div class="">
                <h1 class="arabic text-center mt-10 text-[45px]">{{ $response->name_translations->ar }}</h1>
                <p class=" text-center mt-5 text-[45px]">{{ $response->name_translations->id }}</p>
            </div>

        </div>
        <div class="flex justify-end mx-[219px] ">
            <a href="#audiopupup" class="bg-green-600 px-3 py-2 rounded-lg text-white font-semibold">Play Audio</a>

        </div>
        <div id="audiopupup" class=" fixed  inset-auto z-[2]  ml-[1150px] bg-green-500 px-2 py-2 rounded-2xl">
            <a href="" class="flex justify-end text-2xl font-semibold">x</a>
            @foreach ($response->recitations as $audio)
                <p class="mb-2 mt-2">{{ $audio->name }}</p>
                <audio class="w-40" src="{{ $audio->audio_url }}" controls></audio>
            @endforeach
        </div>
        @foreach ($response->verses as $surah)
            <div class="flex justify-center">
                <div class="px-5  mt-7 mb-5 w-[900px] border">
                    <p class="arabic text-end leading-10 text-xl mt-3 tracking-normal font-medium"> {{ $surah->text }}</p>
                    <div class="flex mt-10 gap-2">
                        <span class="text-lg">{{ $surah->number }}.</span>
                        <p class="mb-7 text-lg">{{ $surah->translation_id }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
