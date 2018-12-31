
				var menuArray=["menu", "food", "fruit bowl", "fruit", "yogurt", "fruit yogurt", "egg", "sausage", "biscuit", "biscuits", "biscuit sandwich",
				"cheese", "pancakes", "butterm milk pancakes", "waffles", "belgian waffles", "food", "drinks", "water", "soda", "coffee", "tea",
				"hot chocolate", "white hot chocolate", "dessert", "hot beverages", "bottled water", "regular soda", "specialty soda", "fruit juice",
				"juice", "lunch", "lunches", "fish", "fish sandwhich", "fried fish platter", "salad", "summer salad", "chicken wrap", "grilled chicken",
				"grilled chicken salad", "chicken salad", "hamburger", "cheeseburger", "frankfurter", "hot dog", "sausage", "italian sausage",
				"peppers", "vegetables", "onions", "chili", "chilli", "chilli bowl", "chili bowl", "dinner", "dinners", "sides", "fried fish", "fried fish platter",
				"platter", "pot pie", "personal pot pie", "pie", "green salad", "five green salad megabowl", "pizza", "deep dish pizza", "salmon", "grilled salmon",
				"chicken", "chicken cordon bleu", "wings", "buffalo wings", "buffalo chicken", "okonomiyaki", "japanese", "flatcake", "crab legs", "king crab legs",
				"caeser salad", "fries", "straight fries", "curly fries", "sweet potato fries", "sweet potatoe fries", "rice", "white rice", "cabbage",
				"boiled cabbage", "mixed vegetables", "mixed vegetables"];

				var eventArray=["december", "free dessert", "nutcracker", "nutcracker ticket", "free hot apple cider", "free apple cider",
				"apple cider", "carols", "carol", "sing carol", "caroling event", "event", "events", "free hot chocolate", "santa costume", "costume wearing",
				"elf", "elf", "costume", "santa", "cookie decorating", "decorating", "decorating contest", "decorating event", "cookie decorating event",
				"bbq", "barbeque", "summer", "summer barbeque", "bistro closes"];

				var resArray=["reservation", "reservations", "reserve", "party", "party room", "forty seat party room", "fifteen seat party room", "wedding",
				"newlywed corner", "reservable spaces"];

				var takeoutArray=["takeout"];

				function myFunction() {
					// Define variables
					var input, filter, ul, li, a, i, txtValue;
					input = document.getElementById('myInput');
					filter = input.value.toUpperCase();
					ul = document.getElementById("myUL");
					li = ul.getElementsByTagName('li');
					
					if(input.value.length == 0){
					document.getElementById("myUL").style.display='none';
					}else{
						ul.style.display = "block";
					}	

					// Show results pertaining to arrays
					if (menuArray.indexOf(filter.toLowerCase()) >= 0) {
						filter = "MENU";
					}	
					if (eventArray.indexOf(filter.toLowerCase()) >= 0) {
						filter = "EVENTS";
					}	
					if (resArray.indexOf(filter.toLowerCase()) >= 0) {
						filter = "RESERVATIONS";
					}	
					if (takeoutArray.indexOf(filter.toLowerCase()) >= 0) {
						filter = "TAKEOUT";
					}			
							
					// Loop through items in the list, and hide those which don't match the search
					for (i = 0; i < li.length; i++) {
						a = li[i].getElementsByTagName("a")[0];
						txtValue = a.textContent || a.innerText;
						if (txtValue.toUpperCase().indexOf(filter) > -1) {
							li[i].style.display = "block";
						} else {
							li[i].style.display = "none";
						}
					}
					
				}

				function searchResults() {
					var input = document.getElementById("myInput");
					var inputText = input.value;
					var menuArrayLength = menuArray.length;
					
					if (menuArray.indexOf(inputText) >= 0) {
					// href for menu
					window.location.href = "Menu.php"; 
					return;
					} else {
				}

					if (eventArray.indexOf(inputText) >= 0) {
					// href for menu
					window.location.href = "Takeout.php";
					return;
					} else {
				}

					if (resArray.indexOf(inputText) >= 0) {
					// href for menu
					window.location.href = "Reservations.php";
					return;
					} else {
				}

					if (takeoutArray.indexOf(inputText) >= 0) {
					// href for menu
					window.location.href = "Events.php"; 
					return;
					} else {
				}
				alert("No item found");
				}
							