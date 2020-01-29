{!! html()->hidden('thesis_id')->value($thesis_id) !!}
<!-- thesis Topic select Field Input -->
<div class="form-group">
    <label class="form-label" for="lecturer_id">Nama Pembimbing:</label>
    {{ html()->select('lecturer_id',$lecturers)->class(["form-control", "is-invalid" => $errors->has('lecturer_id')])->id('lecturer_id') }}
    @error('lecturer_id')
    <div class="invalid-feedback">{{ $errors->first('lecturer_id') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="position">Posisi:</label>
    {{ html()->select('position',config('central.thesis_supervisor'))->class(["form-control", "is-invalid" => $errors->has('position')])->id('position') }}
    @error('position')
    <div class="invalid-feedback">{{ $errors->first('position') }}</div>
    @enderror
</div>

