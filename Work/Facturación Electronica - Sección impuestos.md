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
