var txt1;
var sp1;

flag=false;
flag1=false;
flag2=false;
flag3=false;
flag4=false;
var pat= /[a-zA-Z]{6,10}/;
var pat1= /[0-9]/;
    function checkAll(){
        return flag1&&flag2&&flag3&&flag4;
    }
   
$(function(){
	$("#add").click(function(event) {
		event.preventDefault();
		if(checkAll())
		{
			window.location.assign("home.php");
		}
		else
		{
			console.log('sdfh');
		}

	});
	
	//JQuery
       $("#txt1").blur(function(event) {
            if(this.value.match(pat))
                {   
                	$('#sp5').empty();
                    $('#sp5').css('color', 'red');
                    
                    flag1=true;
                }
            else
                {
                    $('#sp5').css('color', 'red');
                    $('#sp5').text('OnlyCharacters[6-10]');
                    $('#txt1').focus();
                    flag1=false;

                }
        });
        $("#txt2").blur(function(event) {
             if(this.value.match(pat1))
                {   
                	$('#txt2').empty();
                    $('#sp2').css('color', 'red');
                    // $('#sp2').text('Done');
                    flag2=true;
                }
            else
                {
                    $('#sp2').css('color', 'red');
                    $('#sp2').text('OnlyNumbers');
                    $('#txt2').focus();
                    flag2=false;
                }
        });
        $("#txt3").blur(function(event) {
            if(this.value.match(pat1))
                {   
                	$('#txt3').empty();
                    $('#sp3').css('color', 'red');
                    // $('#sp3').text('Done');
                    flag3=true;
                }
            else
                {
                    $('#sp3').css('color', 'red');
                    $('#sp3').text('OnlyNumbers');
                    $('#txt3').focus();
                    flag3=false;
                }
                
        });
        $("#txt4").blur(function(event) {
            if(this.value.match(pat1))
                {   
                	$('#txt4').empty();
                    $('#sp4').css('color', 'red');
                    // $('#sp4').text('Done');
                    flag4=true;
                }
            else
                {
                    $('#sp4').css('color', 'red');
                    $('#sp4').text('OnlyNumbers');
                    $('#txt4').focus();
                    flag4=false;
                }
        });
        $("#insert").blur(function(event) {
            if(this.value.match(pat))
                {   
                	$('#check').empty();
                    $('#check').css('color', 'red');
                    // $('#check').text('Done');
                    flag=true;
                }
            else
                {
                    $('#check').css('color', 'red');
                    $('#check').text('OnlyNumbers');
                    $('#insert').focus();
                    flag=false;
                }
        });
       //Ajaaaaaaaaaaaaaaaax
	txt1 = $('#txt1');
 	sp1 = $('#sp1');
	txt1.on('blur', function(event) {
		event.preventDefault();
		console.log('hi');
		var name={};
		$.ajax({
			url: 'CetegoriesValidationServer.php?product='+$(this).val(),
			type: 'POST',
			dataType: 'html',
			//data:name,
			success: function (response) {
					console.log(response);
				 if(response)
				 {
				 	sp1.empty();
					sp1.html("<b style='color:red'>Done</b>");
				}
				else
				{
					txt1.focus();
					sp1.html("<b style='color:red'>ExistedBefore</b>");
				}
			},
			error: function (error) {
				console.log(error);
			}
		});
			
	});
	$('#insert').on('blur', function(event) {
		event.preventDefault();
		console.log('hi');
		var name={};
		$.ajax({
			url: 'CetegoriesValidationServer.php?catName='+$(this).val(),
			type: 'POST',
			dataType: 'html',
			//data:name,
			success: function (response) {
					console.log(response);
				 if(response)
				 {
				 	$('#check1').empty();
					$('#check1').html("<b style='color:red'>Done</b>");
				}
				else
				{
					$('#insert').focus();
					$('#check1').html("<b style='color:red'>ExistedBefore</b>");
				}
			},
			error: function (error) {
				console.log(error);
			}
		});
			
	});
                             
});