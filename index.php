<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenWeatherMap API Demo</title>
</head>
<body>
    <h3>OpenWeatherMap API Demo</h3>
</body>
<script>
    function renderWeather() {
    }


    function fetchWeather(query) {
        var url = "https://api.openweathermap.org/data/2.5/weather?q=London&appid=7dc4416dadb5c400047e5cb4b4d77b07"

        fetch(url)
            .then((response) => response.json())
            .then((data) => console.log(data));
    }
    fetchWeather();
</script>
</html>