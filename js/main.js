var product_file_count = 0;
var material_file_count = 0;
$(document).ready(function() {
	
	$('#choose_product_file').bind('click', function() {
		$('#product_file_'+product_file_count).trigger('click');
	});
	
	$('#product_file_'+product_file_count).bind('change', function() {
		var filename = $('#product_file_'+product_file_count).val().replace(/C:\\fakepath\\/i, '');
		$('#choose_file_name').text(filename);
	});
	
	$('#add_product_link').bind('click', function() {
		$('#product_description_'+product_file_count).val($('#product_desc').val());
		product_file_count++;
		$('#registration').append('<input style="display:none" type="file" name="product_file[]" id="product_file_'+product_file_count+'" />');
		$('#registration').append('<input style="display:none" type="hidden" name="product_description[]" id="product_description_'+product_file_count+'" />');
		$('#choose_file_name').text('');
		$('#product_desc').val('');
		$('#modal-2').removeClass('md-show');
	});
	
	$('#choose_material_file').bind('click', function() {
		$('#material_file_'+material_file_count).trigger('click');
	});
	
	$('#material_file_'+material_file_count).bind('change', function() {
		var filename = $('#material_file_'+material_file_count).val().replace(/C:\\fakepath\\/i, '');
		$('#choose_material_file_name').text(filename);
	});
	
	$('#add_material_link').bind('click', function() {
		$('#material_description_'+material_file_count).val($('#material_desc').val());
		$('#material_title_'+material_file_count).val($('#material_title').val());
		material_file_count++;
		$('#registration').append('<input style="display:none" type="file" name="material_file[]" id="material_file_'+material_file_count+'" />');
		$('#registration').append('<input style="display:none" type="hidden" name="material_description[]" id="material_description_'+material_file_count+'" />');
		$('#registration').append('<input style="display:none" type="hidden" name="material_title[]" id="material_title_'+material_file_count+'" />');
		$('#choose_material_file_name').text('');
		$('#material_desc').val('');
		$('#material_title').val('');
		$('#modal-3').removeClass('md-show');
	});
	
	$('#choose_banner_file').bind('click', function() {
		$('#banner_file').trigger('click');
	});
	
	// необходимо для вывода random-ных значений статистики
    // defferentLevel(); 
    deleteMaterial();
	deleteProduct ();
	editMaterial();
	$(".child_window").click(function() {
		window.close();
	})
	$("#quick-view").click(function() {
		var p_name = $(".registration-form input[name=name]").val();
		var p_subdomain = $(".registration-form input[name=subdomain]").val();
		var p_rubric = $(".registration-form #rubric").find('option:selected').text();
		var p_descr_short = $(".registration-form input[name=descr_short]").val();
		var p_descr_long = $(".registration-form textarea[name=descr_long]").val();
		var p_address = $(".registration-form input[name=address]").val();
		var p_email = $(".registration-form input[name=email]").val();
		var p_phone = $(".registration-form input[name=phone]").val();
		var p_site = $(".registration-form input[name=site]").val();
		var p_start_day = $(".registration-form select[name=start_day]").find('option:selected').text();
		var p_end_day = $(".registration-form select[name=end_day]").find('option:selected').text();
		var start_hour = $(".registration-form select[name=start_hour]").find('option:selected').text();
		var start_min = $(".registration-form select[name=start_min]").find('option:selected').text();
		var end_hour = $(".registration-form select[name=end_hour]").find('option:selected').text();
		var end_min = $(".registration-form select[name=end_min]").find('option:selected').text();
		window.open(
			"index.php?p=subdomain_preview&name="+p_name+
										"&subdomain="+p_subdomain+ 
										"&rubric="+p_rubric+
										"&descr_short="+p_descr_short+
										"&address="+p_address+
										"&email="+p_email+
										"&phone="+p_phone+
										"&site="+p_site+
										"&descr_long="+p_descr_long+
										"&start_day="+p_start_day+
										"&end_day="+p_end_day+
										"&start_hour="+start_hour+
										"&start_min="+start_min+
										"&end_hour="+end_hour+
										"&end_min="+end_min, 
			'_blank', 'location=yes,height=770,width=1020,scrollbars=yes,status=yes'
		);
	});
	// Отправка данных с формы регистрации
	$(".registration-buttons .submit").click(function() {
				$('<input>').attr({
		    type: 'hidden',
		    id: 'add_company',
		    name: 'add_company',
		    value: '1'
		}).appendTo('#registration');
		$("#registration").submit();
	})
	$(".registration-buttons .reset").click(function() {
		$("#registration").submit();
	})
	$(".edit-buttons .save").click(function() {
		$("#registration").submit();
	})
	$("#feedback .submit").click(function() {
		$("#feedback").submit();
	})
	$("#feedback .reset").click(function() {
    	$(this).closest('form').find("input[type=text], textarea").val("");
	})
	$(".send").click(function() {
		$("#compose").submit();
	})
	$("#leave-comment .yellow-button").click(function () {
		$("#leave-comment").submit();
	})
	$("#autorization-form .submit").click(function() {
		$("#autorization-form form").submit();
	})
	$("#lost-password .submit").click(function() {
		$("#lost-password").submit();
	})
	$("#add-company").click(function() {
		$("#registration").submit();
	})

	$("#per_page").change(function() {
		$("#company_per_page").submit();
	})

	$("#search_form .find").click(function() {
		$("#search_form").submit();
	})

	// Форма авторизации
	$(".unauthorized-enter").toggle(
      function () {
     	$('#autorization-form').addClass('visible');
      },
      function () {
        $('#autorization-form').removeClass('visible');
      }
    );
	// Вход в акаунт
	// $('#autorization-form .submit').live('click', function() {
	// 	$('.unauthorized').addClass('unvisible');
	// 	$('.authorized').addClass('visible');
	// });
	// Добавление логотипа
		$('.md-content .dz-default').live('click', function() {
		$('.md-content .choose-file').fadeOut(1000);
 
	}); 
	
	$('#modal-1 .yellow-button').live('click', function() {
	
		var	image =	$('#modal-1 .dz-details').html();
		var fileName = $('#modal-1 .dz-filename').html();
		if (image) {
		$('.upload_box_image').fadeOut(1).fadeIn(500).html(image);
		}
		$('#demo-upload').submit();
	}); 
	// Добавление товара
	/*var i = 0;*/
	$('#modal-2 .yellow-button').live('click', function() {
	
		var label = $('#modal-2 textarea').val();
		var	image =	$('#modal-2 .dz-details').html();
		var error = $('#modal-2 .material-error').html();
		if (label && image) {
		$('.product-unit:last').fadeOut(1).fadeIn(500).before('<div class="product-unit with-product"><div class="product-image"></div><span class="product-delete"><font>Удалить</font></span><label></label></div>');
		
		$('.with-product:last label').text(label);
		$('.product-unit .product-image').eq(-1).html(image);
		$('#modal-2 .material-error').fadeOut(150);
		// Добавить инпуты к основной форме
		/*$("#registration").append('<input type="hidden" name="tovar['+i+']" value="'+label+'" />' + image);
		i++;*/
		}
		else if (!error) {
			console.log(error);
			$('.choose-file').after('<div class="material-error">Заполните все поля!</div>');
		};
	}); 
	// Добавление файла и время добавления
	$('#modal-3 .yellow-button').live('click', function() {
	
		var label = $('#modal-3 input').val();
		var description = $('#modal-3 textarea').val();
		var	image =	$('#modal-3 .dz-details').html();
			f_time = new Date();
			f_year = f_time.getFullYear();
			f_month = f_time.getMonth();
			f_day = f_time.getDate();
		$('.additional-materials tr:last').fadeOut(1).fadeIn(500).after('<tr class="material-unit"><td  class="material-img"><img src="img/add-material.png" /></td><td class="material-special-offers"><a href=""></a><br><small>29.01.2012</small></td><td class="material-description"></td><td class="material-option"><span class="material-edit md-trigger" data-modal="modal-4">Редактировать</span><br><span class="material-delete">Удалить</span></td></tr>');
		
		$('.additional-materials tr:last a').text(label);
		$(".additional-materials tr:last .material-special-offers").text(f_day+"."+f_month+"."+f_year);
		$('.additional-materials tr:last .material-description').text(description);
		$('.additional-materials tr:last .material-img').html(image);
	}); 
	$('#modal-5 .yellow-button').live('click', function() {
		$('#modal-5').removeClass('md-show');
	})
		// Редактирование файла
	function editMaterial() {
		$('#modal-4 .yellow-button').live('click', function() {
		
			var label = $('#modal-4 input').val();
			var description = $('#modal-4 textarea').val();
			var	image =	$('#modal-4 .dz-details').html();
			var error = $('#modal-4 .material-error').html();
			if (label && description && image) {
			$('.additional-materials .active-edit .material-special-offers a').text(label);
			$('.additional-materials .active-edit .material-description').text(description);
			$('.additional-materials .active-edit .material-img').html(image);
			$('#modal-4 .material-error').fadeOut(150);
			}
			else if (!error) {
				console.log(error);
				$('.choose-file').after('<div class="material-error">Заполните все поля!</div>');
			};
		}); 
	}
		$('.material-edit').live('click', function() {
	
			$('.material-unit').removeClass('active-edit');
			$(this).parents('.material-unit').addClass('active-edit');
		});
	//Подсказка
	$('a[title]').poshytip({
		className: 'tip-twitter',
		alignTo: 'target',
		alignY: 'bottom',
		offsetX:-145,
		offsetY: 33,
		showTimeout: 50
	});
	//Вспомогательное меню
	$('#category').each(function() {
		var menu = $(' > ul > li', this);
		var block = false;	
		
		$(menu).children('a').click(function() {
			if(block) return false;
			
			if($(this).next().is('ul')) {
				block = true;
				
				$(this).next().slideToggle(400, function(){block = false});
				$(this).parent().siblings().children('ul').slideUp(400);
				
				$(this).parent().toggleClass('active')
					   .siblings().removeClass('active');		
				
				return false;
			} else {
				$(this).parent().siblings().removeClass('active').children('ul').slideUp(400);
			}
		});
	});
	
	//Слайдер
	$('.top_three').each(function(){
		var slider = this,
		slide = $('.slide li', slider),
		switcher = $('.switcher li', slider),
		block = false;
		
		$(slide).parent().height($(slide).filter('.active').outerHeight(true));
	
		$(switcher).click(function() {
			var root = $(this);
			
			if (block) return false;
			
			if($(slide).eq($(root).index()).is(':visible')) return false;
			
			block = true;
			
			$(slide).filter(':visible').fadeOut(400, function() {
				
				$(slide).eq($(root).index()).addClass('active').fadeIn(400)
						.siblings().removeClass('active');
						
				$(slide).parent().animate({
					height: $(slide).filter('.active').outerHeight(true)
				}, 400, function() {block = false;});
			});
			$(this).addClass('active').siblings().removeClass('active');
		});
		
		var rand = 0.5 + Math.random()*(3);
		rand = Math.round(rand);
		
		$(switcher).eq(rand).click();
	});
	// рейтинг
	$('#leave-comment .rateit').rateit({ max: 7, step: 1, backingfld: '#rate_number', starwidth: 14, starheight: 11 });
});
	//Вывод случайного рейтинга
function defferentLevel () {
        $('.statistics-level').each(function (i, el) {
            var val = $(this);
            var random = Math.random()*400;
            val.css('width', random)
        });
    }
function deleteMaterial () {
    	$('.material-delete').live('click', function() {

		// отправить запрос на удаление
		var description = $(this).parents('tr').find('.material-description').text();
		var name = $(this).parents('tr').find('.material-special-offers a').text(); 
		// alert(name); alert(description);
		$.post( "/edit.php", { name: name, description: description, type: 'material' } );

		$(this).parents('tr').fadeOut(200);
	});
}
function deleteProduct () {
	$('.product-delete').live('click', function() {
		// отправить запрос на удаление
		var image = $(this).prev().find('img').attr('src');
		$.post( "/edit.php", { image: image, type: 'product' } );

		$(this).parents('.product-unit').fadeOut(200);

	});
}
