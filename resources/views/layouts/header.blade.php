<div class="menu sticky" id="menuDeskop">
    <nav class="navar">
        <ul class="left">
            <li class="top">

                <button onclick="menu()" id="btn-menu" class="btn ">
                    <span class="linea1 color"></span>
                    <span class="linea2"></span>
                    <span class="linea3"></span>
                    <span class="linea4 color"></span>
                </button>
                <img width="149" height="52" src="{{ URL::asset('/assets/img/logo_a.png')}}" alt="" style="width: 149px;     height: 52px;">

            </li>
        </ul>
        <ul id="menu" class="right activo">
            <li><a href="">@lang('translation.inicio') </a></li>
            <li><a href="">@lang('translation.cars')</a></li>
            <li><a href="">@lang('translation.promocion')</a></li>
            <li><a href="">@lang('translation.sucursales')</a></li>
            <li><a href="">@lang('translation.politicas')</a></li>
            <li><a href="">@lang('translation.contacto')</a></li>
            <li><a href="{{ url('/carrito') }}" ><span class="material-icons">shopping_cart</span></a></li>

            <li>
            @if(Session::get('lang') == 'es')
    <a href="{{url('index/us')}}" class="dropdown-item notify-item">
        <img src="{{ URL::asset('/assets/img/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle" style="font-size: 16px;
">English</span>
    </a>
    @else
    <a href="{{url('index/es')}}" class="dropdown-item notify-item">
        <img src="{{ URL::asset('/assets/img/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle" style="font-size: 16px;
">Español</span>
    </a>
    @endauth
            </li>

        </ul>
    </nav>
</div>