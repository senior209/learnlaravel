<script  anguage="javascript" type="text/javascript"  >
            function todelete($id)
            {
                window.location.href='http://localhost:8888/articles';
            }
    function toEdit(){
        window.location.href="{{url('articles',$articles->id)}}";
    }
</script>
<h1 style="text-align: center">{{$articles->title}}</h1>
<p style="text-align: center">{{$articles->content}}</p>

<button style="text-align: center" onclick="todelete('$articles->id')">返回</button>

