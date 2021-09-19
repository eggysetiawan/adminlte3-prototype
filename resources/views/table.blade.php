<x-layout>
    {{-- this var below is from the controller. --}}
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item active">{{ __($breadcrumb) }}</li>
    </x-slot>
    <x-slot name="title">{{ __($title) }} </x-slot>
    <x-slot name="page">{{ __($page) }}</x-slot>
    {{-- # --}}


    <div class="d-flex justify-content-center mb-3">
        <div class="col-md-12">
            <a href="{{ route('employees.create') }}"
                class="btn btn-warning btn-lg text-white float-right">{{ __('Add Employee') }}
            </a>
        </div>
    </div>

    <form action="{{ route('employees.index') }}" method="get" class="inline" autocomplete="off">
        <div class="d-flex">
            <div class="col-md-3">
                <input type="text" name="name" id="name" class="form-control form-control-lg"
                    placeholder="{{ __('Search by name') }}" value="{{ request('name') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="employee_number" id="employee_number" class="form-control form-control-lg"
                    placeholder="{{ __('Employee Number') }}" value="{{ request('employee_number') }}">
            </div>
            <div class="col-md-2">
                <select name="status" id="status" class="form-control form-control-lg">
                    <option value="">{{ __('Select Status') }}</option>
                    <option value="1" {{ request('status') == 1 ? 'selected' : null }}>{{ __('Active') }}</option>
                    <option value="2" {{ request('status') == 2 ? 'selected' : null }}>{{ __('Deactive') }}
                    </option>
                </select>
            </div>


            <div class="col-md-4">
                <button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Search') }}</button>
            </div>
        </div>

        @if (request('name') || request('employee_number') || request('status'))
            <div class="col-md-12 mt-2">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('employees.index') }}" class="text-info">
                        {{ __('Clear Search') }}
                    </a>
                </div>
            </div>
        @endif
    </form>

    <div class="d-flex justify-content-center mt-4">
        <div class="col-md-12">
            <table class="table table-hover w-100">
                <thead>
                    <x-tr-head>
                        <th>#</th>
                        <th>{{ __('Status') }}</th>
                        <th>{{ __('Action') }}</th>
                    </x-tr-head>
                </thead>
                <tbody>
                    @forelse ($employees as $i => $employee)
                        <tr>
                            <td>{{ $i + $employees->firstItem() }}</td>
                            <td>
                            <td>
                                @include('layouts.active-status',[
                                'is_active' => $employee->is_active,
                                ])
                            </td>
                            </td>
                            <td>
                                @include('layouts.action')
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8"></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            @include('layouts.pagination',['items' => $employees])
        </div>

    </div>


</x-layout>
