function deleteusers(){
    var userids = "";
    table = document.getElementById('kt_datatable_example');
    if(table){
        checked = table.querySelectorAll('input[type="checkbox"]:checked');
        if (checked.length > 0){
           
                checked.forEach(function(checkbox){
                    userids+= checkbox.value.trim() + "-";
                });
                dele(userids);
                checked.forEach(function(checkbox){
                    table.deleteRow(checkbox.closest('tr').rowIndex);
                });
             
        }
    }
    };
    function dele($delete) {

        $.ajax({
            url: '/admin/UserDelete/' + $delete,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                if (response.status == '1') {
                    alert(response.msg);
                    
                } else {
                    alert(response.msg);
                }
            }
        });
    }
if(document.getElementById('deleteuser'))
document.getElementById('deleteuser').addEventListener('click',deleteusers);