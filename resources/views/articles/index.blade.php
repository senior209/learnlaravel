
@extends('app')

<h1>articles</h1>

@foreach($articles as $article)

	
<h2><a href="{{url('articles',$article->id)}}">	{{$article->content}} </a></h2>




@endforeach
