

@foreach ($calltoaction as $singlevalue)

<section class="section bg-dark py-5">
    <div class="container text-center">
        <h2 class="text-light mb-5 font-weight-normal">{{$singlevalue->title}}</h2>
        <button class="btn bg-primary w-lg" >{{$singlevalue->btn_text}}</button>
    </div>
</section>

    
@endforeach