function inputpoli(){  
  $('#dokterpoli').empty();
  var varpoli = $('#poli').val();
  // alert(poli);
  $.ajax({
      url:'pasien/searchdokter',
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