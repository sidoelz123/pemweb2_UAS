@include('partials/datatable')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   
    $(document).ready(function(){
        refreshTable();
    })

    function refreshTable(){
        
        $.ajax({
             url: "/api/get-data",
             type: "GET",
             cache: false,
             success: function(resp) {
                var data = resp;
                var result = "";
                let no = 1
                for(i=0; i<data.length; i++){
                    result +=
                    "<tr>" +
                    "<td>" +
                     no++ +
                    "</td>" +
                    "<td>" +
                    data[i].number_mail +
                    "</td>" +
                    "<td>" +
                    data[i].date +
                    "</td>" +
                    "<td>" +
                    data[i].title +
                    "</td>" +
                    '<td> <a data-bs-toggle="modal" data-bs-target="#myModal" id="update" fid = "' +
                    data[i].id +
                    '"><i class=" btn bi bi-pen text-primary"></i></a>'  +  '<a  id="delete" fid = "' +
                    data[i].id +
                    '"><i class="btn bi bi-trash3 text-danger"></i></a> </td > ' +
                    "</tr>";
                }
                $('#isi').html(result);
            }
        });
    }
    

        $(document).on('click', '#submit', function() {
        var data = new Object();
        data.number_mail = $('#number_mail').val();
        data.date = $('#date').val();
        data.title = $('#title').val();
        $.post('/api/create-data',data, function(resp) {
            if(resp == "Ok") {
                 window.location.href = "/";
                
            }
        });
    });


    $(document).on('click','#update',function(){
        $.get('/api/update-data/' + $(this).attr('fid'),function(resp){
            $('#myModal').modal('show');
            $('#id_update').val(resp.id);
            $('#number_mail').val(resp.number_mail);
            $('#date').val(resp.date);
            $('#title').val(resp.title);
        });
    });

    $(document).on('click', '#submit_update', function() {
        var data_update = new Object();
        data_update.id = $('#id_update').val();
        data_update.number_mail = $('#number_mail').val();
        data_update.date = $('#date').val();
        data_update.title = $('#title').val();
        $.post('/api/updated/'+ data_update.id,data_update, function(resp) {
            if(resp == "Ok") {
                $('#myModal').modal('hide');
                location.reload();
            }
        });
    });


    $(document).on("click", "#delete", function() {
        if (confirm("Are you sure ?") == true) {
                $.ajax({
                    url:"/api/delete-data/" + $(this).attr("fid"),
                    type: "GET", 
                    success: function(resp) {
                        console.log(resp);
                        
                        respon = resp;
                        
                        if(respon == "Ok") {
                            refreshTable();
                        } else { 
                            alert("Data gagal terhapus");
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
        }
    });
        
        
</script>