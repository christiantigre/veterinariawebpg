        <div class="col-md-2">
            <div class="support-menu">
                <nav class="vertical">
                    <ul class="menu">
                        <li>
                            <a href="{{ url('/product') }}">
                                Productos
                            </a>
                            <ul>
                                @if(count($typeproducts)>0)
                                    @foreach($typeproducts as $typeproduct)
                                <li>
                                    <a href="{{ url('view_prod', ['id' => $typeproduct->id])}}">
                                        {{ $typeproduct->typeproduct }}
                                    </a>
                                </li>
                                    @endforeach
                                @else
                                <li>
                                    <a href="#">
                                        No hay servicios
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}">
                                Servicios
                            </a>
                            <ul>
                                @if(count($services)>0)
                                    @foreach($services as $service)
                                <li>
                                    <a href="{{ url('view_service', ['id' => $service->id])}}">
                                        {{ $service->service }}
                                    </a>
                                </li>
                                    @endforeach
                                @else
                                <li>
                                    <a href="#">
                                        No hay servicios
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
       