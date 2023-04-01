$(function(){

    $('#jstree').jstree({
        'core' : {
            'data' : nodes
        },
        "checkboxes": {
            "three_state": false
        },
        "plugins": ["checkbox"]
    }).on('changed.jstree', function(e, data) {
        var selectedNodes = $('#jstree').jstree('get_selected', true);
        var selectedIds = [];
        $.each(selectedNodes, function(index, selectedNode) {
            selectedIds.push(selectedNode.id);
        });
        $('#nodos_seleccionados').val(selectedIds.join(','));
    });
});




