<!DOCTYPE html>

<meta charset="UTF-8">
   <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belt Catalog</title>
</head>

<body>
     <div>
     @foreach($belts  as $belt)
      <div>
        <span>
        {{$belt->ProductTitle}}
        </span>
        <span>
            {{$belt->CasForm}}
      </span>
      </div>
      <div>
        <span>
            {{$belt->ModelNo}}
</span> |
<span>{{$belt->width}} MM
</span>
      </div>
      <div>
        Max Retail price  | INR {{$belt->MRP}}
     </div>
     <div>
        WholeSale price | INR {{$belt->WholeSale}}
</div>
    <div>
        <img src = "{{$belt->ImgUrl}}" />
</div>
<br />
<br/>
<div> 
     {{$belt->Description}}
</div>
      @endforeach
       
</div>

</body>
    




</html>