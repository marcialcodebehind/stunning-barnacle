<div class="form-group">
  <label class="control-label col-md-{{ @$title_span ? $title_span : '3' }}">{{ $title }}</label>
  <div class="col-md-{{ @$sel_span ? $sel_span : '9' }}">
    <select class="form-control select2me" data-placeholder="Select..."
      name="filter_{{ $name }}"
      @if(isset($multiple)) multiple @endif
    >
      @foreach($items as $key => $item)
        <option {{ $key == $selected ? 'selected' : '' }} 
            value="{{ $key }}"
        >
            {{ $item }}
        </option>
      @endforeach
    </select>
  </div>
</div>