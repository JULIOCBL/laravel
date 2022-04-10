<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ URL::asset('/assets/img/icon.ico') }}" rel='icon' type='image/x-icon' />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/carrito.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Americn Card Rental | Carrrito</title>
</head>

<body>

    <header class="header" id="header">
        <div>
            <a href="{{ url('/') }}">
                <img alt='America Car Rental' width="150" height="55" id="header_logo" class="header_logo" src="{{ URL::asset('/assets/img/logo_b.png') }}">
            </a>
        </div>

    </header>
    <hr />
    <!--Formulario-->
    <div class="container">

        <div class="control_pasarela">
            <div class="section_compra">

                <div class="vista_compra">

                    <fieldset id="select_tickets">
                        <legend id="select_tickets_legend">@lang('translation.carrito')</legend>

                        <p>@lang('translation.productos')</p>

                        <div id='carrito'>

                        </div>

                    </fieldset>

                    <fieldset id="customer_information">
                        <legend>@lang('translation.info')</legend>
                        <div class="customer_name">
                            <label for="customer_name_input">@lang('translation.nombre'):</label>
                            <input type="text" id="customer_name_input" value="">
                        </div>
                        <div class="elemento customer_last_name">
                            <label for="customer_last_name_input">@lang('translation.apellidos'):</label>
                            <input type="text" id="customer_last_name_input" value="">
                        </div>
                        <div class="elemento customer_email">
                            <label for="customer_email_input">@lang('translation.correo'):</label>
                            <input type="email" id="customer_email_input" value="">
                        </div>
                        <div class="elemento customer_number_phone">
                            <label for="customer_number_phone_input">@lang('translation.tel'):</label>
                            <input type="number" id="customer_number_phone_input" value="">
                        </div>

                    </fieldset>

                    <fieldset id="metodo_pago" class="metodo_pago">
                        <button class="boton_pay" onclick="pagar()">@lang('translation.continuar')</button>
                    </fieldset>


                </div>
            </div>

            <!--Resumen lista desplegable-->
            <div class="section_resumen">
                <div class="vista_resumen">
                    <div class="vista_resumen_header">
                        <div class="header_titulo">
                            <div class="elemento titulo">
                                @lang('translation.presupuesto') </div>
                        </div>
                        <div class="ocultar_resumen">
                            <button class="ocultar">▼</button>
                        </div>
                    </div>
                    <div class="vista_resumen_body">

                        <div class="item_detalle">
                            <div class="item_nombre"> @lang('translation.detalle'):</div>
                            <div class="item_descripcion" id="pax_resumen" style="padding: 12px;">

                            </div>
                        </div>


                    </div>
                    <div class="vista_resumen_footer">
                        <div class="elemento resumen_purchase">
                            <div class="total_purchase" id='total_purchase'>
                                Total: $0.00
                            </div>
                            <div class="show_resumen">
                                <button class="show">▲</button>
                            </div>
                        </div>
                        <button class="boton_pay" onclick="pagar()">@lang('translation.continuar')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modales del la pagina -->

    <div id="IrVentanaFlotante" class="modal1" style="display: none;">
        <div class="ventana" style="display: grid;justify-items: center;border-radius: 8px;">

            <h1 style="margin: 4px;">@lang('translation.atencion')</h1>
            <hr style="width: 100%;">
            <p id="contenrMsj" style="margin: 5px;"> @lang('translation.eliminar') </p>
        </div>
    </div>

    <div id="myModal" class="modal">

        <div class="modal-content">
            <span id="close" class="close">&times;</span>
            <p style="font-weight: bold;font-size: 18px;">Presupuesto</p>
            <hr style=" height: 1px;   background-color: #0052a1;   border-style: none;">
            <div id="presupuesto">
            </div>
        </div>

    </div>



    <script>

        //efectos del sitio
        var modal = document.getElementById("myModal");
        var span = document.getElementById("close");

        span.onclick = function() {
            modal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        $('.show').on('click', () => {
            $('.vista_resumen_body').show()
            $('.vista_resumen_header').show()
            $('.show').hide()
        })
        $('.ocultar').on('click', () => {
            $('.vista_resumen_body').hide()
            $('.vista_resumen_header').hide()
            $('.show').show()
        })

        //vista del sistema

        const viewCarrito = () => {
            $.ajax({
                url: "{{ route('carrito.get') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                beforeSend: function() {

                },
                success: function(data) {

                    let output = '',
                        cont = 0;

                    if (data.status === 200) {

                        for (const key in data.data) {
                            output += `<div class='ticket' id='ticket_tag-wave1'>
                                <div class='ticket_item'>
                                    <p>  ${data.data[key].nombre}</p>
                                </div>

                                <div class='ticket_number'>
                                    <input type="number" id="${data.data[key].claveProducto}" value="${data.data[key].items}" name="tentacles" min="1" max="10" style="width: 58px;">
                                </div>
                                <div class='ticket_price' style="text-align: center;" data-id="${data.data[key].precio}"><span>$${data.data[key].precio} USD</span> </div>
                                <div class='ticket_accion'>
                                    <button onclick="deleteItem(${key})" style="background: none;  border: none;"><span style="color: red;  " class="material-icons">delete</span></button>
                                </div>
                            </div>`;
                        }


                    } else {
                        output = '<p style="text-align: center;">EL carrito esta vacio</p>'
                    }

                    $('#carrito').html(output);

                    if (data.status === 200) {
                        let items = calcular()

                        let detalle = '';
                        for (const key1 in items) {

                            for (const key in data.data) {
                                if (data.data[key].claveProducto == items[key1].clave) {
                                    detalle += ` <div style="display: flex;justify-content: space-between;">
                                    <p>${data.data[key].nombre }</p>
                                    <p>$${items[key1].precio * items[key1].items} USD</p>
                                </div>`;
                                }
                            }
                        }
                        $('#pax_resumen').html(detalle);
                    } else {
                        $('#pax_resumen').html('');
                        $('#total_purchase').html(`Total: $0.00`);
                    }
                }
            });
        }


        $("div").on("click", ".ticket_number", function(e) {
            calcular();
        });

        $("div").on("keyup", ".ticket_number", function(e) {
            calcular();
        });

        // calculo de items

        const calcular = () => {
            let carrito, inputid, precio, itemArray, items;
            carrito = $('#carrito')[0].children;
            itemArray = new Array();
            for (const key in carrito) {

                try {
                    inputid = carrito[key].children[1].children[0].id;
                    precio = carrito[key].children[2].dataset.id;
                    items = $(`#${inputid}`).val();


                    itemArray.push({
                        clave: inputid,
                        precio: precio,
                        items: items
                    });
                } catch (error) {

                }
            }
            viewPax(itemArray);
            return itemArray;
        }
        // vista de detalle de compra
        const viewPax = (itemArray) => {
            $.ajax({
                url: "{{ route('carrito.get') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                beforeSend: function() {

                },
                success: function(data) {
                    updateItem(itemArray);
                    if (data.status === 200) {
                        let items = itemArray;

                        let detalle = '',
                            subtotal;
                        var total = 0;
                        for (const key1 in items) {

                            for (const key in data.data) {

                                if (data.data[key].claveProducto == items[key1].clave) {
                                    subtotal = parseInt(items[key1].precio) * parseInt(items[key1].items);
                                    total += subtotal;
                                    detalle += ` <div style="display: flex;justify-content: space-between;">
                                    <p>${data.data[key].nombre }</p>
                                    <p>$${subtotal}.00 USD</p>
                                </div>`;
                                }
                            }
                        }
                        $('#pax_resumen').html(detalle);

                        $('#total_purchase').html(`Total: $${total}.00`);

                    }
                }
            });

        }

        // actualizar los items en la session
        const updateItem = (carrito) => {
            $.ajax({
                url: "{{ route('carrito.update') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'post',
                dataType: 'json',
                data: {
                    carrito: carrito
                },
                success: function(data) {


                }
            });
        }

        // vista del presupuesto y datos del cliente

        const pagar = () => {
            let output = '';
            var modal = document.getElementById("myModal");

            $.ajax({
                url: "{{ route('carrito.get') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                beforeSend: function() {

                },
                success: function(data) {

                    if (data.status === 200) {
                        console.log(data);
                        var totAL = 0,
                            subtotal = 0;

                        for (const key in data.data) {
                            subtotal = data.data[key].precio * data.data[key].items;
                            totAL += subtotal;
                            output += `
                    <div class="items">
                        <div class="justify-content">
                            <img alt="America Car Rental" class="img-producto" src="${data.data[key].imagen}">
                        </div>
                        <div  class="descripcion-pre" >
                            <h2 class="titulo-producto">${data.data[key].nombre}</h2>
                            <p style="font-size: 15px;">@lang('translation.clave')<span style="font-weight: bold;"> ${data.data[key].claveProducto}</span> </p>
                            <p style="font-size: 15px;">@lang('translation.pax')<span style="font-weight: bold;"> ${data.data[key].items}</span> </p>
                        </div>
                        <div class="total">
                            <div>
                                <p style="font-size: 16px;display: flex;">$${subtotal} USD</p>
                            </div>
                        </div>
                    </div>
                    <hr style="     height: 1px;   background-color: #968a8a;   border-style: none;">
               `;
                        }


                        output = ` <div>
                            ${output}
                                </div>
                              
                                <div style="display: flex;justify-content: flex-end;">
                                    <p style="margin-right: 32px;font-size: 18px;">Total:&nbsp;<span style="font-weight: bold;font-size: 18px;">$${totAL}.00</span></p>
                                </div>`;

                        $("#presupuesto").html(output);
                        modal.style.display = "block";

                    } else {
                        $("#presupuesto").html('');

                    }
                }
            });
        }

        viewCarrito();

        // eliminar un producto del carrito en la session
        const deleteItem = (id) => {
            $.ajax({
                url: "{{ route('carrito.destroy') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'post',
                dataType: 'json',
                data: {
                    'idProducto': id,
                },
                success: function(data) {
                    if (data.status === 200) {
                        $(`#IrVentanaFlotante`).fadeIn("slow").delay(500).fadeOut("slow");
                    }
                    viewCarrito();

                }
            });
        }
    </script>
</body>

</html>