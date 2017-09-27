<div class="container-fluid fondo-first">
    <div class="text-center col-md-12">
        <h1>
            LO NUEVO
        </h1>
    </div>
    @if(count($cards)>0)
        @foreach($cards as $card)
    <div class="row noPadding">
        <div class="col-md-12 noPadding box">
            <div class="col-md-4 first ">
                <div class="cours2 textbox" style="overflow:hidden;">
                    <h2 class="none">
                        {{ $card->title }}
                    </h2>
                    <hr>
                    <p class="">
                        {{ $card->paragraph }}                        
                    </p>
                </hr>
                <div class="cours3">
                    <h2 style="text-align:center;margin-top:-1px;color:rgb(237,78,110);">
                        {{ $card->subtitle11 }}
                    </h2>
                    <h5 style="text-align:center;">
                        {{ $card->subtitle2 }}
                    </h5>
                    <h6 style="text-align:center;">
                        {{ $card->subtitle3 }}
                    </h6>
                </div>
                <div class="cours4 text-center">
                    <button class="cou" style="border:1px solid transparent;padding:5px 10px ;font-size:16px;border-radius:10%;background-color:rgb(237,78,110);color:white;">
                        VER MAS
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    Temas nuevos no configurado
    @endif
</div>
</div>
</div>
</div>