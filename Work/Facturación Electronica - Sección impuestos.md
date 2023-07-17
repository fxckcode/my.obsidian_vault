Ya hechos
- [x] Mostrar en `impuestos_cargo_uno` el impuesto creado en la sección de impuesto crear rápido en Editar o crear producto
- [x] Mostrar al lado del botón de añadir impuesto, el impuesto que está arraigado al producto

Pendiente
- [ ] Cálculo de descuento (Error en `script-calculate-general-total.js línea 300`)
- [ ] Si el producto cuenta con retención, debe de seleccionarse automaticamente en el select de rete renta
- [x] Por cada producto agregado, en el modal se difecien la base y los impuestos que esten arraigados al producto
- [ ] Mostrar visualmente todos los impuestos en el recuadro
- [ ] Mirar cual es la taria por defecto de una retencion del producto
- [x] Mostrar en el modal de seleccionar un producto el valor unitario con el impuesto ya aplicado
# Facturación Electronica - Sección editar y crear producto
Ya hechos
- [x] Crear un modal diferente para facturación electronica para crear impuesto rápidamente en la sección de crear y editar impuestos
- [x] Hacer que se guarden correctamente en la tabla y que en tipo_facturación figuren como impuestos de facturación electronica
- [x] Crear un codicional para que el modal sea diferente si se esta en facturación pos o facturación electronica
- [x] Que los impuestos sean filtrados en el select de impuesto ya sea en Editar o Crear un producto
pgt
Pendientes
- [x] Cuando se cree el producto automaticamente se cierre el modal
- [x] Que se recargue la página
- [x] Calcular correctamente el valor que se le descuenta al valor de venta si se le agrega el impuesto previamente creado


## Creación del modal para seleccionar un producto

```javascript

$('.table-all-productos-into-billing').append("<tr idd='" + baseid + "' name='" + basename + "' taxd='" + basetaxd + "' taxn='" + basetaxn + "' base='" + basebase + "'>  " +  
    "<td>" + result[i].codigo + "</td>" +  
    "<td>" + imei1 + "</td>" +  
    "<input type=\"hidden\" id=\"productid\" value='" + result[i].id + "'>" +  
    "<input type=\"hidden\" id=\"productCATEGORIA\" value='" + result[i].id_categoria + "'>" +  
    "<input type=\"hidden\" id=\"productcod\" value='" + result[i].codigo + "'>" +  
    "<input type=\"hidden\" id=\"productname\" value='" + result[i].nombre + "'>" +  
    "<input type=\"hidden\" id=\"productimei1\" value='" + result[i].imei1 + "'>" +  
    "<input type=\"hidden\" value=\"1\" id=\"productcant\" disabled>" +  
    "<input type=\"hidden\" id=\"productpventa1\" value='" + result[i].precioventa_1 + "'>" +  
    "<input type=\"hidden\" id=\"productpventa2\" value='" + result[i].precioventa_2 + "'>" +  
    "<input type=\"hidden\" id=\"productpventa3\" value='" + result[i].precioventa_3 + "'>" +  
    "<input type=\"hidden\" id=\"productpventa_activo\" value='" + result[i].precioventa_activo + "'>" +  
    "<input type=\"hidden\" id=\"productprice\" value='" + result[i].precioventa_1 + "'>" +  
    "<input type=\"hidden\" id=\"productcdisponible\" value='" + result[i].cantidad_inicial + "'>" +  
    "<input type=\"hidden\" id=\"productImpuestoName1\" value='" + result[i].imp1 + "'>" +  
    "<input type=\"hidden\" id=\"productImpuestoVal1\" value='" + result[i].imp1_valor + "'>" +  
    "<input type=\"hidden\" id=\"productImpuestoName2\" value='" + result[i].imp2 + "'>" +  
    "<input type=\"hidden\" id=\"productImpuestoVal2\" value='" + result[i].imp2_valor + "'>" +  
    //ATRIBUTOS PARA EL CONTROL DE IMPUESTOS EN LOS PRECIOS DE VENTA DEL PRODUCTO  
    "<input type=\"hidden\" class=\"productImpuestoclasificacion_tributaria_venta\" value='" + result[i].clasificacion_tributaria_venta + "'>" +  
    "<input type=\"hidden\" class=\"productImpuestoiva_venta\" value='" + result[i].iva_venta + "'>" +  
    "<input type=\"hidden\" class=\"productImpuestoiva_venta_valor1\" value='" + result[i].iva_venta_valor1 + "'>" +  
    "<input type=\"hidden\" class=\"productImpuestoiva_venta_valor2\" value='" + result[i].iva_venta_valor2 + "'>" +  
    "<input type=\"hidden\" class=\"productImpuestoiva_venta_valor3\" value='" + result[i].iva_venta_valor3 + "'>" +  
    "<input type=\"hidden\" class=\"productUnidadMediad_data\" value='" + result[i].unidad_medida_sigla + "'>" +  
    "<input type=\"hidden\" class=\"productitem_inventariable_data\" value='" + result[i].item_inventariable + "'>" +  
    "<input type=\"hidden\" id=\"productImpuestoCompraName\" value='" + result[i].iva_compra_name + "'>" +  
    "<input type=\"hidden\" id=\"productImpuestoCompraVal\" value='" + result[i].iva_compra_tarifa + "'>" +  
    "<input type=\"hidden\" class=\"productiPrecioDeCompradataBase\" value='" + precioBaseCompra + "'>" +  
    "<input type=\"hidden\" class=\"productiPrecioDeCompradata\" value='" + precioCompraOCosto + "'>" +  
    "<td>" + result[i].nombre + "</td>" +  
    "<td>" + result[i].nombre_categoria + "</td>" +  
    "<td>" + estadocantidad + "</td>" +  
    "<td>" +  
    "<span>$ " + showAsFloat((result[i].precioventa_1 - result[i].iva_venta_valor1)) + "</span><br>" +  
    "<span>$ " + showAsFloat((result[i].precioventa_2 - result[i].iva_venta_valor2)) + "</span><br>" +  
    "<span>$ " + showAsFloat((result[i].precioventa_3 - result[i].iva_venta_valor3)) + "</span>" +  
    "</td>" +  
    "<td>" + mostrarUocultar + "</td>" +  
    "</tr>");
```


