function inputpoli(){  
  $('#dokterpoli').empty();
  var varpoli = $('#poli').val();
  // alert(poli);
  $.ajax({
      url:'./searchdokter',
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

function bicaranormalCheck() {
    if (document.getElementById('bicaranormal').checked) {
        document.getElementById('bicaranormal').style.visibility = 'visible';
    }
    else document.getElementById('bicaranormalyes').style.visibility = 'hidden';
}

function kepalaleherCheck() {
    if (document.getElementById('kepalalainnya').checked) {
        document.getElementById('kepala_leherlainnya').style.visibility = 'visible';
    }
    else document.getElementById('kepala_leherlainnya').style.visibility = 'hidden';
}

function corCheck() {
    if (document.getElementById('corlainnya').checked) {
        document.getElementById('cor2lainnya').style.visibility = 'visible';
    }
    else document.getElementById('cor2lainnya').style.visibility = 'hidden';
}

function pulmoCheck() {
    if (document.getElementById('pulmolainnya').checked) {
        document.getElementById('pulmo2lainnya').style.visibility = 'visible';
    }
    else document.getElementById('pulmo2lainnya').style.visibility = 'hidden';
}

function abdomenCheck() {
    if (document.getElementById('hepar').checked) {
        document.getElementById('hepartext').style.visibility = 'visible';
    }else if(document.getElementById('bisingusus').checked){
        document.getElementById('bisingusus').style.visibility = 'hidden';
    }
    else document.getElementById('ekspresipasienyes').style.visibility = 'hidden';
}

function ekstremitasCheck() {
    if (document.getElementById('akral').checked) {
        document.getElementById('ekstremitaslainnya').style.visibility = 'visible';
    }
    else document.getElementById('ekstremitaslainnya').style.visibility = 'hidden';
}

function alatkelaminCheck() {
    if (document.getElementById('abnormalkelamin').checked) {
        document.getElementById('alatkelaminlainnya').style.visibility = 'visible';
    }
    else document.getElementById('alatkelaminlainnya').style.visibility = 'hidden';
}