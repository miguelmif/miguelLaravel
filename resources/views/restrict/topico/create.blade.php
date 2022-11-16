@extends('restrict.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{url('topico')}}" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div>
        <label for="topico">Topico</label>
        <input type="text" name="topico" id="topico" value="{{ old('topico') }}" required />
    </div>
    <button type="submit" class="button">Salvar</button>
</form>
@endsection