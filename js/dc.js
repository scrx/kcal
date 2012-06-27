$(function()
{
	DietCalculator.init();
});

var DietCalculator =
{
	//
	meals : null,
	current_meal : null,
	
	load_meals : function()
	{
		meals = ['Breakfast', 'Brunch', 'Lunch', 'Tea', 'Supper']
	},
	
	//
	items : null,
	
	//
	categories : null,
	
	//
	container : $('#items'),

	//
	selected_items: [],
	
	// statycznie załadowane
	load_categories : function()
	{
		this.categories = 
		[
		   {name:'fruits & vegetables', img:'fw'}, 
		   {name:'dairy foods', img: 'df'},
		   {name:'bread', img: 'b'}
		];
	},

	// w przyszłości będą pobierane ajaxem i cachowane
	load_items : function()
	{
		// wczytaj baze danych potworów
		var db_conn = $.getJSON("db/db.json", function()
		{
			$('#status').html('wczytywanie bazy danych ...');
		}).error(function()
		{
			$('#status').html('wystąpił problem przy próbie odczytu danych :(');
		}).success(function(data)
		{
			$('#status').html('baza danych wczytana poprawnie ...');
			$('#status').html('wczytano ' + data.length + ' rekordów');

			// uzupełnij select danymi
			if (data.length > 0)
			{
				DietCalculator.items = data;
				creatures = data;
				var options = "";
				for (index in data)
				{
					$('<option>',
					{
						value : index,
						html : data[index].name
					}).appendTo('#viewer');
					/*
					$('<li>',
					{
						html : data[index].name
					}).appendTo('#items ul');
					*/
				}
				$('#items').tinyscrollbar();
			}

		});
	},

	//
	display_categories: function()
	{
		$('#items').find('li').remove();
		for (index in this.categories)
		{
			$('<li>',
					{
						html : $('<a>', {html:this.categories[index].name, href:'javascript:void(0);'})
					}).appendTo('#items ul');			
		}
		$('#item_list').attr('id', 'cat');
		$('#items').tinyscrollbar();
	},
	
	//
	display_items: function()
	{
		$('#items').find('li').remove();
		for (index in DietCalculator.items)
		{			
			$('<li>',
					{
						html : $('<a>', {html:DietCalculator.items[index].name, href:'javascript:void(0);', value:index, class:'itm'})
					}).appendTo('#items ul');			
		}
		$('#cat').attr('id', 'itm');
		$('#items').tinyscrollbar();
	},
	
	//
	update_selected: function()
	{
		$('#selected').find('li').remove();
		for (index in DietCalculator.selected_items)
		{			
			$('<li>',
					{
						html : $('<a>', {html:DietCalculator.selected_items[index].name, href:'javascript:void(0);', value:index, class:'itm'})
					}).appendTo('#selected ul');			
		}		
	},
	
	//
	init : function()
	{
		// init scrollbar
		this.load_categories();
		this.load_items();
		this.display_categories();
		$('#items').tinyscrollbar();
		
		$('#cat').click(DietCalculator.display_items);
		
		$('.itm').live('click', function()
		{
			//alert();
			DietCalculator.selected_items.push(DietCalculator.items[this.value])
			DietCalculator.update_selected();
		});



		// funkcja generująca profil na postawie id
		function generate_profile(id)
		{
			// var result = "";
			// result += "<div><img src='images/" + id + "'><br>";
			// result += "name:" + creatures[id].name + "<br>";
			// result += "<span style='align:left'>level: " + creatures[id].level +
			// "</span><br>";
			// result += "<span>strength:" + creatures[id].attributes.strength +
			// "</span>";
			// result += "</div>";
			var result = "";
			result += "<div>";
			result += "węglowodany: " + creatures[id].nutrients.carbohydrate
					+ "</br>";
			result += "cukry: " + creatures[id].nutrients.sugar + "</br>";
			result += "</div>";
			return result;
		}

		$('#viewer').change(function()
		{
			var selected_id = $(this).val();
			$('#profile').html(generate_profile(selected_id));
		});

	}
};
