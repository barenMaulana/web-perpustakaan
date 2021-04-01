@extends('layouts.home')
@section('content')
<div class="bg-white pt-20 pb-96 px-5">
    <div class="w-full lg:w-4/5 bg-white rounded mx-auto rounded-xl" style="margin-top: -250px;">
        <div class="flex flex-wrap lg:flex-nowrap p-5">
            <div class="w-full lg:w-2/5 mb-10 lg:mb-0 pt-7 lg:pt-0">
                <div class="flex justify-center">
                    <div class="p-5 lg:p-14 rounded bg-gray-100">
                        <img src="{{asset('storage/'.$book->cover_file_name)}}" alt="cover" class="shadow-2xl">
                    </div>
                </div>
            </div>
            <div class="w-full px-2">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#2ecc71" viewBox="0 0 24 24" stroke="#2ecc71" width="25">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                    <p class="text-gray-800">
                        {{ucfirst($book->gmd)}}
                    </p>
                </div>
                <h1 class="text-2xl text-gray-900 font-bold">{{$book->title}}</h1>
                <hr class="my-5">
                <p class="text-gray-500 font-light text-sm">{{$book->description}}</p>
                <hr class="my-5">
                <div>
                    <h1 class="text-xl text-gray-800">Availability</h1>
                    <p class="text-gray-400 text-xl">
                        {{$book->amount < 1 ? "not available" : "available"}}
                    </p>
                </div>
                <div>
                    <h1 class="text-xl text-gray-700 text-light my-2">Detail information</h1>
                    <ul class="w-full lg:w-4/5 text-gray-800">
                        <li class="flex justify-between">
                            <span>ISBN</span>
                            <span>{{$book->isbn}}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Call Number</span>
                            <span>{{$book->call_number}}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Publisher</span>
                            <span>{{$book->publisher}}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Language</span>
                            <span>{{$book->language}}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Edition</span>
                            <span>{{$book->edition}}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Responsible Person</span>
                            <span>{{$book->responsible_person}}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Subject(s)</span>
                            <span>
                                @php
                                    $subjects = explode(',',$book->subject);
                                @endphp
                                @foreach ($subjects as $subject)
                                    <span class="bg-blue-500 px-3 py-1 rounded text-white text-xs">{{$subject}}</span>
                                @endforeach
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection