<div class="col-xs-12 col-sm-8 col-md-3 side">
    <small>
        <p style="margin-bottom:0px;"><b>Interes</b></p>
        <div class="statistics">
            <p><span class="label label-default">Visitas 2550</span></p>
            <p><span class="label label-default">Comentarios 15</span></p>
            <p><span class="label label-default">Compartido 50 veces</span></p>
            <p><span class="label label-default">Me gusta 20</span></p>
        </div>
        <p style="margin-bottom:0px;margin-top:25px;"><b>Relacionados</b></p>
        <ul class="list-group">
            @if(count($temasgalerias)>0)
            <?Php $i = 1;?>
            @foreach($temasgalerias as $item)

            <li class="list-group-item">
                <big><b><?Php echo $i; ?>.</b></big><a href="{{url('DetallGalleryItem', ['id' => $item->id])}}">{{ $item->title }}</a>
            </li>

            <?Php $i++;?>
            @endforeach
            @endif
        </ul>
    </small>
</div>