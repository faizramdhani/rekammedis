function inputpoli(){  
  $('#dokterpoli').empty();
  var varpoli = $('#poli').val();
  // alert(poli);
  $.ajax({
      url:'Pasien/searchdokter',
      method: 'post',
      data: {kode1: varpoli},
      dataType: 'json',
      success: function(response){
        $.each(response,function(index,data){    
            $("#dokterpoli").append('<option value='+ data['kddokter'] +'>' + data['nmdokter'] + '</option>');    
        });
      }
  });
}

function asalpasienCheck() {
    if (document.getElementById('dirujukdari').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';
}

function riwayatpenyakitCheck() {
    if (document.getElementById('adapenyakit').checked) {
        document.getElementById('adapenyakityes').style.visibility = 'visible';
    }
    else document.getElementById('adapenyakityes').style.visibility = 'hidden';
}

function riwayatobatCheck() {
    if (document.getElementById('adaobat').checked) {
        document.getElementById('adaobatyes').style.visibility = 'visible';
    }
    else document.getElementById('adaobatyes').style.visibility = 'hidden';
}

function riwayatalergiCheck() {
    if (document.getElementById('adaalergi').checked) {
        document.getElementById('adaalergiyes').style.visibility = 'visible';
    }
    else document.getElementById('adaalergiyes').style.visibility = 'hidden';
}

function persepsipxCheck() {
    if (document.getElementById('persepsilainnya').checked) {
        document.getElementById('persepsipasienyes').style.visibility = 'visible';
    }else if(document.getElementById('hukuman').checked){
        document.getElementById('persepsipasienyes').style.visibility = 'hidden';
    }
    else document.getElementById('persepsipasienyes').style.visibility = 'hidden';
}

function ekspresipxCheck() {
    if (document.getElementById('ekspresilainnya').checked) {
        document.getElementById('ekspresipasienyes').style.visibility = 'visible';
    }else if(document.getElementById('murung').checked){
        document.getElementById('ekspresipasienyes').style.visibility = 'hidden';
    }
    else document.getElementById('ekspresipasienyes').style.visibility = 'hidden';
}