@extends('navbar')

@section('contenido')
    <div class="fotos container justify-content-center">
        <div class="row justify-items-center">
            @if(!is_null($resultados))
            @foreach($resultados as $i)
                <div class="col-sm-6 col-lg-4 mt-3 mt-md-5"><img src="{{asset('/storage/imgs/'.$i->nombre.'.'.$i->extension) }}" alt="" class="img-fluid"></div>
            @endforeach
            @endif
        </div>
    </div>
@endsection