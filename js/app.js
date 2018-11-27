$('.be-toggle-left-sidebar').on('click', function(){

    var classToggle      = 'be-collapsible-sidebar-collapsed',
        $sideCollapsible = $('.be-collapsible-sidebar');

    if ( $sideCollapsible.hasClass(classToggle) )
    {
        $sideCollapsible.removeClass(classToggle);
    }
    else
    {
        $sideCollapsible.addClass(classToggle);
    }
});

$('.left-sidebar-toggle').on('click', function(){
    var classToggle = 'open',
        $menuMobile = $('.left-sidebar-spacer');

    if ( $menuMobile.hasClass(classToggle) )
    {
        $menuMobile.removeClass(classToggle)
        $(this).removeClass(classToggle)
    }
    else
    {
        $menuMobile.addClass(classToggle)
        $(this).addClass(classToggle)
    }

})

$(document).ready(function(){
    $('.datatables').dataTable({
        pageLength : 7,
        dom        : "<'row be-datatable-body'<'col-sm-12'tr>>" +
                     "<'row be-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
        "columnDefs" : [{
            "targets"   : 'no-sort',
            "orderable" : false
        }]
    });

    $('#buscar_btn').on('click', function(){
        $.ajax({
            type: 'POST',
            url: 'buscar.php',
            data: $('#form-buscar').serialize(),
            success: function(data){
                $('#result').html(data)
            }
        });

        return false;
    });
});
