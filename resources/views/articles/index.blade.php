
@extends('app')
<script language="javascript" type="text/javascript">
    function toCreate()
    {
        window.location.href='http://localhost:8888/articles/create';
    }
</script>

<h1 style="text-align:center"  >XiePeng's blog</h1>
<div style="text-align:center">
   <button type="button" onclick="toCreate()">发布新博客</button>
</div>
@foreach($articles as $article)

	
<h1 style="text-align: center"><a  href="{{url('articles',$article->id)}}">	{{$article->title}} </a></h1>
    <h3 style="text-align: center" >{{$article->published_at}}</h3>




@endforeach
