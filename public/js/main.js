const { data } = require("autoprefixer");

var id;
function lunch(i){
    id=i
    $('#delete').modal('show');
}
function confirm(){
    
 
    $.ajax({
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
        url: '/delete',
        data:{
            id:id
        },
        method:"get",
        success:function(response){
            location.reload();
        }
    });
}
