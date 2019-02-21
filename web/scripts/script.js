// MENU 1 - BOUTON HAMBURGER
$(document).ready(function(){
    $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
        $('#menu1').slideToggle();
    });
    $(window).resize(function(){
        var winWidth = $(window).width();
        if(winWidth >= 751){ // 785
            $('#menu1').show();
            
        } else{
            $('#menu1').hide();
        };
    });
});


// MENU 2 - SOUS-MENU
$(document).ready(function(){
    if($('#menu2').length){
        document.getElementById('sousMenu1').onclick = function(){
            var className = sousMenu1.className + ' ';
            
            this.className = ~className.indexOf(' active ') ?
                className.replace(' active ', '') :
                this.className + ' active';
        };
        document.getElementById('sousMenu2').onclick = function(){
            var className = sousMenu2.className + ' ';
            
            this.className = ~className.indexOf(' active ') ?
                className.replace(' active ', '') :
                this.className + ' active';
        };
        document.getElementById('sousMenu3').onclick = function(){
            var className = sousMenu3.className + ' ';
            
            this.className = ~className.indexOf(' active ') ?
                className.replace(' active ', '') :
                this.className + ' active';
        };
        document.getElementById('sousMenu4').onclick = function(){
            var className = sousMenu4.className + ' ';
            
            this.className = ~className.indexOf(' active ') ?
                className.replace(' active ', '') :
                this.className + ' active';
        };
    };
});


// MENU CHOIX DE LA LANGUE
$(document).ready(function(){
    $('#langues').click(function(){
        $('#menuLangues').slideToggle();
    });
});


// SELECTION CHAMBRES
$(document).ready(function(){    
    $('.chambre1').mouseover(function(){
        $('.c-fondNoir1').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailChambre1').show();
    });
    $('.chambre1').mouseout(function(){
        $('.c-fondNoir1').css({
            background: "none",
        });
    });
    
    $('.chambre2').mouseover(function(){
        $('.c-fondNoir2').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailChambre2').show();
    });
    $('.chambre2').mouseout(function(){
        $('.c-fondNoir2').css({
            background: "none",
        });
    });
    
    $('.chambre3').mouseover(function(){
        $('.c-fondNoir3').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailChambre3').show();
    });
    $('.chambre3').mouseout(function(){
        $('.c-fondNoir3').css({
            background: "none",
        });
    });
    
    $('.chambre4').mouseover(function(){
        $('.c-fondNoir4').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailChambre4').show();
    });
    $('.chambre4').mouseout(function(){
        $('.c-fondNoir4').css({
            background: "none",
        });
    });
});


// SELECTION CARTE RESTAURANT
$(document).ready(function(){
    $('.carte1').mouseover(function(){
        $('.r-fondNoir1').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailCarte1').show();
    });
    $('.carte1').mouseout(function(){
        $('.r-fondNoir1').css({
            background: "none",
        });
    });
    
    $('.carte2').mouseover(function(){
        $('.r-fondNoir2').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailCarte2').show();
    });
    $('.carte2').mouseout(function(){
        $('.r-fondNoir2').css({
            background: "none",
        });
    });
    
    $('.carte3').mouseover(function(){
        $('.r-fondNoir3').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailCarte3').show();
    });
    $('.carte3').mouseout(function(){
        $('.r-fondNoir3').css({
            background: "none",
        });
    });
});


// SELECTION SOIN SPA
$(document).ready(function(){    
    $('.soin1').mouseover(function(){
        $('.s-fondNoir1').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailSoin1').show();
    });
    $('.soin1').mouseout(function(){
        $('.s-fondNoir1').css({
            background: "none",
        });
    });
    
    $('.soin2').mouseover(function(){
        $('.s-fondNoir2').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailSoin2').show();
    });
    $('.soin2').mouseout(function(){
        $('.s-fondNoir2').css({
            background: "none",
        });
    });
    
    $('.soin3').mouseover(function(){
        $('.s-fondNoir3').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailSoin3').show();
    });
    $('.soin3').mouseout(function(){
        $('.s-fondNoir3').css({
            background: "none",
        });
    });
    
    $('.soin4').mouseover(function(){
        $('.s-fondNoir4').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailSoin4').show();
    });
    $('.soin4').mouseout(function(){
        $('.s-fondNoir4').css({
            background: "none",
        });
    });
    
    $('.soin5').mouseover(function(){
        $('.s-fondNoir5').css({
            background: "url('web/files/fondnoir.png')",
        });
        $('.detailSoin5').show();
    });
    $('.soin5').mouseout(function(){
        $('.s-fondNoir5').css({
            background: "none",
        });
    });
});


// ONGLETS AVIS
$(document).ready(function(){
    $('#avisGeneral').show();
    $('#boutonAvisGeneral').click(function(){
        $('#avisGeneral').show();
        $('#avisChambres').hide();
        $('#avisRestaurant').hide();
        $('#avisSpa').hide();
    });
    $('#boutonAvisChambres').click(function(){
        $('#avisGeneral').hide();
        $('#avisChambres').show();
        $('#avisRestaurant').hide();
        $('#avisSpa').hide();
    });
    $('#boutonAvisRestaurant').click(function(){
        $('#avisGeneral').hide();
        $('#avisChambres').hide();
        $('#avisRestaurant').show();
        $('#avisSpa').hide();
    });
    $('#boutonAvisSpa').click(function(){
        $('#avisGeneral').hide();
        $('#avisChambres').hide();
        $('#avisRestaurant').hide();
        $('#avisSpa').show();
    });
});


