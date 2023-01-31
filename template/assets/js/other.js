inlineCheckbox11 = document.getElementById('inlineCheckbox11');
inlineCheckbox12 = document.getElementById('inlineCheckbox12');
inlineCheckbox13 = document.getElementById('inlineCheckbox13');
inlineCheckbox14 = document.getElementById('inlineCheckbox14');
// 
inlineCheckbox21 = document.getElementById('inlineCheckbox21');
inlineCheckbox22 = document.getElementById('inlineCheckbox22');
inlineCheckbox23 = document.getElementById('inlineCheckbox23');
inlineCheckbox24 = document.getElementById('inlineCheckbox24');
// 
inlineCheckbox31 = document.getElementById('inlineCheckbox31');
inlineCheckbox32 = document.getElementById('inlineCheckbox32');
inlineCheckbox33 = document.getElementById('inlineCheckbox33');
inlineCheckbox34 = document.getElementById('inlineCheckbox34');
// 
inlineCheckbox41 = document.getElementById('inlineCheckbox41');
inlineCheckbox42 = document.getElementById('inlineCheckbox42');
inlineCheckbox43 = document.getElementById('inlineCheckbox43');
inlineCheckbox44 = document.getElementById('inlineCheckbox44');
// 
inlineCheckbox51 = document.getElementById('inlineCheckbox51');
inlineCheckbox52 = document.getElementById('inlineCheckbox52');
inlineCheckbox53 = document.getElementById('inlineCheckbox53'); 
// 
function clear_label_red(){
    inlineCheckbox11.checked = false; inlineCheckbox21.checked = false; inlineCheckbox31.checked = false;  inlineCheckbox41.checked = false; inlineCheckbox51.checked = false;
}
function clear_label_yellow(){
    inlineCheckbox12.checked = false; inlineCheckbox22.checked = false; inlineCheckbox32.checked = false; inlineCheckbox42.checked = false; inlineCheckbox52.checked = false;
}
function clear_label_green(){
    inlineCheckbox13.checked = false; inlineCheckbox23.checked = false; inlineCheckbox33.checked = false; inlineCheckbox43.checked = false; inlineCheckbox53.checked = false;
}
function clear_label_black(){
    inlineCheckbox14.checked = false; inlineCheckbox24.checked = false; inlineCheckbox34.checked = false; inlineCheckbox44.checked = false; 
}
// 
const colors = Array.from(document.querySelectorAll('#color_triase')); 
colors.forEach(listItem => {
    const color = listItem.textContent.toUpperCase();
    listItem.addEventListener('click', (element) => {
        a = element.target;  
        triase_merah = document.getElementById('triase_value'); 
        // 
        // kondisi untuk semua label yang masih unchecked    
        // 
        if(a.value == "danger" ){
            colors[1].checked = false; colors[2].checked = false; colors[3].checked = false;
            clear_label_yellow(); clear_label_green(); clear_label_black();
            triase_merah.value = "danger";
            inlineCheckbox11.checked = true; inlineCheckbox21.checked = true; inlineCheckbox31.checked = true; inlineCheckbox41.checked = true; inlineCheckbox51.checked = true;
            document.getElementById('keadaan').value = inlineCheckbox11.value;
            document.getElementById('pernafasan').value = inlineCheckbox21.value;
            document.getElementById('nadi').value = inlineCheckbox31.value;
            document.getElementById('akral').value = inlineCheckbox41.value;
            document.getElementById('crt').value = inlineCheckbox51.value;
        } else if (a.value == "warning"){
            colors[0].checked = false; colors[2].checked = false; colors[3].checked = false;
            clear_label_red(); clear_label_green(); clear_label_black();
            triase_merah.value = "warning";
            inlineCheckbox12.checked = true; inlineCheckbox22.checked = true; inlineCheckbox32.checked = true; inlineCheckbox42.checked = true; inlineCheckbox52.checked = true;
            document.getElementById('keadaan').value = inlineCheckbox12.value;
            document.getElementById('pernafasan').value = inlineCheckbox22.value;
            document.getElementById('nadi').value = inlineCheckbox32.value;
            document.getElementById('akral').value = inlineCheckbox42.value;
            document.getElementById('crt').value = inlineCheckbox52.value;
        } else if (a.value == "success"){
            colors[0].checked = false; colors[1].checked = false; colors[3].checked = false;
            clear_label_red(); clear_label_yellow(); clear_label_black();
            triase_merah.value = "success";
            inlineCheckbox13.checked = true; inlineCheckbox23.checked = true; inlineCheckbox33.checked = true; inlineCheckbox43.checked = true; inlineCheckbox53.checked = true;
            document.getElementById('keadaan').value = inlineCheckbox13.value;
            document.getElementById('pernafasan').value = inlineCheckbox23.value;
            document.getElementById('nadi').value = inlineCheckbox33.value;
            document.getElementById('akral').value = inlineCheckbox43.value;
            document.getElementById('crt').value = inlineCheckbox53;
        } else if (a.value == "dark"){
            colors[0].checked = false; colors[1].checked = false; colors[2].checked = false;
            clear_label_red(); clear_label_yellow(); clear_label_green();
            triase_merah.value = "dark";
            inlineCheckbox14.checked = true; inlineCheckbox24.checked = true; inlineCheckbox34.checked = true; inlineCheckbox44.checked = true; 
            document.getElementById('keadaan').value = inlineCheckbox14.value;
            document.getElementById('pernafasan').value = inlineCheckbox24.value;
            document.getElementById('nadi').value = inlineCheckbox34.value;
            document.getElementById('akral').value = inlineCheckbox44.value; 
        }else if(a.checked == false && a.value == 'danger' && a.value =='warning' == a.value =='yellow' && a.value == 'dark '){
            clear_label_red(); clear_label_yellow();
            clear_label_green();
            clear_label_black();
        } 
    });
});
clear_triase = document.getElementById('clear_triase');
clear_triase.onclick = function () { clear_label_red(); clear_label_yellow(); clear_label_green(); clear_label_black(); }
const breathe1 = Array.from(document.querySelectorAll('#transport1'));
breathe1.forEach(listItem => {
    listItem.addEventListener('click', (element) => {
        a = element.target; 
        if (a.getAttribute('kode') == 1) {
            breathe1[1].checked = false; breathe1[2].checked = false; document.getElementById('mobilitas').value = a.value;
        }else if(a.getAttribute('kode') == 2){  breathe1[0].checked = false;  breathe1[2].checked = false; document.getElementById('mobilitas').value = a.value;
        }else if (a.getAttribute('kode') == 3) {  breathe1[0].checked = false;  breathe1[1].checked = false;  document.getElementById('mobilitas').value = a.value;
        }   
    });
});
// 
const rujukan1 = Array.from(document.querySelectorAll('#rujukan1'));
rujukan1.forEach(listItem => {
    listItem.addEventListener('click', (element) => { 
        if (rujukan1[0].checked == true) {
            rujukan1[1].checked = false;
            rujukan1[1].setAttribute('disabled','');
            document.getElementById('rujukan2_value').disabled = true;
            document.getElementById('rujukan2_value').readonly = true;
        } else if (rujukan1[0].checked == false) {
            rujukan1[0].checked = false; 
            rujukan1[1].removeAttribute('disabled');
            document.getElementById('rujukan2_value').removeAttribute('disabled'); 
            document.getElementById('rujukan2_value').removeAttribute('readonly');
        } 
        if(rujukan1[1].checked == true) {
            console.log(1);
            rujukan1[0].setAttribute('disabled','');
            rujukan1[0].checked = false;
            document.getElementById('rujukan1_value').disabled = true;
            document.getElementById('rujukan1_value').readonly = true;
        } else if (rujukan1[1].checked == false) {
            rujukan1[1].checked = false; 
            rujukan1[0].removeAttribute('disabled');
            document.getElementById('rujukan1_value').removeAttribute('disabled'); 
            document.getElementById('rujukan1_value').removeAttribute('readonly');
        } 
    });
});
// const tindakan = Array.from(document.querySelectorAll('#rujukan1'));