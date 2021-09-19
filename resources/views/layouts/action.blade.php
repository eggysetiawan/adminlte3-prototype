<x-dropdown>
    <a href="{{ route('employees.show', $employee->employee_number) }}" class="dropdown-item"
        title="{{ __('View employee detail.') }}">
        <x-detail-icon />
        Detail
    </a>

    <a href="{{ route('employees.edit', $employee->employee_number) }}" class="dropdown-item"
        title="{{ __('Edit this employee') }}">
        <x-edit-icon />
        {{ __('Edit') }}
    </a>

    <button type="button" class="dropdown-item" data-toggle="modal"
        data-target="#exampleModal{{ $employee->employee_number }}" title="{{ __('Delete this employee.') }}">
        <x-delete-icon />
        {{ __('Delete') }}
    </button>

</x-dropdown>
<!-- Modal -->
<x-modal-delete>
    <x-slot name="modal_id">
        {{ $employee->employee_number }}
    </x-slot>
    <x-slot name="action">
        action="{{ route('employees.destroy', $employee->employee_number) }}"
    </x-slot>
</x-modal-delete>
