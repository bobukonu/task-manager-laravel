@if (Auth::check())
<div class="card">
    <div class="card-header">
        Input Task
    </div>

    <div class="card-body">
        <form method="POST" action="{{ $type != 'edit' ? route('tasks.store') : route('tasks.update', ['id' => $item->id]) }}">
            @if ($type == 'edit')
            <input type="hidden" name="_method" value="PUT">
            @endif

            @csrf

            <div class="form-group row">
                <label class="col-sm-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ isset($item) ? $item->name : old('name') }}" required autofocus {{ $type == 'show' ? 'readonly' : '' }}>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-4 col-form-label text-md-right">Date</label>

                <div class="col-md-6">
                    <input id="datepicker" type="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ isset($item) ? $item->date : old('date') }}" required {{ $type == 'show' ? 'readonly' : '' }}>

                    @if ($errors->has('date'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            @if ($type != 'show')
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
            @endif
        </form>
    </div>
</div>
@endif
