
function changeTxt(_this){
    if(_this.value == "1"){

        $('#orgnameid').html('College Name:');
        $('#orgAddrid').html('College Address:');
        $('#logoimgid').html('Upload College Logo:');
        $('#orgphoneid').html('College Phone Number:');
        $('#prolnoid').html('Roll/Admi No:');
        $('#rollid').html('Department:');
    }
    else{
        $('#orgnameid').html('School Name:');
        $('#orgAddrid').html('School Address:');
        $('#logoimgid').html('Upload School Logo:');
        $('#orgphoneid').html('School Phone Number:');
        $('#prolnoid').html('Roll/Admi No:');
        $('#rollid').html('Standard');
    }
}


function print1()
{
 $("#printid").hide();
 $("#editid").hide();
  window.print();
}
  
