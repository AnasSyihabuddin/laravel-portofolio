use App\Http\Controllers\skillController;
@extends('dashboard.layout')

@section('konten')
    <div class="pb-3">
        <form action="{{ route('skill.update') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="judul" class="form-label">PROGRAMING LANGUAGES & TOOLS</label>
              <input type="text"
                class="form-control form-control-sm skill" name="_language" id="judul" aria-describedby="helpId" placeholder="Progaming Languages & Tools" value="{{get_meta_value('_language')}}">
            </div>
            <div class="mb-3">
              <label for="isi" class="form-label">WORKFLOW</label>
              <textarea class="form-control summernote" name="_workflow" rows="5" >{{get_meta_value('_workflow')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
@endsection

@push('child-script')
<script>
  $(document).ready(function() {
      $('.skill').tokenfield({
          autocomplete: {
              source: [{!! $skill !!}],
              delay: 100
          },
          showAutocompleteOnFocus: true
      });
  });
</script>
@endpush