// BOUTON HAUT DE PAGE LORS DU DEFILEMENT
$(document).ready(function(){    
    $('body').append('<div id="hautDePage"><a href="#top" id="hautDePageLien"></a></div>');
    $('.enSavoirPlus').fadeIn(100);
    $(window).scroll(function(){
        resScroll = $(document).scrollTop();
        if(resScroll >=50) {
            $('#hautDePage').fadeIn(600);
            $('.enSavoirPlus').fadeOut(100);
        } else {
            $('#hautDePage').fadeOut(600);
            $('.enSavoirPlus').fadeIn(600);
        }
    });
});


// APPARITION HEADER
$(document).ready(function(){
    var winWidth = $(window).width();
    var resTitle = $('title').html();
    if( (winWidth >= 751) && (resTitle == 'Hôtel PARIMIS - Accueil') ){
        $('header').css({
            background: "rgba(255, 255, 255, 0.6)",
        });
        $(window).scroll(function(){
            resScroll = $(document).scrollTop();
            if( (winWidth >= 751) && (resScroll <=50) ) {
                $('header').css({
                    background: "rgba(255, 255, 255, 0.6)",
                    transition: 'background 1s linear'
                });
            } else {
                $('header').css({
                    background: "#fff",
                    transition: 'background 1s linear'
                });
            } 
        });
        $(window).resize(function(){
            winWidth = $(window).width();
            if( (winWidth >= 751) && resScroll <=50 && (resTitle == 'Hôtel PARIMIS - Accueil') ){
                $('header').css({
                    background: "rgba(255, 255, 255, 0.6)",
                });
            } else {
                $('header').css({
                    background: "#fff",
                    transition: 'background 1s linear'
                });
            };
            $(window).scroll(function(){
                resScroll = $(document).scrollTop();
                if( (winWidth >= 751) && (resScroll <=50) ) {
                    $('header').css({
                        background: "rgba(255, 255, 255, 0.6)",
                        transition: 'background 1s linear'
                    });
                } else {
                    $('header').css({
                        background: "#fff",
                        transition: 'background 1s linear'
                    });
                } 
            });
        });
    };
});


// CALENDRIER DE SELECTION DES DATES DE RESERVATION
/*
$(function () {
    $("#DateValue").datepicker($.datepicker.regional["fr"]);
});
*/
$(document).ready(function(){
    var dateFrom = null;
    var dateTo = null;

    $("#from").val('06/10/2015');
    $("#to").val('10/10/2015');
    var selectedDate = null;
    var tempDateFrom = null;
    var tempDateTo = null;
    $(".datepicker").datepicker({
        minDate: 0,
        numberOfMonths: [2,1],
        defaultDate: '10/06/2015',
        beforeShowDay: function(date) {           
            dateFrom = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#from").val());
            dateTo = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#to").val());

            if(dateFrom != null){
                if(date.getTime() == dateFrom.getTime()){
                    return [true,"dateFrom"];                     
                }
            }
            if(dateTo != null){
                if(date.getTime() == dateTo.getTime()){
                    return [true,"dateTo"];
                } 
            }   
            return [true, dateFrom && ((date.getTime() == dateFrom.getTime()) || (dateTo && date >= dateFrom && date <= dateTo)) ? "dp-highlight" : ""];   
        },
        onSelect: function(dateText, inst) {
            console.log('onSelect');
            dateFrom = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#from").val());
            dateTo = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#to").val());
            selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);               
            if (!dateFrom || dateTo) {
                $("#from").val(dateText);
                $("#to").val("");
                $(this).datepicker();
            } else if( selectedDate < dateFrom ) {
                $("#to").val( $("#from").val() );
                $("#from").val( dateText );
                $(this).datepicker();
            } else {
                $("#to").val(dateText);
                $(this).datepicker();
            }           
            setTimeout(function() {                
                highlightBetweenDates(); 
            }, 0); 
        },
        refresh: function() {
           alert('sdfdsf');
        }
    });

    var currentDate = null;
    var allTds = null;

    function highlightBetweenDates() {
        if(dateFrom == null || dateTo == null ){ 
            $(".ui-datepicker-calendar td").mouseover(function() {
                if(dateFrom != null && !$(this).hasClass('ui-datepicker-unselectable')){
                    currentDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $(this).children().text() + '/' + (parseInt($(this).attr('data-month'))+1) + '/' + parseInt($(this).attr('data-year')));
                    if(currentDate != selectedDate){
                        if (selectedDate === null) {
                            selectedDate = new Date();
                        }
                        allTds = $('.ui-datepicker').find('td');            
                        allTds.removeClass('dp-highlight')
                        found = false;
                        if (currentDate < selectedDate) {
                            for (i = 0; i < allTds.length; i++) {
                                if (allTds[i] == this) {
                                    found = true;
                                }
                                if ($(allTds[i]).hasClass('ui-datepicker-current-day')) {
                                    break;
                                }
                                if (found) {
                                    $(allTds[i]).addClass('dp-highlight');
                                }
                            }
                        } else if (currentDate > selectedDate) {
                            for (i = 0; i < allTds.length; i++) {
                                if (found) {
                                    $(allTds[i]).addClass('dp-highlight');
                                }
                                if ($(allTds[i]).hasClass('ui-datepicker-current-day') ) {
                                    found = true;
                                }
                                if (allTds[i] == this) {
                                    break;
                                }
                            }
                        }                
                    } else {
                        console.log('same');  
                    }    
                } else {
                    console.log('NOT');   
                }    
            });
        }  else {
            $(".ui-datepicker-calendar td").unbind('mouseover');
            $(".ui-datepicker-calendar td").off('mouseover');
        } 
    }

    highlightBetweenDates();
});


// SELECTION DES DATES SUR LA BANNIERE DE RESERVATION
$(document).ready(function(){
    $( function(){
        $("#from").datepicker();
        $("#to").datepicker();
    });
});