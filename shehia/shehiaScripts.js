var form = document.getElementById('addShehiaForm');
form.addEventListener('submit', function (e) {

  e.preventDefault(); // dont remove modal if success

  var distrct = document.getElementById('distrct').value;
  var shnam = document.getElementById('shnam').value;

  var publicIP = document.getElementById('publicIPa').value;
  var localIPa = document.getElementById('localIPa').value;

  fetch('https://cors-anywhere.herokuapp.com/http://102.223.7.135:6060/mutm/api/insertShehia', {
    //mode: 'no-cors',  // This disables CORS
    method: 'POST',
    body: JSON.stringify({ //change data into json format 
      // "businessid": businessid,
      'deptid': distrct,
      'shnam': shnam 

    }),
    headers: {
      "Content-Type": "application/json;charset= UTF-8"
    },
  }).then(function (response) {
    return response.json();
  }).then(function (data) {
    //console.log(data); //for testing only
    alert(data);
  })

  //SEND INTO LOG
  $.ajax({
    url: "insertIntoLog.php", //CODE TO GET REG NAME
    type: "POST",
    data: { shnam: shnam, act: 'insertLog' }, //ELEMENT ID WHERE I GET VALUE
    success: function (data) {
      if (data == 'success') {

        alert('Umefanikiwa shehia mpya');
        // $( "#listTable" ).load( "index.php #listTable" );
        window.location.load(); //refresh current page
      } else {
        alert(data);
        alert('Samahani shehia imeshindwa kusajiliwa! Jaribu tena');
      }
    }
  });

})


//update Leseni info
var form = document.getElementById('editLicensetypeForm');
form.addEventListener('submit', function (e) {

  //e.preventDefault(); // dont remove modal if success

  var ltid = document.getElementById('ltid').value;
  var ltypee = document.getElementById('ltypee').value;
  var pricee = document.getElementById('pricee').value;
 

  var publicIPu = document.getElementById('pubIPu').value;
  var localIPu = document.getElementById('locIPu').value;

  fetch(publicIPu + "mutm/api/updateLicense/" + ltid, {
    method: 'PUT',
    //mode: 'cors',  // This disables CORS
    headers: {
      "Content-Type": "application/json; charset= UTF-8"
    },
    body: JSON.stringify({
      //change data into json format
      "ltype": ltypee,
      "price": pricee,
      
    })

  }).then(function (response) {
    return response.json();
  }).then(function (data) {
    console.log(data); //for testing only
    //alert(data);
  })

  //SEND INTO LOG
  $.ajax({
    url: "insertIntoLog.php", //CODE TO GET REG NAME
    type: "POST",
    data: { ltype: ltypee, act: 'updateLog' }, //ELEMENT ID WHERE I GET VALUE
    success: function (data) {
      if (data == 'success') {
        alert('Taarifa za Aina ya Leseni zimebadilishwa kikamilifu');
        //window.location.load(); //refresh current page
        // $( "#listTable" ).load( "index.php #listTable" );
      } else {
        // alert('Samahani Taarifa za biashara zimeshindwa kubadilishwa! Jaribu tena');
        alert(data);
      }
    }
  });


})

//call edit license type modal function
$(document).on("click", ".open-editLicensetype", function (e) {

  e.preventDefault();

  var _self = $(this);

  var ltidd = _self.data('id');
  $("#ltid").val(ltidd);

  var ltype = _self.data('conf2');
  $("#ltypee").val(ltype);

  var price = _self.data('conf3');
  $("#pricee").val(price);
  

  $(_self.attr('href')).modal('show');
});

//delete License info function
function deleteLicenseinfo(lid, lnumber) {
  var lid = lid;
  var lnumber = lnumber;
  var c = confirm("Hakika unataka kufuta Leseni " + lnumber + "?");

  if (c) {
    fetch("http://102.223.7.135:8881/deleteInstitute/" + lid, {
      method: 'PUT',
      body: JSON.stringify({
        "status": 'inactive'
      }),
      headers: {
        "Content-Type": "application/json;charset= UTF-8"
      }
    }).then(function (response) {
      return response.json();
    }).then(function (data) {
      console.log(data);
    })

    //SEND INTO LOG
    $.ajax({
      url: "insertIntoLog.php", //CODE TO GET REG NAME
      type: "POST",
      data: { instname: instname, act: 'deleteLog' }, //ELEMENT ID WHERE I GET VALUE
      success: function (data) {
        if (data == 'success') {
          alert('Taasisi imefutwa kikamilifu');

          // $( "#listTable" ).load( "index.php #listTable" );
        } else {
          alert('Samahani, Taasisi imeshindwa kufutwa! Jaribu tena');
        }
      }
    });


  } else {
    //if not comfirm
  }
}


//call add new account into Institution modal function
$(document).on("click", ".open-addAccountNo", function (e) {

  e.preventDefault();

  var _self = $(this);

  var instituteid = _self.data('conf0');
  $("#instituteidacc").val(instituteid);

  var instcode = _self.data('conf2');
  $("#instcodeacc").val(instcode);

  var instname = _self.data('conf3');
  $("#instnameacc").val(instname);

  var insertAccount = _self.data('conf4'); //send insert query to the modal
  $("#insertAccount").val(insertAccount);


  $(_self.attr('href')).modal('show');
});


//call add POSinto Institution modal function
$(document).on("click", ".open-addPOS", function (e) {

  e.preventDefault();

  var _self = $(this);

  var instituteid = _self.data('conf0');
  $("#instituteidps").val(instituteid);

  var instcode = _self.data('conf2');
  $("#instcodeps").val(instcode);

  var instname = _self.data('conf3');
  $("#instnameps").val(instname);


  $(_self.attr('href')).modal('show');
});




