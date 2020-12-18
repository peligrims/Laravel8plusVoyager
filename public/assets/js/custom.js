/*
Функции реализуют функциоеал роли member
-------------------------------------------------------*/

/*Функция считает сумму столбцов*/
$(function() {
    $(document).on("input", ".mat_count input", function() {
        var count = $('[id^="count"]').val(0),
            len = count.length;
        $(".mat_count input").each(function(i, el) {
            i %= len;
            count[i].value -= -(+el.value || 0)
        })
    })
});




/*Функция for Assets */
$(document).on("input", ".mat-cou", function() {
    var sum = 0;
    $(".mat-cou").each(function(){
        sum += +$(this).val();
    });
    $(".totala").val(sum);
});

/*Функция for liabilities */
$(document).on("input", ".liabilities", function() {
    var sum = 0;
    $(".liabilities").each(function(){
        sum += +$(this).val();
    });
    $(".totalb").val(sum);
});

/*Функция в седьмом разделе разница между хначениями totala1 и totalb1 запишем в difference*/


$(document).on("input", ".seven", function() {

var first = document.getElementById("totala1").value;
var second = document.getElementById("totalb1").value;
var ev = document.getElementById("difference");
var res = Number(first) - Number(second);
 
$("#difference").val(res);

});

/*Функция суммы строк в таблице в восьмом разделе*/
$(document).on("input", ".eight", function() {
	$(".expenses").on('input', calculateSum).each(calculateSum);
});

function calculateSum()
{
	// Get the index of the parent '<td>' element
	var cellIndex = $(this).closest('td').index();

	// Get the values of expenses in the same column as the '<td>' element
	var allExpensesInSameColumn = $('.expenses').map(function() {
		if ($(this).closest('td').index() !== cellIndex)
			return;

		return +this.value;
	}).get();

	// Calculate the sum from returned array of values
	var sumOfExpensesInSameColumn = allExpensesInSameColumn.reduce(function(acc, curVal) {
		return acc + curVal;
	});

	// Set the sum on the '.expenses_sum' element in the corresponding column
	$('.expenses_sum').each(function() {
		if ($(this).closest('td').index() !== cellIndex)
			return;

		this.value = sumOfExpensesInSameColumn;
	});
}

	

function getCheckedCheckBoxes()
{
	var checkboxes = document.getElementsByClassName('custom-control-input');
	var checkboxesChecked = []; // можно в массиве их хранить, если нужно использовать
	for (var index = 0; index < checkboxes.length; index++) {
		if (checkboxes[index].checked) {
			checkboxesChecked.push(checkboxes[index].value); // положим в массив выбранный
			alert(checkboxes[index].value); // делайте что нужно - это для наглядности
		}
	}
	return checkboxesChecked; // для использования в нужном месте
}
// для добавления функции в админку прикрепление файлов изображения
$(document).ready(function() {

	$(".btn-success").click(function() {
		var html = $(".clone").html();
		$(".increment").after(html);
	});

	$("body").on("click",".btn-danger",function() {
		$(this).parents(".control-group").remove();
	});

});


$(window).load(function() {
    jQuery('#all').click();
    return false;
});

$(document).ready(function() {
    $('#header_wrapper').scrollToFixed();
    $('.res-nav_click').click(function() {
        $('.main-nav').slideToggle();
        return false

    });
	
    function resizeText() {
        var preferredWidth = 767;
        var displayWidth = window.innerWidth;
        var percentage = displayWidth / preferredWidth;
        var fontsizetitle = 25;
        var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
        $(".divclass").css("font-size", newFontSizeTitle)
    }
    if ($('#main-nav ul li:first-child').hasClass('active')) {
        $('#main-nav').css('background', 'none');
    }
    $('#mainNav').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 950,
        scrollThreshold: 0.2,
        filter: '',
        easing: 'swing',
        begin: function() {
        },
        end: function() {
            if (!$('#main-nav ul li:first-child').hasClass('active')) {
                $('.header').addClass('addBg');
            } else {
                $('.header').removeClass('addBg');
            }

        },
        scrollChange: function($currentListItem) {
            if (!$('#main-nav ul li:first-child').hasClass('active')) {
                $('.header').addClass('addBg');
            } else {
                $('.header').removeClass('addBg');
            }
        }
    });

    var container = $('#portfolio_wrapper');


    container.isotope({
        animationEngine: 'best-available',
        animationOptions: {
            duration: 200,
            queue: false
        },
        layoutMode: 'fitRows'
    });

    $('#filters a').click(function() {
        $('#filters a').removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        container.isotope({
            filter: selector
        });
        setProjects();
        return false;
    });

    function splitColumns() {
        var winWidth = $(window).width(),
            columnNumb = 1;


        if (winWidth > 1024) {
            columnNumb = 4;
        } else if (winWidth > 900) {
            columnNumb = 2;
        } else if (winWidth > 479) {
            columnNumb = 2;
        } else if (winWidth < 479) {
            columnNumb = 1;
        }

        return columnNumb;
    }
	
    function setColumns() {
        var winWidth = $(window).width(),
            columnNumb = splitColumns(),
            postWidth = Math.floor(winWidth / columnNumb);

        container.find('.portfolio-item').each(function() {
            $(this).css({
                width: postWidth + 'px'
            });
        });
    }

    function setProjects() {
        setColumns();
        container.isotope('reLayout');
    }

    container.imagesLoaded(function() {
        setColumns();
    });


    $(window).bind('resize', function() {
        setProjects();
    });


});

/*wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();
document.getElementById('').onclick = function() {
    var section = document.createElement('section');
    section.className = 'wow fadeInDown';
    section.className = 'wow shake';
    section.className = 'wow zoomIn';
    section.className = 'wow lightSpeedIn';
    this.parentNode.insertBefore(section, this);
};*/