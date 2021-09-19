<x-layout>
    {{-- this var below is from controller. --}}
    <x-slot name="page">{{ $page }}</x-slot>
    <x-slot name="title">{{ $title }}</x-slot>
    {{-- # --}}

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('designations.index') }}">{{ __('Designation') }}</a></li>
        <li class="breadcrumb-item active">{{ __('Create') }}</li>
    </x-slot>


    {{-- content --}}
    <div class="row">
        This is content for the example page.
    </div>
</x-layout>
