<h1>hello,{{$var1}}</h1>
@php

$x=1;
@endphp

@while($x<5)
<h1>{{$var1}}</h1>
@php
    $x++;
@endphp

@endwhile




