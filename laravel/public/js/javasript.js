$("#register-form input").wrap("<div class='form-group'></div>");
		$("input:not([type='checkbox'],[type='submit'])").addClass("form-control");
		$(".form-control").parent().prev().each(function(index,item){
			//console.log(item);
			$(this).addClass("form-control-label");
			let next = $(this).next();
			$(this).prependTo(next);
		});
		let checkContainer = $("input[type='checkbox']").parent();
		checkContainer.next().appendTo(checkContainer);
		$("#send input[type='submit']").addClass("text-right")
		$("input[type='submit']").addClass("btn btn-primary");
		$("#register-form input[type='submit']").parent().	addClass("text-right");
		/** normal ajax **/

	function getAJAX(url)
	{
		var results;
		$.ajax
		  ({
			type: 'GET', 
			url: url,
			dataType: 'json',
			data: {},
			async:false,
			success: function (data) 
			{
			  //console.log(data);
			  results = data;
			},
			error:function(data)
			{ 
			  console.log(data);
			  results = data;
			}
		  });
		return results;
	}
	
	var language= $("html").attr("lang"); //get language from html set lang="en" or lang ="ar" if you don't set it
	
		/** countries **/
	var conutriesURL = 'http://api.geonames.org/countryInfoJSON?q=&country=&lang=ar&username=abdulnaser_mohsen'; //url that get your conuntries
	var countries = getAJAX(conutriesURL); // the importance of async test without aync or aync is true
	//console.log(countries);
	//console.log(countries.geonames);
	$(countries.geonames).each(function(index,item){
		//console.log(item.countryName , item.geonameId);
		var selectOption = $("<option>")
		selectOption.attr("value",item.geonameId).append(item.countryName);
		$('#countryId').append(selectOption);
	});


		/** states **/
	$(document).on("change","#countryId",function(){
		
		$('#stateId option:not(option:first)').remove(); // clear states
		
		var geonameid= $(this).val(); //get country id
		var statesURL = 'http://api.geonames.org/childrenJSON?lang='+language+'&geonameId='+geonameid+'&username=abdulnaser_mohsen'; //url that get your states
		
		var states = getAJAX(statesURL); 
		//console.log(states);
		//console.log(states.geonames);
		
		$(states.geonames).each(function(index,item){
			//console.log(item.name , item.geonameId);
			var selectOption = $("<option>")
			selectOption.attr("value",item.geonameId).append(item.name);
			$('#stateId').append(selectOption);
		});
	});


	$(document).on("change","#stateId",function(){
		$('#cityId option:not(option:first)').remove(); // clear cities
		
		var geonameid= $(this).val(); //get country id
		var citiesURL = 'http://api.geonames.org/childrenJSON?lang='+language+'&geonameId='+geonameid+'&username=abdulnaser_mohsen'; //url that get your cities
		
		var cities = getAJAX(citiesURL); 
		//console.log(cities);
		//console.log(cities.geonames);
		
		$(cities.geonames).each(function(index,item){
			//console.log(item.name , item.geonameId);
			var selectOption = $("<option>")
			selectOption.attr("value",item.geonameId).append(item.name);
			$('#cityId').append(selectOption);
		});
	});

//first index
$('.one-time').slick({
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 1500,
dots: true,
infinite: true
});

//second index
$(".to-slick").slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	dots:true,
	arrows: true,
	infinite: true,
	responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
	{
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
