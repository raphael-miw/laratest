@extends("layout")

@section("titre",$titre)

@section("content")
{{--    {{dump($auteur)}}--}}
    <h2>auteur : {{$auteur -> nom}} {{$auteur->prenom}}</h2>
    ses articles :
    @foreach($auteur -> articles as $article)
        {{--{{dump($article)}}--}}
        <br>{{$article -> sujet}}
        <small><em>{{\Illuminate\Support\Str::limit($article -> contenu,166,'...')}}</em></small>
    @endforeach


    {!! Form::open(['url' => route('post',["id"=>12])]) !!}
    {!! Form::label('nom', 'Entrez votre nom : ') !!}
    {!! Form::text('nom') !!}
    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}



    {!! Form::model($auteur, array('route' => array('post', $auteur->id)))  !!}
    {!! Form::label('nom', 'Entrez votre nom : ') !!}
    {!! Form::text('nom') !!}
<br>
    {!! Form::label('prenom', 'Entrez votre nom : ') !!}
    {!! Form::text('prenom') !!}
    {!! Form::close() !!}


{{--    {!! Form::model($auteur, array('action' => array('HomeController@index', $auteur->id)))  !!}--}}
@endsection
