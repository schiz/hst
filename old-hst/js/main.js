$(document).ready(function() {

    defferentLevel();

    deleteMaterial();

	deleteProduct ();

	editMaterial();


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

	$('#autorization-form .submit').live('click', function() {

		$('.unauthorized').addClass('unvisible');

		$('.authorized').addClass('visible');

	});


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

	}); 


	// Добавление товара

	$('#modal-2 .yellow-button').live('click', function() {
	
		var label = $('#modal-2 textarea').val();
		var	image =	$('#modal-2 .dz-details').html();
		var error = $('#modal-2 .material-error').html();

		if (label && image) {

		$('.product-unit:last').fadeOut(1).fadeIn(500).before('<div class="product-unit with-product"><div class="product-image"></div><span class="product-delete"><font>Удалить</font></span><label></label></div>');
		
		$('.with-product:last label').text(label);

		$('.product-unit .product-image').eq(-1).html(image);

		$('#modal-2 .material-error').fadeOut(150);

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

		$(this).parents('tr').fadeOut(200);

	});

}

function deleteProduct () {

	$('.product-delete').live('click', function() {
	
		$(this).parents('.product-unit').fadeOut(200);

	});

}


