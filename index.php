<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenWeatherMap API</title>
    
    <!-- latest bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-4">

        </div>


        <div class="col-md-4">
            <div class="container mt-5 search-bar">
                <form method="post" action="">
                    <label for="city" class="form-label fs-3 fw-bold p-2">See the weather details by typing the city name</label>
                    <input class="form-control form-control-lg" type="text" placeholder="Search..." aria-label="city" name="city" id="city">
                    <div class="container mt-3 weather-results bg-info" id="weather-results">
                        
                    </div>
                </form>
            </div>
        </div>


        <div class="col-md-4">

        </div>
    </div>

    
</body>

<script>
    function renderWeather(weather) {
        console.log(weather);

        var resultsContainer = document.querySelector("#weather-results");

        // display h4 for city names
        var city = document.createElement("h4");
        city.textContent = weather.name;
        resultsContainer.append(city);

        // display p for humidity, wind, description, temp
        var temp = document.createElement("p");
        temp.textContent = "Temp: " + weather.main.temp + " F";
        resultsContainer.append(temp);

        var humidity = document.createElement("p");
        humidity.textContent = "Humidity: " + weather.main.humidity + " %";
        resultsContainer.append(humidity);

        var wind = document.createElement("p");
        wind.textContent = "Wind: " + weather.wind.speed + " mph, " + weather.wind.deg + " °";
        resultsContainer.append(wind);

        var details = weather.weather[0];
        if (details && details.description){
            var description = document.createElement("p");
            description.textContent = details.description;
            resultsContainer.append(description);
        }
        
    }


    function fetchWeather(query) {
        var url = "https://api.openweathermap.org/data/2.5/weather?q=London&appid=7dc4416dadb5c400047e5cb4b4d77b07"

        fetch(url)
            .then((response) => response.json())
            .then((data) => renderWeather(data));
    }
    fetchWeather();
</script>

<!-- latest bootstrap js popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<!-- latest bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>