Serial algo como
Diferencia de impuesto = 1597 * 2  = 3193
8403 * 10 / 100  = 840 * 2 unidades = 1.680
8403 * 2 unidades  = 16.806
16.806 - 1680 = 15.126
15.126 + 3193 = 18.319 total


```javascript
$(`#select_precios_fact_electronica_${productid}`).change(function() {
    // Se activa cuando cambia el valor del elemento de selección de precios con un ID específico.
    let precioUnitario  = parseFloat($(this).val()); // Obtiene el valor seleccionado y lo convierte en un número de punto flotante.
    let descuento = $(this).closest('tr').find(`#inputDescuento_${productid}`).val(); // Obtiene el valor de un campo de entrada de descuento en la misma fila de la tabla.
    let cantidad = $(this).closest('tr').find(`#txt_cantidad_into_list${productid}`).val(); // Obtiene el valor de un campo de entrada de cantidad en la misma fila de la tabla.
    let calculoDescuento = precioUnitario * descuento / 100; // Calcula el descuento en función del precio unitario y el porcentaje de descuento.
    
    // Si el valor del impuesto en la fila de la tabla es mayor que cero, se realizan cálculos para el impuesto, incluyendo el tipo de impuesto (nominal o porcentual).
    if ($(this).closest('tr').find(`#impuesto_cargo1_${productid}`).attr('value') > 0) {
        let tarifaImpuesto = parseFloat($(this).closest('tr').find(`#impuesto_cargo1_${productid}`).attr('value')); // Obtiene el valor de la tarifa de impuesto en la misma fila de la tabla.
        let tipoImpuesto = $(this).closest('tr').find(`#impuesto_cargo1_${productid}`).attr('tipo'); // Obtiene el tipo de impuesto en la misma fila de la tabla.
        let newPrecioUnitario = precioUnitario - calculoDescuento; // Calcula el nuevo precio unitario después del descuento.
        
        // Si el tipo de impuesto es nominal, se establece la diferencia de impuesto en la tarifa de impuesto. Si es porcentual, se calcula la diferencia de impuesto en función del nuevo precio unitario y la tarifa de impuesto.
        if (tipoImpuesto == 'nominal') {
            newDifereciaImpuesto = (newPrecioUnitario == 0)? 0 : tarifaImpuesto; // Establece la diferencia de impuesto en la tarifa de impuesto si el nuevo precio unitario es cero.
        } else if (tipoImpuesto == 'porcentual') {
            newDifereciaImpuesto = newPrecioUnitario * tarifaImpuesto / 100; // Calcula la diferencia de impuesto en función del nuevo precio unitario y la tarifa de impuesto.
        }
        
        // Calcula el nuevo total multiplicando el precio unitario ajustado y la cantidad, y actualiza el elemento de totalización en la misma fila de la tabla HTML.
        let newTotal = (newPrecioUnitario + newDifereciaImpuesto) * cantidad;
        $(this).closest('tr').find('#total').text(showAsFloat(newTotal));
    } else {
        // Si el valor del impuesto es cero, se calcula el nuevo total multiplicando el precio unitario ajustado y la cantidad, y se actualiza el elemento de totalización en la misma fila de la tabla HTML.
        let newPrecioUnitario = precioUnitario - calculoDescuento; // Calcula el nuevo precio unitario después del descuento

```

