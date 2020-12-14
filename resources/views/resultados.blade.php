@extends('navbar2')

@section('contenido')
    @if(is_null($resultados))
            <h3>No hay fotos para mostrar...</h3>
        @endif
    <div class="fotos container justify-content-center">
        <div class="row justify-items-center">
            @if(!is_null($resultados))
                @foreach($resultados as $i)
                <div class="col-sm-6 col-lg-3 mt-3 mt-md-5"><a href="/verImg/{{$i->id}}"><img src="{{asset('/storage/imgs/'.$i->nombre.'.'.$i->extension) }}" alt="" class="img-fluid"></a></div>
                @endforeach
            @endif
            
        </div>
        
    </div>
@endsection