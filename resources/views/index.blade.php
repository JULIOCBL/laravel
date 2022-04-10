@extends('layouts.master-layouts')
@section('title')
Prueba | America Car Central
@endsection
@section('content')

<style>
    .img-cars {
        background-image: url("{{ URL::asset('/assets/img/cars.png') }}");
        background-position: -255px -1183px;
        width: 260px;
        height: 148px;
        background-size: 260px;
    }

    .img-AC {
        background-image: url("{{ URL::asset('/assets/img/iconos.png') }}");
        background-position: -182px -1173px;
        width: 34px;
        height: 30px;
        background-size: 43px;
    }

    .img-M {
        background-image: url("{{ URL::asset('/assets/img/iconos.png') }}");
        background-position: -182px -1205px;
        width: 34px;
        height: 30px;
        background-size: 43px;
    }

    .img-maleta {
        background-image: url("{{ URL::asset('/assets/img/iconos.png') }}");
        background-position: -135px -1241px;
        width: 43px;
        height: 30px;
        background-size: 43px;
    }

    .img-user {
        background-image: url("{{ URL::asset('/assets/img/iconos.png') }}");
        background-position: -137px -1275px;
        width: 43px;
        height: 30px;
        background-size: 43px;
    }

    .img-flecha {
        background-image: url("{{ URL::asset('/assets/img/iconos.png') }}");
        background-position: -162px -1347px;
        width: 33px;
        height: 22px;
        background-size: 71px;
    }
</style>

