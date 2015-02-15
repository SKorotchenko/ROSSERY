// JavaScript Document
$(document).on('ready',function(){



/* MAIN */
	$('#changePassForm').on('submit',function(e){
		e.preventDefault();
		var inputs = [document.getElementsByName('oldLogin').item(0),
					  document.getElementsByName('oldPass').item(0),
					  document.getElementsByName('newLogin').item(0),
					  document.getElementsByName('changePass').item(0),
					  document.getElementsByName('submitPass').item(0)];
		$.ajax({
			type: "POST",
			url: "php/models/mainPassChange.php",
			data: {
				oldLogin:	inputs[0].value,
				oldPass:	inputs[1].value,
				newLogin:	inputs[2].value,
				changePass:	inputs[3].value,
				submitPass:	inputs[4].value
			},
			success: function(res){
				res = JSON.parse(res);
				$('.status').removeClass('error').removeClass('apply').find('li').css('display','none');
				if(res[0][0] == 'apl'){
					$('.status').addClass('apply').find('li:eq(2)').css('display','');
					for(i=0; i<inputs.length;i++)
						inputs[i].value = '';
				}
				if(res[0][0] == 'err') {
					$('.status').addClass('error');
					if(res[0][1] == 'oldPass')
						$('.status li').eq(0).css('display','');
					if(res[0][1] == 'submitPass')
						$('.status li').eq(1).css('display','');
					if(res[1])
						$('.status li').eq(1).css('display','');
				}
			}
		});
	})

	$('#changeRestoreForm').on('submit',function(e){
		e.preventDefault();
		var inputs = [document.getElementsByName('restoreLogin').item(0),
					  document.getElementsByName('restorePass').item(0),
					  document.getElementsByName('newMail').item(0)];
		$.ajax({
			type: "POST",
			url: "php/models/mainMailChange.php",
			data: {
				oldLogin:	inputs[0].value,
				oldPass:	inputs[1].value,
				newMail:	inputs[2].value
			},
			success: function(res){
				res = JSON.parse(res);
				$('.status').removeClass('error').removeClass('apply').find('li').css('display','none');
				if(res[0][0] == 'apl'){
					$('.status').addClass('apply').find('li:eq(2)').css('display','');
					for(i=0; i<inputs.length;i++)
						inputs[i].value = '';
				}
				if(res[0][0] == 'err') {
					$('.status').addClass('error');
					$('.status li').eq(0).css('display','');
				}
			}
		});
	})

	$('.main input').on('change',function(){
		$('.status').removeClass('error').removeClass('apply');
	})



/* EDIT PAGE */
	$('#changeForm').on('submit',function(e){
		$('.status').removeClass('error');
		$('.status li').css('display','none');
		if($('#materialSelect option').length == 0){
			$('.status li:eq(0)').css('display','');
			$('.status').addClass('error');
			return false;
		}
	})

/* FILE MANAGER */
	$('.fileManagerOpen').on('click',function(){
		var id = $(this).parent('li').data('id');
		$('.popShadow#'+id).show();
	})
	
	$('.selectImgURLBlock.preview').on('click',function(e){
		var $img = $(this).find('img'),
			src = $img.attr('src'),
			id = 'preview';
		if($img.hasClass('folder'))
			return false;
		$('.inputList > li[data-id="' + id + '"] .imgSrc').val(src.substr(3));
        $('.popShadow#'+id).hide();
	})

    $('.selectImgURLBlock.dir').on('click',function(e){
        console.log('click work');
        var $dir = $(this).find('div'),
            $img = $(this).find('img')
            dirName = $($dir).html(),
            id = 'dir';
        console.log(dirName);
        if($img.hasClass('folder')) {
            $('.inputList > li[data-id="' + id + '"] .imgSrc').val(dirName/*substr(3)*/);
        }
        else{
            return false;
        }
     $('.popShadow#'+id).hide();
    })
	
	$('.closePopup').on('click',function(){
		$('.popShadow').data('id','').hide();
	})

})