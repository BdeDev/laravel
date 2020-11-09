<x-app-layout>
    <x-slot name="header">
    	@if (\Session::has('success'))
        <div class="alert alert-success" style="color: green;">
        <ul>
        <li>{!! \Session::get('success') !!}</li>
        </ul>
        </div>
        @endif
        @if (\Session::has('error'))
        <div class="alert alert-danger" style="color: red;">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
        </div>
        @endif

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