<span class="inicio"></span>
<div class="container">
    <h1 class="font-size-53 margin-5 center">@lang('translation.titulo')sa</h1>
    <span class="center display-block font-size-20 color-gris">@lang('translation.subTitulo')</span>

    
    <div class="center-slider justify-content-center">
        <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
                <div class="padding-24">
                    <div class="color-white">
                        <div style=" padding: 12px 25px 14px 25px; overflow: hidden;">
                            <div style="display: flex;align-items: center;justify-content: center;">
                                <img src='{{url("assets/img/carro.png")}}' alt="Carrito" style="width: 238px; height: 132px;">
                            </div>
                            <div>
                                <br><br>
                                <h1 class="titulo-producto">Volkswagen Jetta</h1>


                                <div class="columa">
                                    <div class="justify-text-2">@lang('translation.nota')</div>
                                    <div style="text-align: right; color: #676565;">ECMR</div>
                                    <div class="justify-text-2 center-slider">
                                        <div class="img-AC"></div> A/C
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-maleta"></div> x 2
                                    </div>

                                    <div class="justify-text-2 center-slider">
                                        <div class="img-M"></div> @lang('translation.tipo')
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-user"></div> x 2
                                    </div>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 25px;  padding-top: 25px;">

                                    <a class="btn-verde" href="">$62.00 USD</a>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 17px;">
                                    <a class="btn-book-now" onclick="agregarCarrito('VJDCD73', '62.00', 'Volkswagen Jetta', 1)">@lang('translation.reservar')</a>
                                </div>
                            </div>
                        </div>

                        <div>

                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </li>
            <li class="item-b">
                <div class="padding-24">
                    <div class="color-white">
                        <div style=" padding: 12px 25px 14px 25px; overflow: hidden;">
                            <div style="display: flex;align-items: center;justify-content: center;">
                                <img src='{{url("assets/img/carro2.png")}}' alt="Carrito" style="width: 238px; height: 132px;">
                            </div>
                            <div>
                                <br><br>
                                <h1 class="titulo-producto">CHEVROLET AVEO123</h1>


                                <div class="columa">
                                    <div class="justify-text-2">@lang('translation.nota')</div>
                                    <div style="text-align: right; color: #676565;">ECMR</div>
                                    <div class="justify-text-2 center-slider">
                                        <div class="img-AC"></div> A/C
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-maleta"></div> x 2
                                    </div>

                                    <div class="justify-text-2 center-slider">
                                        <div class="img-M"></div> @lang('translation.tipo')
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-user"></div> x 2
                                    </div>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 25px;  padding-top: 25px;">

                                    <a class="btn-verde" href="">$52.00 USD</a>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 17px;">
                                    <a class="btn-book-now" onclick="agregarCarrito('CHA89', '52.00', 'CHEVROLET AVEO123', 2)">@lang('translation.reservar')</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </li>
            <li class="item-c">
                <div class="padding-24">
                    <div class="color-white">
                        <div style=" padding: 12px 25px 14px 25px; overflow: hidden;">
                            <div style="display: flex;align-items: center;justify-content: center;">
                                <img src='{{url("assets/img/carro.png")}}' alt="Carrito" style="width: 238px; height: 132px;">
                            </div>
                            <div>
                                <br><br>
                                <h1 class="titulo-producto">Hyundai Sonata</h1>


                                <div class="columa">
                                    <div class="justify-text-2">@lang('translation.nota')</div>
                                    <div style="text-align: right; color: #676565;">ECMR</div>
                                    <div class="justify-text-2 center-slider">
                                        <div class="img-AC"></div> A/C
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-maleta"></div> x 2
                                    </div>

                                    <div class="justify-text-2 center-slider">
                                        <div class="img-M"></div> @lang('translation.tipo')
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-user"></div> x 2
                                    </div>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 25px;  padding-top: 25px;">

                                    <a class="btn-verde" href="">$32.00 USD</a>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 17px;">
                                    <a class="btn-book-now" onclick="agregarCarrito('HSJDF64', '32.00', 'Hyundai Sonata',1)">@lang('translation.reservar')</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </li>
            <li class="item-d">
                <div class="padding-24">
                    <div class="color-white">
                        <div style=" padding: 12px 25px 14px 25px; overflow: hidden;">
                            <div style="display: flex;align-items: center;justify-content: center;">
                                <img src='{{url("assets/img/carro2.png")}}' alt="Carrito" style="width: 238px; height: 132px;">
                            </div>
                            <div>
                                <br><br>
                                <h1 class="titulo-producto">Nissan Altima</h1>


                                <div class="columa">
                                    <div class="justify-text-2">@lang('translation.nota')</div>
                                    <div style="text-align: right; color: #676565;">ECMR</div>
                                    <div class="justify-text-2 center-slider">
                                        <div class="img-AC"></div> A/C
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-maleta"></div> x 2
                                    </div>

                                    <div class="justify-text-2 center-slider">
                                        <div class="img-M"></div> @lang('translation.tipo')
                                    </div>
                                    <div class="justify-text">
                                        <div class="img-user"></div> x 2
                                    </div>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 25px;  padding-top: 25px;">

                                    <a class="btn-verde" href="">$23.00 USD</a>
                                </div>
                                <div class="margen-btn" style="padding-bottom: 17px;">
                                    <a class="btn-book-now" onclick="agregarCarrito('NASD12', '23.00', 'Nissan Altima',2)">@lang('translation.reservar')</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </li>


        </ul>
    </div>
   
    <a id='arriba' class="btn-flotante ">
        <div class="img-flecha"></div>
    </a>


    <div id="IrVentanaFlotante" class="modal" style="display: none;">
        <div class="ventana" id="contenrMsj" style="display: grid;justify-items: center;border-radius: 8px;">

        </div>
    </div>

    <script>
        const agregarCarrito = (id, precio, nombre, imagen) => {
            let X_CSRF_Token = $("meta[name=csrf-token]").attr('content');

            $.ajax({
                url: "{{ route('carrito.insert') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'post',
                dataType: 'json',
                data: {
                    'clave': `${id}`,
                    'precio': precio,
                    'nombre': nombre,
                    'items': 1,
                    'imagen': (imagen == 1) ? '{{url("assets/img/carro.png")}}' : '{{url("assets/img/carro2.png")}}'
                },
                beforeSend: function() {

                },
                success: function(data) {
                    console.log(data);
                    let output = '';
                    if (data.status === 200) {

                        output = ` <h3 >Producto</h3>
                        <p >Se agrego al carrito con exito</p>`;
                    } else {
                        output = ` <h3 >El Producto</h3>
                        <p >Ya se encuentra en el carrito</p>`;
                    }
                    $(`#contenrMsj`).html(output);
                    $(`#IrVentanaFlotante`).fadeIn("slow").delay(200).fadeOut("slow");

                }
            });

        }

        $('#arriba').click(function(){
            $('body, html').animate({
                scrollTop: 0
            })
        })
    </script>
    @endsection