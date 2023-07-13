<div class="col-9 div-condig-fe-certificados">
    <div class="tab-content facturacion-electronica-content" id="v-pills-tabContent">

        <div class="tab-pane  show active" id="tab_tab_helper_" role="tabpanel" aria-labelledby="tab_helper_">

            <b>INFORMACIÓN PARA FACTURAR ELECTRÓNICAMENTE</b>
            <hr>

            <br>

            <ol>
                <li><b>DATOS DE LA EMPRESA</b></li>
                <ul>
                    <li><span>Por favor llena todos los campos</span></li>
                    <li><span>Para el campo <strong>Identificación Tributaria RUT</strong> debes agregar el <strong>DIGITO de verificación RUT</strong></span>
                    </li>
                    <li><span>El campo <strong>Responsabilidad</strong> es uno de los mas importantes asi, que por favor asegurate de seleccionarlo bien</span>
                    </li>
                </ul>
                <li><b>SOFTWARE UTILIZADO</b></li>
                <ul>
                    <li><span>Tienes dos formas de iniciar la facturación electronica, si solo vas a usar <strong>EL MODO OPERACION</strong> entonces entonces selecciona <strong>no usar tester</strong> </span>
                    </li>
                    <li>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>TESTER</th>
                                <th>OPERACION</th>
                                <th>CAMPOS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><strong>Identificador del Software</strong></td>
                            </tr>
                            <tr>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><strong>Ping del software</strong></td>
                            </tr>
                            <tr>
                                <td><span class="icon icon-checkbox-unchecked"></span></td>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><strong>Url de Operación</strong></td>
                            </tr>
                            <tr>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><span class="icon icon-checkbox-unchecked"></span></td>
                                <td><strong>Usar Tester</strong></td>
                            </tr>
                            <tr>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><span class="icon icon-checkbox-unchecked"></span></td>
                                <td><strong>Codigo de Pruebas</strong></td>
                            </tr>
                            <tr>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><span class="icon icon-checkbox-unchecked"></span></td>
                                <td><strong>Url de Pruebas</strong></td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>FACTURAS</th>
                                <th>NOTAS CREDITO/DEBITO</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><span class="icon icon-checkbox-checked text-pos-mascontrol"></span></td>
                                <td><strong>SetPruebas valido para todos los Documentos Electronicos</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>
                <li><b>CERTIFICADO DIGITAL</b></li>
                <ul>
                    <li><span>Selecciona el <strong>Certificado Digital</strong> o <strong>Firma Digital</strong> en formato <b>.p12</b>, por lo general los certificados traen una exteción diferente, asi que solo debes cambia la misma a .p12</span>
                    </li>
                    <li><span>Luego de esto pidele al Admin del sistema que haga el siguiente paso! <strong>¡Obligatorio!</strong></span>
                    </li>
                </ul>
                <li><b>RESOLUCIÓN ELECTRONICA</b></li>
                <ul>
                    <li><span>Complata todos los campos</span></li>
                    <li><span>Recuerda ingresar los mismos datos que la entidad <strong>DIAN</strong> te brinda</span>
                    </li>
                    <li><span>Las Fechas, clave de tecnica, etc. Todos los datos son validados por la DIAN, asi que es importante hacer bien el registro.</span>
                    </li>
                </ul>
                <li><b>FACTURAR ELECTRONICA</b> <span class="icon icon-cool text-pos-mascontrol"
                                                      style="font-size: 30px"></span></li>
                <ul>
                    <li><span>Pasos para hacer esto posible.</span></li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso1.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso1.png') }}" alt="">
                            </div>
                            <strong>INGRESAR</strong>
                            <p>Accede a la facturación electronica utilizando el menú</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso2.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso2.png') }}" alt=""><br>
                            </div>
                            <strong>CLIENTE</strong>
                            <p>Selecciona o crea el cliente</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso3.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso3.png') }}" alt=""><br>
                            </div>
                            <strong>PRODUCTOS</strong>
                            <p>Selecciona productos, utiliza el buscador por codigo o ingresa para ver el listado
                                completo.</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso4.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso4.png') }}" alt=""><br>
                            </div>
                            <strong>GUARDAR FACTURA</strong>
                            <p>Utiliza la opción de solo guardar la factura, esto por si no deseas enviar directamente
                                la factura a la DIAN.</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso5.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso5.png') }}" alt=""><br>
                            </div>
                            <strong>GUARDAR FACTURA Y ENVIAR A LA DIAN</strong>
                            <p>Utiliza la opción de guardar y enviar factura, esto por si deseas enviar directamente la
                                factura a la DIAN.</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso6.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso6.png') }}" alt=""><br>
                            </div>
                            <strong>PAGAR</strong>
                            <p>Selecciona la forma de pago e ingresa el monto a pagar, luego de esto confirma y guarda
                                tu documento factura.</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso7.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso7.png') }}" alt=""><br>
                            </div>
                            <strong>FACTURA GENERADA</strong>
                            <p>Listo tu documento factura electronica ha sido creada, <span
                                        class="icon icon-shocked"></span>, pero aun falta unos pasos mas para poder
                                enviar el mismo a los servicios de la DIAN.</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso8.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso8.png') }}" alt=""><br>
                            </div>
                            <strong>DETALLES DE LA FACTURA</strong>
                            <p>Ve al detalle de la factura y selecciona <strong>EMITIR</strong> documento, confirma y
                                envia el mismo. Luego de esto, tu ya has acabado; solo queda esperar que la DIAN de su
                                aprobación.</p>
                        </div>
                    </li>
                    <li class="invoicing-electronic-config-steps">
                        <div>
                            <div>
                                <span class="icon icon-plus btn-see-photography" url="paso9.png"></span>
                                <img src="{{ asset('pos_naranja/invoiceElectronic/paso9.png') }}" alt=""><br>
                            </div>
                            <strong>LISTO</strong>
                            <p>Listo, ya estas facturando electronicamente, solo queda que envies el documento
                                electronico al cliente si asi el lo desea, o generes notas credito o debito en su
                                defecto.</p>
                        </div>
                    </li>
                </ul>

            </ol>

        </div>

        <div class="tab-pane" id="tab_empresa_url" role="tabpanel"
             aria-labelledby="tab_empresa_">

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if(Session::has('errors'))
                <div class="alert alert-danger">
                    {{ Session::get('errors') }}
                </div>
            @endif

            <form action="{{ route('guardarDetallesEmpresaFacturadora') }}" method="POST">

                {{ csrf_field() }}

                <div class="card-body inventory-container-cajas create-company-form-register"
                     style="grid-template-columns: 50% 50%">

                    <div class="inventory-caja-3">

                        <div class="inventory-caja-3-label">
                            <label for="invele_indentificacion_rut"> <b>Identificación Tributaria
                                    RUT ( <span class="text-warning">No incluir digito</span> )</b></label><br>
                            <input type="name" name="invele_indentificacion_rut"
                                   id="invele_indentificacion_rut"
                                   value="@if($detallesEmpresa!=null){{$detallesEmpresa->identification_number}}@endif"
                                   required>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_digito_verif_rut"> <b>Dígito de verificación
                                    RUT</b></label><br>
                            <input type="name" name="invele_digito_verif_rut" id="invele_digito_verif_rut" max="1"
                                   required value="@if($detallesEmpresa!=null){{$detallesEmpresa->dv}}@endif">
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_matricula_mercantil"> <b>Matrícula mercantil</b></label><br>
                            <input type="name" name="invele_matricula_mercantil"
                                   id="invele_matricula_mercantil" required
                                   value="@if($detallesEmpresa!=null){{$detallesEmpresa->merchant_registration}}@endif">
                        </div>

                      {{--  <div class="inventory-caja-3-label">
                            <label for="invele_idioma"> <b>Selecciona tu idioma</b></label><br>
                            <select name="invele_idioma" id="invele_idioma" required class="form-control selectpicker"
                                    data-live-search="true" style="font-size: 11px">

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->language_id}}">{{$detallesEmpresa->language->code}}
                                        - {{$detallesEmpresa->language->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif


                                @foreach($idiomas as $idioma)
                                    <option value="{{$idioma->id}}">{{$idioma->code}}
                                        - {{$idioma->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_impuesto"> <b>Selecciona tu impuesto</b></label><br>
                            <select name="invele_impuesto" id="invele_impuesto" required>

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->tax_id}}">{{$detallesEmpresa->tax->code}}
                                        - {{$detallesEmpresa->tax->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->id}}">{{$impuesto->code}}
                                        - {{$impuesto->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_ambiente"> <b>Selecciona tu ambiente</b></label><br>
                            <select name="invele_ambiente" id="invele_ambiente" required>
                                <option value="1"
                                        @if($detallesEmpresa!=null)@if($detallesEmpresa->type_environment_id == 1) selected @else @endif @endif>
                                    PRODUCCION
                                </option>
                                <option value="2"
                                        @if($detallesEmpresa!=null)@if($detallesEmpresa->type_environment_id == 2) selected @else @endif @endif>
                                    PRUEBAS
                                </option>
                            </select>
                        </div> --}}

                        <div class="inventory-caja-3-label">
                            <label for="invele_operacion"> <b>Selecciona tu tipo de
                                    operación</b></label><br>
                            <select name="invele_operacion" id="invele_operacion" required data-live-search="true" style="font-size: 11px">

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->type_operation_id}}">{{$detallesEmpresa->type_operation->code}}
                                        - {{$detallesEmpresa->type_operation->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($tiposOperaciones as $operacion)
                                    <option value="{{$operacion->id}}">{{$operacion->code}}
                                        - {{$operacion->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_email_bussies"> <b>Correo electronico empresa</b></label><br>
                            <input type="name" name="invele_email_bussies"
                                   id="invele_email_bussies" required value="">
                        </div>

                        <br>

                    </div>

                    <div class="inventory-caja-2">

                        <div class="inventory-caja-3-label">
                            <label for="invele_identificacion_documento"> <b>Tipo identificación</b></label><br>
                            <select name="invele_identificacion_documento"
                                    id="invele_identificacion_documento" required>

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->type_document_identification_id}}">{{$detallesEmpresa->type_document_identification->code}}
                                        - {{$detallesEmpresa->type_document_identification->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($tiposIdentificaciones as $identificacion)
                                    <option value="{{$identificacion->id}}">{{$identificacion->code}}
                                        - {{$identificacion->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_pais"> <b>Selecciona tu pais</b></label><br>
                            <select name="invele_pais" id="invele_pais" required
                                    data-live-search="true" style="font-size: 11px">

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->country_id}}">{{$detallesEmpresa->country->code}}
                                        - {{$detallesEmpresa->country->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($paises as $pais)
                                    <option value="{{$pais->id}}">{{$pais->code}} - {{$pais->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_department"> <b>Selecciona el departamento</b></label><br>
                            <select name="invele_department" id="invele_department" required data-live-search="true" style="font-size: 11px">

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->departament_id}}">{{$detallesEmpresa->departments->code}}
                                        - {{$detallesEmpresa->departments->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($departaments as $departament)
                                    <option value="{{$departament->id}}">{{$departament->code}}
                                        - {{$departament->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_municipio"> <b>Selecciona tu municipio</b></label><br>
                            <select name="invele_municipio" id="invele_municipio" required data-live-search="true" style="font-size: 11px">

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->municipality_id}}">{{$detallesEmpresa->municipality->code}}
                                        - {{$detallesEmpresa->municipality->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($municipios as $municipio)
                                    <option value="{{$municipio->id}}">{{$municipio->code}}
                                        - {{$municipio->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        {{--

                        <div class="inventory-caja-3-label">
                            <label for="invele_organizacion"> <b>Tipo organización</b></label><br>
                            <select name="invele_organizacion" id="invele_organizacion" required data-live-search="true" style="font-size: 11px">

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->type_organization_id}}">{{$detallesEmpresa->type_organization->code}}
                                        - {{$detallesEmpresa->type_organization->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($tiposOrganizaciones as $organizacion)
                                    <option value="{{$organizacion->id}}">{{$organizacion->code}}
                                        - {{$organizacion->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="inventory-caja-3-label">
                            <label for="invele_regimen"> <b>Tipo regimen</b></label><br>
                            <select name="invele_regimen" id="invele_regimen" required>

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->type_regime_id}}">{{$detallesEmpresa->type_regime->code}}
                                        - {{$detallesEmpresa->type_regime->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($tiposRegimenes as $regimen)
                                    <option value="{{$regimen->id}}">{{$regimen->code}}
                                        - {{$regimen->name}}</option>
                                @endforeach

                            </select>
                        </div> --}}

                        <div class="inventory-caja-3-label">
                            <label for="invele_responsabilidad"> <b>Responsabilidad</b></label><br>
                            <select name="invele_responsabilidad" id="invele_responsabilidad" required>

                                @if($detallesEmpresa!=null)
                                    <option value="{{$detallesEmpresa->type_liability_id}}">{{$detallesEmpresa->type_liability->code}}
                                        - {{$detallesEmpresa->type_liability->name}}</option>
                                @else
                                    <option value="">...</option>
                                @endif

                                @foreach($tiposResponsabilidades as $responsabilidad)
                                    <option value="{{$responsabilidad->id}}">{{$responsabilidad->code}}
                                        - {{$responsabilidad->name}}</option>
                                @endforeach

                            </select>
                        </div>

                    </div>

                </div>
                <div class="clients-content-form-submit w-100 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="font-size: 11px">GUARDAR
                        DATOS
                    </button>
                </div>

            </form>

        </div>

        <div class="tab-pane " id="tab_software_url" role="tabpanel" aria-labelledby="tab_software_">

            <form action="{{ route('guardarDetallesSoftwareFacturadora') }}" method="POST">

                {{ csrf_field() }}

                <hr>
                <b>Estimado contribuyente, Configura estos datos para que puedas iniciar el ambiente de operación</b>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_id"> <b>(*) Identificador del software</b></label><br>
                    <input type="name" name="invele_software_id" style="width: 100% !important;" id="invele_software_id"
                           required value="@if($software != null){{$software->identifier}}@endif">
                </div>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_ping"> <b>(*) Pin del software</b></label><br>
                    <input type="name" name="invele_software_ping" id="invele_software_ping" required
                           value="@if($software != null){{$software->pin}}@endif">
                </div>
                <br>
                <div class="inventory-caja-3-label">
                    <label for="invele_software_url"> <b>(*) Url producción</b></label><br>
                    <textarea type="name" name="invele_software_url"
                              id="invele_software_url">@if($software != null){{$software->url}}@endif</textarea>
                </div>
                <div class="inventory-caja-3-label">
                    <div>
                        <span class="btn-ghost secundary round load_invoices_complete_deudores invele_production_api"> <span
                                    href="#" class="">PASAR A PRODUCCION</span></span>
                    </div>
                </div>

                <hr>
                <b style="color:orange;">Configura estos datos para que puedas iniciar tu set de pruebas y probar tus
                    facturas antes de enviarlas a la DIAN</b>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_tester_id"> <b style="color:orange;">(*) Identificador tester del
                            software</b></label><br>
                    <input type="name" name="invele_software_tester_id" style="width: 100% !important;"
                           id="invele_software_tester_id" required
                           value="@if($software != null){{$software->identifier_tester}}@endif">
                </div>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_pin_tester"> <b style="color:orange;">(*) Pin del software para
                            pruebas</b></label><br>
                    <input type="name" name="invele_software_pin_tester" id="invele_software_pin_tester" required
                           value="@if($software != null){{$software->pin_tester}}@endif">
                </div>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_isterter"> <b style="color:orange;">(*) Selecciona para informar al
                            sistema que usaras el modo tester</b></label><br>
                    <select name="invele_software_isterter" id="invele_software_isterter" required>

                        <option value="0" @if($software != null) @if($software->isterter == 0) selected @endif @endif>No
                            usar
                        </option>
                        <option value="1" @if($software != null) @if($software->isterter == 1) selected @endif @endif>Si
                            usar
                        </option>

                    </select>
                </div>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_tester"> <b style="color:orange;">(*) Código para pruebas
                            (setTesterDd)</b></label><br>
                    <textarea type="name" name="invele_software_tester"
                              id="invele_software_tester">@if($software != null){{$software->tester}}@endif</textarea>
                </div>

                <div class="inventory-caja-3-label">
                    <label for="invele_software_url_tester"> <b style="color:orange;">(*) Url de pruebas</b></label><br>
                    <textarea type="name" name="invele_software_url_tester"
                              id="invele_software_url_tester">@if($software != null){{$software->url_tester}}@endif</textarea>
                </div>

                <br>
                <button type="submit btn btn-secondary btn-save-sfotware" style="font-size: 11px">GUARDAR DATOS</button>

            </form>

        </div>

        <div class="tab-pane " id="tab_certificado_url" role="tabpanel"
             aria-labelledby="tab_certificado_">

            <form action="{{ route('guardarDetallesCertificadoFacturadora') }}" method="POST"
                  enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="inventory-caja-3-label">
                    <label for="invele_certificado_name"> <b>Certificado</b></label><br>
                    <input type="file" name="invele_certificado" id="invele_certificado_name"
                           accept="application/x-pkcs12" required>
                </div>

                <div class="inventory-caja-3-label">
                    <label for="invele_certificado_pass"> <b>Clave del certificado</b></label><br>
                    <input type="name" name="invele_certificado_pass" id="invele_certificado_pass" required>
                </div>

                <br>
                <button type="submit btn btn-secondary" style="font-size: 11px">GUARDAR DATOS</button>

            </form>

            <br>

            <div class="card">
                <div class="card-header"><b>Mis certificados</b></div>
                <div class="card-body">

                    <table class="table" id="table2">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Certificado</th>
                            <th>Clave</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($certificados as $certificado)
                            <tr>
                                <td>{{$certificado->id}}</td>
                                <td>{{$certificado->name}}</td>
                                <td>{{$certificado->password}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="tab_resolucion_url" role="tabpanel"
             aria-labelledby="tab_resolucion_">

            <div class="card">

                <div class="card-header">
                    <h3><b>RESOLUCIONES ELECTRÓNICA</b></h3>
                </div>

                <div class="card-body" style="font-size: 11px !important;">

                    <form action="{{ route('crearResolucionFacturacionElectronicaUBL21') }}" method="POST">

                        {{ csrf_field() }}

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="resolucion_dian_empresa_electronica">Resolución Para (*)</label>
                            <select name="resolucion_dian_empresa_electronica"
                                    id="resolucion_dian_empresa_electronica">
                                <option value="{{session('UserCompany')->id}}">{{session('UserCompany')->nombre_empresa}}</option>
                            </select>
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="tipo_documento_dian_empresa_electronica">Tipo de documento</label>
                            <select name="tipo_documento_dian_empresa_electronica"
                                    id="tipo_documento_dian_empresa_electronica">
                                @foreach($tiposDocumentos as $documento)
                                    <option value="{{$documento->id}}">{{$documento->code}}
                                        - {{$documento->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="content_resoluction_notas_credit_debit">

                        </div>
                        <hr>
                        <h4>
                            Consultar numeraciones en la DIAN
                            <button type="button" class="btn btn-sm background_pos_naranja btn-query-numbering-rangge">
                                <span class="icon icon-search text-white"></span> Consultar
                            </button>
                        </h4>
                        <hr>

                        <div class="alert alerta-pos-info-sin-fondo div-alert-response-range"></div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="nro_resolucion_dian_electronica">Número de Autorización</label>
                            <input type="text"
                                   id="nro_resolucion_dian_electronica"
                                   name="nro_resolucion_dian_electronica">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="prefijo_electronica">Prefijo</label>
                            <input type="text" id="prefijo_electronica"
                                   name="prefijo_electronica">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="nro_proximo_documento">Próximo Documento</label>
                            <input type="number" min="1 nro_proximo_documento"
                                   id="nro_proximo_documento" name="nro_proximo_documento">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="nro_inicial_electronica">Número inicial</label>
                            <input type="number" min="1 nro_inicial_electronica"
                                   id="nro_inicial_electronica" name="nro_inicial_electronica">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="nro_final_electronica">Número final</label>
                            <input type="number" min="1 nro_final_electronica"
                                   id="nro_final_electronica" name="nro_final_electronica">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="fecha_autorizacion_electronicaresolucion">Fecha de Resolución</label>
                            <input type="date" id="fecha_autorizacion_electronicaresolucion"
                                   name="fecha_autorizacion_electronicaresolucion" value="now()">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="fecha_autorizacion_electronicadesde">Fecha Desde</label>
                            <input type="date" id="fecha_autorizacion_electronicadesde"
                                   name="fecha_autorizacion_electronicadesde">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="fecha_autorizacion_electronicahasta">Fecha Hasta</label>
                            <input type="date" id="fecha_autorizacion_electronicahasta"
                                   name="fecha_autorizacion_electronicahasta">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="clave_tecnica">Clave/Llave Técnica</label>
                            <input type="text" id="clave_tecnica"
                                   name="clave_tecnica">
                        </div>

                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="preferida_pos">Preferida</label>
                            <div>
                                <label for="isPreferredYesPOS">Si</label>
                                <input type='checkbox' class='_isChecked' name="checkPreferredElectronica"
                                       onclick="onlyOnePosElectronica(this)" id="isPreferredYesPOS">
                                <label for="isPreferredNoPOS">No</label>
                                <input type='checkbox' class='_isChecked' name="checkPreferredElectronica"
                                       onclick="onlyOnePosElectronica(this)" checked id="isPreferredNoPOS"><span
                                        class='_check_shopwater' style='height: 12px; width: 12px;'></span>
                            </div>
                        </div>
                        <div class="contenedor-div-informarcion-resolucion-de-facturacion">
                            <label for="preferida_pos">Observaciones</label>
                            <div class="mb-3">
                            <textarea class="form-control" id="textObservations" name="textObservations" rows="3"></textarea>
                            </div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary" style="font-size: 11px">GUARDAR DATOS</button>
                    </form>

                </div>

            </div>
            <br>
            <div class="div-contenedor-div-informarcion-resolucion-de-facturacion-table">

                <div class="alerta-pos-info-sin-fondo">
                    <b>Importante</b><br>
                    <ul>
                        <li>Solo puedes tener una resolucion activa</li>
                        <li>Si vas a enviar documentos a tu set de <strong>Pruebas</strong> debes activar dicha
                            resolucion de pruebas
                        </li>
                        <li>Si vas a enviar documentos a tu set de <strong>Operacion</strong> debes activar dicha
                            resolucion de produccion
                        </li>
                        <li>recuerda tambien ir al <strong>TAB</strong> de <strong>Datos empresa</strong> y en poner el
                            estado de envio de documentos segun baya a ser tu proceso <strong>PRODUCCION</strong> y
                            <strong>PRUEBAS</strong></li>
                        <li>Ten presente que la DIAN valida cada uno de los datos de todos los tabs que configures, y el
                            tab de <strong>Resolucion Electronica</strong> no es la ecepcion
                        </li>
                        <li>Los datos para configurar tu set de pruebas son proporcionados todos en el anexo pdf que te
                            genera la DIAN
                        </li>
                        <li>La DIAN te provee casi todos los datos para configurar una Resolucion ELctronica para
                            OPERACION pero no te brinda LA CLAVE TECNICA, asi que nosotros te la brindamos si presionas
                            clic en el boton de CONSULTAR
                        </li>
                    </ul>
                </div>

                <table class="table history-service-inventory-table" id="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">RESOLUCIÓN</th>
                        <th scope="col">PREFIJO</th>
                        <th scope="col">INICIAL</th>
                        <th scope="col">ACTUAL</th>
                        <th scope="col">FINAL</th>
                        <th scope="col">DESDE</th>
                        <th scope="col">HASTA</th>
                        <th scope="col">CLAVE TEC</th>
                    </tr>
                    </thead>
                    <tbody class="body-list-resolutions">
                    @foreach($resoluciones as $resolucion)
                        <tr idd="{{$resolucion->id}}">
                            <td>{{$resolucion->id}}</td>
                            <td>
                                <input type="radio" name="_stateResolution" class="btn_change_stateResolution"
                                       @if($resolucion->estado == 1) checked @endif>
                            </td>
                            <td>{{$resolucion->nro_resolucion_dian}}</td>
                            <td>{{$resolucion->prefijo}}</td>
                            <td>{{$resolucion->nro_inicial}}</td>
                            <td>{{$resolucion->nro_actual}}</td>
                            <td>{{$resolucion->nro_final}}</td>
                            <td>{{$resolucion->date_from}}</td>
                            <td>{{$resolucion->date_to}}</td>
                            <td>{{$resolucion->technical_key}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>
</div>