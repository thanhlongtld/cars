@extends('layouts.app')

@section('content')
    <div class="mb-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Car
            </h1>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST">
            @csrf
            <div class="block">
                <input name="name" placeholder="Name" type="text"
                       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                <input name="founded" placeholder="Founded" type="number"
                       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                <input name="description" placeholder="Description" type="text"
                       class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
