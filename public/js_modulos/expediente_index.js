$(function ($) {
    $.ajaxSetup({
        headers: { "X-CSRF-Token": $("meta[name=csrf-token]").attr("content") },
    });

    /**bootstrap table del grid de expediente */
    const $gridExpediente = $("#gridExpediente");

    $gridExpediente.bootstrapTable({
      url: get_expediente,
      classes: 'table-striped',
      method: 'post',
      contentType: 'application/x-www-form-urlencoded',
      locale: 'es-MX',
      pagination: true,
      pageSize: 10,
      detailView: true,
      columns: [
        {
          field: 'id',
          visible: false,
        },
        {
          field: 'name',
          title: 'Cliente',
        },
        {
          field: 'code_user',
          title: 'Codigo Usuario',
        },
        {
          field: 'cedicion',
          title: 'Acciones',
          formatter: 'accionesFormatter',
        },
      ],
      onExpandRow: async (index, row, $detail) => {
        const $table = $detail.html('<table class="table table-striped table-bordered" cellspacing="0"></table>').find('table');
        await expandTable(row, $table);
      },
    });

});



function verExpediente(id) {
    console.log(id, window.url);
    $.fancybox.open({
        src: "/pdf/expediente/" + id + "/",
        type: "iframe",
        iframe: {
            css: {
                height: "100%",
                width: "90%",
            },
        },
        //baseClass: "fancybox-custom-layout",
        infobar: true,
        touch: {
            vertical: false,
        },
        buttons: ["close"],
        animationEffect: "fade",
        transitionEffect: "fade",
        preventCaptionOverlap: false,
        idleTime: false,
        gutter: 0,
        // Customize caption area
        caption: function (instance) {
            return "";
        },
    });
}
function verFotos(id) {
    console.log(id, window.url);
    $.fancybox.open({
        src: "/fotos/pdf/expediente/" + id + "/",
        type: "iframe",
        iframe: {
            css: {
                height: "100%",
                width: "90%",
            },
        },
        //baseClass: "fancybox-custom-layout",
        infobar: true,
        touch: {
            vertical: false,
        },
        buttons: ["close"],
        animationEffect: "fade",
        transitionEffect: "fade",
        preventCaptionOverlap: false,
        idleTime: false,
        gutter: 0,
        // Customize caption area
        caption: function (instance) {
            return "";
        },
    });
}

function editarVista(id) {
    console.log(id);
    window.open("vista/modificar/" + id, "_self");
}
function expandTable(row, $detail) {
    console.log(row, "--", $detail);
    $detail.bootstrapTable({
        url: get_record,
        method: "post",
        locale: 'es-MX',
        contentType: "application/x-www-form-urlencoded",
        queryParams: function (p) {
            return {
                user_id: row.id,
                code_user: row.code_user,
            };
        },
        detailView: true,
        icons: {
            detailOpen: "fas fa-plus",
            detailClose: "fas fa-minus",
        },
        pagination: true,
        pageSize: 10,
        columns: [
            {
                field: "id",
                title: "id",

                visible: false,
            },
            {
                field: "numero_control",
                title: "Numero Expediente",
            },
            {
                field: "cedicion",
                title: "Acciones",
                formatter: "editFormatter",
            },
        ],
        onLoadSuccess: function (data) {
            $detail.bootstrapTable("hideLoading");
        },

    });
    $detail.bootstrapTable("showLoading");
    $detail.bootstrapTable("refresh");
}
function editFormatter(value, row) {
    console.log(row);
    let html = "";

    html +=
        '<a rel="tooltip" title="Ver Expediente" class="btn btn-link btn-primary table-action view" href="javascript:void(0)" onclick="verExpediente(' +
        row.id +
        ')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/></svg></a>&nbsp;';
    html +=
        '<a rel="tooltip" title="Ver Expediente" class="btn btn-link btn-primary table-action view" href="javascript:void(0)" onclick="verFotos(' +
        row.id +
        ')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-image-fill" viewBox="0 0 16 16"><path d="M4 0h8a2 2 0 0 1 2 2v8.293l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2zm4.002 5.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/><path d="M10.564 8.27 14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/></svg></a>&nbsp;';
    return html;
}
function accionesFormatter(value, row) {
    let html = "";
    console.log(row);
    html +=
        '<a rel="tooltip" title="Nuevo Expediente" class="btn btn-link btn-primary table-action view" href="javascript:void(0)" onclick="editarVista(' +
        row.id +
        ')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16"><path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/></svg></a>&nbsp;';
    return html;
}

