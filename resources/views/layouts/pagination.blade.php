<div class="float-right">{{ __('Showing') }}
    <b>{{ ($items->currentpage() - 1) * $items->perpage() + 1 }}</b> -
    <b>{{ $items->currentpage() * $items->perpage() }}</b>
    {{ __('of') }} <b>{{ $items->total() }}</b> {{ __('items') }}.
</div>

<div class="d-flex justify-content-start mt-2">
    {{ $items->appends(request()->except('page'))->links() }}
</div>
