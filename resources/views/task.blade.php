<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Miompolly</h1>
   {{URL::current()}}
   @for($i=0;$i<10;$i++)
   @if($i%2==0)
    @include('template',['name'=>$i])
    @endif
   @endfor
   

</body>
</html>