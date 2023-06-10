```javascript
  
// MODAL - FACTURACIÓN ELECTRONICA - Cargar impuestos ligados al producto  
var impuestos_by_id = "/productos/" + productid + "/retenciones";  
  
$.ajax({  
    url: impuestos_by_id,  
    dataType: 'json',  
    method: 'GET',  
    success: function (data) {  
        var impuestos = data.data.impuestos;  
        var name_impuesto = `${impuestos.nombre} ${impuestos.tarifa} ${(impuestos.tipo_impuesto == 'nominal') ? '$' : '%'}`  
        var val_product_retencion = data.data.retenciones;  
        $("#impuestos").prepend("<p>" + impuestos.nombre2 + " " + impuestos.tarifa + `${(impuestos.tipo_impuesto == 'nominal') ? '$' : '%'} </p>`)  
        $("#btn-taxes-fact-electronic").click(function(){  
            $("#impuesto_cargo_uno").append("<option selected>" + impuestos.nombre2 + " " + impuestos.tarifa + `${(impuestos.tipo_impuesto == 'nominal') ? '$' : '%'} </option>`);  
        })    }, error: function () {  
        $("#impuesto_cargo_uno").empty();  
        $("#impuesto_cargo_uno").append("<option>No hay impuestos</option>")  
    }})  
  
// MODAL - FACTURACIÓN ELECTRONICA - Cargar impuestos que esten agregados por el usuario manualmente  
var all_impuestos = "/impuestos/cargar/todos/"  
$.ajax({  
    url: all_impuestos,  
    dataType: 'json',  
    method: 'GET',  
    success: function (data) {  
        const taxes = data.data.taxes;  
        $.each(taxes, function (i, item) {  
            $("#impuesto_cargo_dos").append("<option>" + taxes[i].nombre2 + " " + taxes[i].tarifa +`${(taxes[i].tipo_impuesto == 'nominal') ? '$' : '%'} </option>`);  
        });  
    }, error: function () {  
        $("#impuesto_cargo_dos").empty();  
        $("#impuesto_cargo_dos").append("<option>No hay impuestos</option>")  
    }})  
  
// MODAL - FACTURACIÓN ELECTRONICA - Cargar retenciones y sus respectivas tarifas  
var all_retenciones = "/configuration/contabilidad/bases_retenciones/";  
$.ajax({  
    url: all_retenciones,  
    dataType: 'json',  
    method: 'GET',  
    success: function (data) {  
        let retenciones = data.data;  
  
        $.each(retenciones, function (i, item) {  
            $("#rete_renta").append("<option>" + retenciones[i].concept + "</option>")  
        })  
        $("#rete_renta").on("change", function () {  
            var impuesto_select = $(this).val()  
  
            $("#rete_renta_tarifa").empty();  
  
            $.each(retenciones, function (i, item) {  
                if (item.concept === impuesto_select) {  
                    $("#rete_renta_tarifa").append("<option>" + parseFloat(item.tax_declarant) + " %</option>" +  
                        "<option>" + parseFloat(item.tax_no_declarant) + " %</option>" )  
                }            })        })    }, error: function () {  
        $("#rete_renta").empty();  
        $("#rete_renta").append("<option>No hay impuestos</option>")  
    }})  
  
// MODAL - FACTURACIÓN ELECTRONICA - Cargar retencion IVA con sus respectivas tarifas  
const rete_IVAs = [  
    { concept: "Rete IVA por servicios", tax_declarant: "15", tax_no_declarant: "100"},  
    { concept: "Rete IVA por compras", tax_declarant: "15", tax_no_declarant: "100"}  
]  
  
$.each(rete_IVAs, function (i, item) {  
    $("#rete_iva").append("<option>" + item.concept + "</option>");  
});  
  
$("#rete_iva").on("change", function () {  
    var impuesto_select = $(this).val();  
    $("#rete_iva_tarifa").empty();  
    $.each(rete_IVAs, function (i, item) {  
        if (item.concept === impuesto_select) {  
            $("#rete_iva_tarifa").append("<option>" + parseFloat(item.tax_declarant) + " %</option>" +  
                "<option>" + parseFloat(item.tax_no_declarant) + " %</option>")  
        }    });});
```