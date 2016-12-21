var current=1;
var pdid;
function delWhat(pid){
pdid=pid;
//alert(pdid);
 $.post( 
             "delete_prod.php",
             { idforp: pdid },
             function(data) {
                $('#task').html(data);
             });
}