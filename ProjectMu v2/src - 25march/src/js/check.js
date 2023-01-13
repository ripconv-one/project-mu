 $(function(){ 
      $("#patientsearch").on('click', function(event){ 
      event.preventDefault();
        var patid = $("#patid").val();
        var docid = $("#docid").val();
        var hospid = $("#hospid").val();
        var dataString = { 'pid': patid };
        console.log(dataString);
      $.ajax({ 
        method: "GET",
        data: dataString,
        url: "patientsearch.php",
      }).done(function(data) { 
           var result = JSON.parse(data);
           $("#Pname").val(result[0].name);
           $("#Page").val(result[0].age);
           $("#Pgender").val(result[0].gender);
           $("#Paddress").val(result[0].address);
           $("#Pphone").val(result[0].phone);
           $("#pid").val(patid);
           $("#did").val(docid);
           $("#hid").val(hospid);

         });  
       });  
    }); 

     

 
 $(function(){   
    $("#add").on('click', function(event){
        var patid = $("#patid").val();
        var symptom = $("#symptom").val();
        var diagnosis = $("#diagnosis").val();
        var treatment = $("#treatment").val();
        var medicine = $("#medicine").val();
        var blockno = $("#blockno").val();
        var insertion = { 'pid': patid,'symptom': symptom,'diagnosis': diagnosis,'treatment': treatment,'medicine': medicine,'blockno': blockno };
      $.ajax({ 
        method: "POST",
        data: insertion,
        url: "bigtableinsert.php",
      }).done(function(data) { 
           console.log(data);
           });
       }); 
   });