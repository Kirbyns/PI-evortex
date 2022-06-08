@extends('layouts.app')

@section('content')
<form action="{{route('tag.store')}}" method="POST"  class="pb-5 pt-5">
    @csrf

    <div  class=" container pb-5 mt-5 form-row bg-light shadow p-3 mb-5 bg-light rounded-3 col-4">
        @csrf
        <div class="form-row col-md"> <!-- Nome da  TAG-->
            <label for="nomeTag">Tag</label>
            <input type="text" class="form-control" id="nomeTag" name="name">
            <div   class="d-flex flex-column">
                <button type="submit"  class="btn btn-warning mt-2">Enviar</button>
            </div>
    </div>
</form>


@endsection
