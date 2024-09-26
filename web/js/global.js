$(document).ready(function(){

    $(document).on("keyup", "#filtro", function(){

         let buscar = $(this).val();
         let url = $(this).attr('data-url');
         //alert("Valor ingresado: " + buscar);

         $.ajax({
             url: url,
             data: "buscar="+ buscar,
             type: "POST",
             success:function(resp){
                if(resp==0){
                    $('table').addClass("d-none");
                    $('.info').removeClass("d-none");
                    $('.info').html("<h3>No se encontraron resultados</h3>");
                }else{
                    $('table').removeClass("d-none");
                    $('.info').addClass("d-none");
                    $('tbody').html(resp);
                }
             }
             
         })

    });
    $(document).on("click","#consultar",function(){

        let fechaInicio = $("#fechaInicio").val();
        let fechaFin = $("#fechaFin").val();
        //obtenemos valores de las fechas
        if(fechaInicio == "" || fechaFin == ""){
            swal({
                icon: "error",
                title: "Oops...",
                text: "Las fechas no pueden estar vacias"
              });
        }else{
            let url = $(this).attr('data-url');

            $.ajax({
                url: url,
                data: "fechaInicio="+fechaInicio+"&fechaFin="+fechaFin,
                type: "POST",
                success:function(resp){
                
                    if(resp==0){
                        $('table').addClass("d-none");
                        $('.info').removeClass("d-none");
                        $('.info').html("<h3>No se encontraron resultados</h3>");
                    }else{
                        $('table').removeClass("d-none");
                        $('.info').addClass("d-none");
                        $('tbody').html(resp);
                    }

                }
                
            });
        }
        
    });
    
    $("#myTable th").click(function() {
        var table = $(this).parents("table").eq(0);
        var rows = table.find("tr:gt(0)").toArray();
        var order = $("#orden").val();

        rows.sort(comparer($(this).index(), order));

        for (var i = 0; i < rows.length; i++) { table.append(rows[i]); }
    });

    function comparer(index, order) {
        return function(a, b) {
            var valA = getCellValue(a, index), valB = getCellValue(b, index);
            return $.isNumeric(valA) && $.isNumeric(valB) ? 
                (order === 'asc' ? valA - valB : valB - valA) :
                (order === 'asc' ? valA.localeCompare(valB) : valB.localeCompare(valA));
        };
    }

    function getCellValue(row, index) {
        return $(row).children("td").eq(index).text();
    }
    $("#orden").change(function() {
        $("#myTable th").each(function() {
            $(this).click(); // Simula el clic para reordenar la tabla
        });
    });

    const itemsPerPage = 10;
    const rows = $('#tableBody tr');
    const rowCount = rows.length;
    const pageCount = Math.ceil(rowCount / itemsPerPage);
    
    function renderTable(page) {
        rows.hide();
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        rows.slice(start, end).show();
    }

    function renderPagination() {
        $('#pagination').empty(); // Limpia el contenedor de paginación
        const paginationList = $('<ul class="pagination"></ul>');
        
        for (let i = 1; i <= pageCount; i++) {
            const pageItem = $(`<li class="page-item"><span class="page-link">${i}</span></li>`);
            pageItem.click(function() {
                renderTable(i);
                $('.page-item').removeClass('active'); // Elimina la clase active de todos
                $(this).addClass('active'); // Agrega la clase active al elemento clicado
            });
            paginationList.append(pageItem);
        }
        
        $('#pagination').append(paginationList);
    }

    renderTable(1);  // Inicializa mostrando la primera página
    renderPagination();
})