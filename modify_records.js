 function edit_row(id)
{
 var plot_type=document.getElementById("plot_type_val"+id).innerHTML;
 var address=document.getElementById("address_val"+id).innerHTML;
 var monthly_rent=document.getElementById("monthly_rent_val"+id).innerHTML;
 var lease_availability=document.getElementById("lease_availability_val"+id).innerHTML;
 var forsale=document.getElementById("forsale_val"+id).innerHTML;
 

 document.getElementById("plot_type_val"+id).innerHTML="<input type='text' id='plot_type_text"+id+"' value='"+plot_type+"'>";
 document.getElementById("address_val"+id).innerHTML="<input type='text' id='address_text"+id+"' value='"+address+"'>";
  document.getElementById("monthly_rent_val"+id).innerHTML="<input type='text' id='monthly_rent_text"+id+"' value='"+monthly_rent+"'>";
 document.getElementById("lease_availability_val"+id).innerHTML="<input type='text' id='lease_availability_text"+id+"' value='"+lease_availability+"'>";
  document.getElementById("forsale_val"+id).innerHTML="<input type='text' id='forsale_text"+id+"' value='"+forsale+"'>";
 
	
 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
 var plot_type=document.getElementById("plot_type_text"+id).value;
 var address=document.getElementById("address_text"+id).value;
 var monthly_rent=document.getElementById("monthly_rent_text"+id).value;
 var lease_availability=document.getElementById("lease_availability_text"+id).value;
 var forsale=document.getElementById("forsale_text"+id).value;
  
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   plot_type_val:plot_type,
   address_val:address,
     monthly_rent_val:monthly_rent,
   lease_availability_val:lease_availability,
     forsale_val:forsale
   
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("plot_type_val"+id).innerHTML=plot_type;
    document.getElementById("address_val"+id).innerHTML=address;
	  document.getElementById("monthly_rent_val"+id).innerHTML=monthly_rent;
    document.getElementById("lease_availability_val"+id).innerHTML=lease_availability;
	  document.getElementById("forsale_val"+id).innerHTML=forsale; 
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
    reload();
    }
  }

 });
}

function delete_row(id)
{
 var ans = confirm('do you really want to delete?');
 if (ans)
 {
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row).reload();
   }
  }
 });
}

}
function insert_row()
{
var plot_type=document.getElementById("new_plot_type").value;
 var address=document.getElementById("new_address").value;
  var monthly_rent=document.getElementById("new_monthly_rent").value;
  var lease_availability=document.getElementById("new_lease_availability").value;
   var forsale=document.getElementById("new_forsale").value;
 
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   insert_row:'insert_row',
   plot_type_val:plot_type,
   address_val:address,
   monthly_rent_val:monthly_rent,
   lease_availability_val:lease_availability,
   forsale_val:forsale
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("plot_table");
    var table_len=(table.rows.length)-1;
 
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='plot_type_val"+id+"'>"+plot_type+"</td><td id='address_val"+id+"'>"+address+"</td><td id='monthly_rent_val"+id+"'>"+monthly_rent+"</td><td id='lease_availability_val"+id+"'>"+lease_availability+"</td><td id='forsale_val"+id+"'>"+forsale+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

document.getElementById("new_plot_type").value="";
document.getElementById("new_address").value="";
document.getElementById("new_monthly_rent").value="";

document.getElementById("new_lease_availability").value="";
document.getElementById("new_forsale").value="";
  
   }
  }
 });
 
 }

function reload()
{
 
    location.reload();
     
 
}