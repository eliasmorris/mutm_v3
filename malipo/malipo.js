//excute if user select little source from dropp menu
function sendtoCart(){
	// var myVar = myVar;
  var myVar = document.getElementById('ltsid').value;
	var ltsQty = document.getElementById('ltsQty').value;

  if (ltsQty <= 0) {
    alert('Samahani! Kiwango/Idadi Uliyoingiza sio sahihi.');
  }else{
    $.ajax({
      url:"getSessions.php", //CODE TO GET REG NAME
      type:"POST",
      data:{id:myVar, ltsQty:ltsQty}, //ELEMENT ID WHERE I GET VALUE
        success:function(data){
          // alert(data)
        // $("#mm").html(data); //WHERE RESULT WILL BE DISPLAYED
        // window.location="../malipo/"; //reload page
        if (data == 'isCondition') {
          //allow to insert qty
          document.getElementById('ltsQty').readOnly = false;
          document.getElementById('ltsQty').value = 1;
          document.getElementById('saveQtyBtn').style.display = 'inline';
          document.getElementById('ujumbe').style.display = 'inline';
          document.getElementById('idadiKiasi').innerHTML = 'Idadi';
          document.getElementById('ujumbe').innerHTML = 'Jaza Idadi na Ubofye kitufe cha save kuhifadhi huduma uliyochagua';
        }else if(data == 'setPrice'){
          //allow to insert amount
          document.getElementById('ltsQty').readOnly = false;
          document.getElementById('ltsQty').value = 0;
          document.getElementById('saveQtyBtn').style.display = 'inline';
          document.getElementById('ujumbe').style.display = 'inline';
          document.getElementById('idadiKiasi').innerHTML = 'Kiasi (TZS)';
          document.getElementById('ujumbe').innerHTML = 'Jaza Kiasi na Ubofye kitufe cha save kuhifadhi huduma uliyochagua';
        }else{
          //reload table only
          $( "#malipoTable" ).load( "index.php #malipoTable" );
          document.getElementById('ltsQty').readOnly = true;
          document.getElementById('ltsQty').value = 1;
          document.getElementById('idadiKiasi').innerHTML = 'Idadi';
          document.getElementById('ujumbe').innerHTML = 'Jaza Idadi na Ubofye kitufe cha save kuhifadhi huduma uliyochagua';
          document.getElementById('saveQtyBtn').style.display = 'none';
          document.getElementById('ujumbe').style.display = 'none';
          // $("#chanzoKidogoDiv").html(data); //WHERE RESULT WILL BE DISPLAYED
        }
        
      }
  });
  }

  // deleteBills1(myVar);  //****uncomment to allow only single bill***

}


//save button is clicked after insert qty
function sendtoCart2(){
  // var myVar = myVar;
  var myVar = document.getElementById('ltsid').value;
  var ltsQty = document.getElementById('ltsQty').value;
  var chkIdadiKiasi = document.getElementById('idadiKiasi').innerHTML;

  if (ltsQty <= 0) {
    alert('Samahani! Kiwango/Idadi Uliyoingiza sio sahihi.');
  }else{
    $.ajax({
      url:"getSessions.php", //CODE TO GET REG NAME
      type:"POST",
      data:{id:myVar, ltsQty:ltsQty, noCondition:'yes', chkIdadiKiasi:chkIdadiKiasi}, //ELEMENT ID WHERE I GET VALUE
        success:function(data){
        // $("#mm").html(data); //WHERE RESULT WILL BE DISPLAYED
        // window.location="../malipo/"; //reload page
        //reload table only
        $( "#malipoTable" ).load( "index.php #malipoTable" );
        document.getElementById('ltsQty').readOnly =true;
        document.getElementById('ltsQty').value =1;
        document.getElementById('saveQtyBtn').style.display = 'none';
        document.getElementById('ujumbe').style.display = 'none';
        // $("#chanzoKidogoDiv").html(data); //WHERE RESULT WILL BE DISPLAYED
        
      }
    });
  }

}


// delete bills session

function deleteBills1(myVar){
  var myVar = myVar;
    // alert('success');
    $.ajax({
      url:"clearBills.php", //CODE TO GET REG NAME
      type:"POST",
      data:{id:myVar}, //ELEMENT ID WHERE I GET VALUE
      success:function(data){
        if (data == 'success') {
          // alert('Bili imefutwa');
          $( "#malipoTable" ).load( "index.php #malipoTable" );
          // window.location.reload();
        }
        // else{
        //   alert('Samahani! Bili imeshindwa kufutwa. Jaribu tena');
        // }

      }
    });
}

function deleteBills(myVar){
  var myVar = myVar;
  // var myVar = id;
  var c = confirm("Hakika unataka kufuta bili?");

  if(c){
    // alert('success');
    $.ajax({
      url:"clearBills.php", //CODE TO GET REG NAME
      type:"POST",
      data:{id:myVar}, //ELEMENT ID WHERE I GET VALUE
      success:function(data){
        if (data == 'success') {
          alert('Bili imefutwa');
          $( "#malipoTable" ).load( "index.php #malipoTable" );
          // window.location.reload();
        }else{
          alert('Samahani! Bili imeshindwa kufutwa. Jaribu tena');
        }

      }
    });
  }else{

  }
}


function deletesingleBills(myVar){
  var myVar = myVar;
  // var myVar = id;
  var c = confirm("Hakika unataka kufuta bili?");

  if(c){
    // alert('success');
    $.ajax({
      url:"clearSingleBills.php", //CODE TO GET REG NAME
      type:"POST",
      data:{id:myVar}, //ELEMENT ID WHERE I GET VALUE
      success:function(data){
       // alert(data)
        if (data == 'success') {
          alert('Bili imefutwa');
          $( "#malipoTable" ).load( "index.php #malipoTable" );
          // window.location.reload();
        }else{
          alert('Samahani! Bili imeshindwa kufutwa. Jaribu tena');
        }

      }
    });
  }else{

  }
}

var form = document.getElementById('cnNoForm');
form.addEventListener('submit', function(e){

  //e.preventDefault(); // dont remove modal if success

  var fullName = document.getElementById('fullName').value;
  var email = document.getElementById('email').value;
  var payerIdentificationNumber = document.getElementById('payerIdentificationNumber').value;
  var phoneNumber = document.getElementById('phoneNumber').value;
  var ltsid = document.getElementById('ltsid').value;
  var sumT = document.getElementById('sum').value;
  
  alert(phoneNumber);

  })

  //get email and phone number
function displayinfo() {
  $.ajax({
    url:"gatemailphone.php", //CODE TO GET REG NAME
    type:"POST",
    data:{fullname:$('#fullName').val()}, //ELEMENT ID WHERE I GET VALUE
      success:function(data){
      $("#otherInfoDiv").html(data); //WHERE RESULT WILL BE DISPLAYED
      

      $(function () {
        bsCustomFileInput.init();
      });
      
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2(
            {
          theme: 'bootstrap4'
        })

        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })

      })
      
    }
  });
}