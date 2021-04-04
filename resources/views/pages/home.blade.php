@extends('layouts.home')
@section('content')
        <!-- search bar -->
        <div class="flex justify-center">
            <input type="text" placeholder="Cari buku"
                class="py-2 pl-10 pr-5 w-4/5 lg:w-1/2 border border-gray-200 rounded shadow-2xl h-16 lg:h-20 z-20 lg:text-xl text-lg outline-none font-bold text-gray-500"
                style="margin-bottom: -36px;">
        </div>
    
        <!-- fast search -->
        <section class="bg-white border-b py-12 px-4">
            <div class="container mx-auto flex flex-wrap items-center justify-between pb-12">
                <h2 class="w-full my-2 text-xl font-black leading-tight text-center text-gray-800 lg:mt-8">
                    Select the topic you are interested in
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
    
                <div class="flex flex-1 flex-wrap max-w-4xl mx-auto items-center justify-around mt-10">
                    <div
                        class="flex flex-col items-center justify-center h-24 lg:h-40 w-24 lg:w-40 border-gray-300 bg-gray-100 rounded hover:shadow-xl cursor-pointer my-2 p-4 mx-1">
                        <img src="img/literature.png" alt="literature" width="100">
                        <p class="text-gray-900 font-light text-xs">literature</p>
                    </div>
                    <div
                        class="flex items-center flex-col justify-center h-24 lg:h-40 w-24 lg:w-40 border-gray-300 bg-gray-100 rounded hover:shadow-xl cursor-pointer my-2 p-4 mx-1">
                        <img src="img/language.png" alt="literature" width="100">
                        <p class="text-gray-900 font-light text-xs">language</p>
                    </div>
                    <div
                        class="flex items-center flex-col justify-center h-24 lg:h-40 w-24 lg:w-40 border-gray-300 bg-gray-100 rounded hover:shadow-xl cursor-pointer my-2 p-4 mx-1">
                        <img src="img/computer.png" alt="literature" width="100">
                        <p class="text-gray-900 font-light text-xs">computer science</p>
                    </div>
                    <div
                        class="flex items-center flex-col justify-center h-24 lg:h-40 w-24 lg:w-40 border-gray-300 bg-gray-100 rounded hover:shadow-xl cursor-pointer my-2 p-4 mx-1">
                        <img src="img/art.png" alt="literature" width="100">
                        <p class="text-gray-900 font-light text-xs">art</p>
                    </div>
                    <div
                        class="flex items-center flex-col justify-center h-24 lg:h-40 w-24 lg:w-40 border-gray-300 bg-gray-100 rounded hover:shadow-xl cursor-pointer my-2 p-4 mx-1">
                        <img src="img/social-science.png" alt="literature" width="100">
                        <p class="text-gray-900 font-light text-xs">social</p>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- books -->
        <section class="bg-white border-b py-8">
            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                <h2 class="w-full my-2 text-xl font-black leading-tight text-center text-gray-800">
                    New collections + updated
                </h2>
                <p class="text-gray-500 font-light mb-10 text-center mx-auto w-9/12">These are new collections list. Hope
                    you like
                    them. Maybe
                    not all
                    of them
                    are
                    new.
                    But in term of time, we make sure that these are fresh from our processing oven</p>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
    
                <div class="flex flex-wrap justify-center lg:justify-between w-full p-6 bg-gray-100">
    
                    @forelse ($books as $book)
                        <div class="bg-white rounded overflow-hidden shadow w-40 px-3 mx-4 my-4 lg:my-0 hover:shadow-xl">
                            <a href="{{url('book-details/'.$book->id)}}">
                                <div class="pt-3">
                                    <img src="{{asset('storage/'.$book->cover_file_name)}}" alt="cover" class="mx-auto" width="150">
                                </div>
                                <p class="w-full text-gray-900 text-xs font-light md:text-xs h-10 my-2 overflow-auto">
                                    {{$book->title}}
                                </p>
                            </a>
                        </div>     
                    @empty
                        <h2 class="w-full my-2 text-xl font-black leading-tight text-center text-gray-500">
                            Oops..buku nya lagi kosong
                        </h2>
                    @endforelse
                   
                </div>
            </div>
        </section>
    
        <!-- call to action -->
        <section class="w-full mx-auto text-center shadow-inner bg-gray-100 h-10 pb-5">
     
        </section>
@endsection