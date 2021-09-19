<label for="status">Status</label>
<div class="custom-control custom-radio">
    <span class="inline user-select-none">
        <input type="radio" name="is_active" class="custom-control-input" id="active" value="1"
            {{ $is_active == 1 || old('is_active') == 1 ? 'checked' : null }}>
        <label for="active" class="custom-control-label mr-5">{{ __('Active') }}</label>
    </span>

    <span class="inline user-select-none">
        <input type="radio" name="is_active" class="custom-control-input" id="deactive" value="2"
            {{ $is_active == 2 || old('is_active') == 2 ? 'checked' : null }}>
        <label for="deactive" class="custom-control-label">{{ __('Deactive') }}</label>
    </span>

</div>
@error('is_active')
    <span class="text-danger mt-2" role="alert"><strong>{{ $message }}</strong></span>
@enderror
