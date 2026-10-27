<?php

/* =========================
   WEATHER JSON API
   ========================= */

if (isset($_GET['api']) && $_GET['api'] === 'weather') {

    header('Content-Type: application/json');

    $city = strtolower(trim($_GET['city'] ?? ''));

    /* More locations */
    $weather = [

        "chennai" => [
            "city" => "Chennai",
            "temp" => 32,
            "feels" => 35,
            "condition" => "Sunny",
            "humidity" => 68,
            "wind" => 18,
            "icon" => "☀️"
        ],

        "pondicherry" => [
            "city" => "Pondicherry",
            "temp" => 30,
            "feels" => 33,
            "condition" => "Partly Cloudy",
            "humidity" => 72,
            "wind" => 14,
            "icon" => "⛅"
        ],

        "coimbatore" => [
            "city" => "Coimbatore",
            "temp" => 28,
            "feels" => 30,
            "condition" => "Sunny",
            "humidity" => 64,
            "wind" => 13,
            "icon" => "☀️"
        ],

        "madurai" => [
            "city" => "Madurai",
            "temp" => 31,
            "feels" => 34,
            "condition" => "Clear Sky",
            "humidity" => 61,
            "wind" => 15,
            "icon" => "🌤️"
        ],

        "salem" => [
            "city" => "Salem",
            "temp" => 29,
            "feels" => 31,
            "condition" => "Sunny",
            "humidity" => 59,
            "wind" => 12,
            "icon" => "☀️"
        ],

        "tiruchirappalli" => [
            "city" => "Tiruchirappalli",
            "temp" => 30,
            "feels" => 33,
            "condition" => "Clear",
            "humidity" => 63,
            "wind" => 14,
            "icon" => "🌤️"
        ],

        "tirunelveli" => [
            "city" => "Tirunelveli",
            "temp" => 31,
            "feels" => 34,
            "condition" => "Sunny",
            "humidity" => 60,
            "wind" => 16,
            "icon" => "☀️"
        ],

        "ooty" => [
            "city" => "Ooty",
            "temp" => 18,
            "feels" => 17,
            "condition" => "Cloudy",
            "humidity" => 82,
            "wind" => 9,
            "icon" => "☁️"
        ],

        "bangalore" => [
            "city" => "Bangalore",
            "temp" => 24,
            "feels" => 25,
            "condition" => "Cloudy",
            "humidity" => 78,
            "wind" => 11,
            "icon" => "☁️"
        ],

        "hyderabad" => [
            "city" => "Hyderabad",
            "temp" => 27,
            "feels" => 29,
            "condition" => "Partly Cloudy",
            "humidity" => 65,
            "wind" => 13,
            "icon" => "⛅"
        ],

        "mumbai" => [
            "city" => "Mumbai",
            "temp" => 29,
            "feels" => 32,
            "condition" => "Light Rain",
            "humidity" => 81,
            "wind" => 20,
            "icon" => "🌧️"
        ],

        "delhi" => [
            "city" => "Delhi",
            "temp" => 27,
            "feels" => 28,
            "condition" => "Clear Sky",
            "humidity" => 55,
            "wind" => 10,
            "icon" => "🌤️"
        ],

        "kolkata" => [
            "city" => "Kolkata",
            "temp" => 30,
            "feels" => 34,
            "condition" => "Humid",
            "humidity" => 76,
            "wind" => 12,
            "icon" => "🌥️"
        ],

        "pune" => [
            "city" => "Pune",
            "temp" => 26,
            "feels" => 27,
            "condition" => "Partly Cloudy",
            "humidity" => 62,
            "wind" => 14,
            "icon" => "⛅"
        ],

        "jaipur" => [
            "city" => "Jaipur",
            "temp" => 30,
            "feels" => 32,
            "condition" => "Sunny",
            "humidity" => 48,
            "wind" => 16,
            "icon" => "☀️"
        ],

        "goa" => [
            "city" => "Goa",
            "temp" => 28,
            "feels" => 31,
            "condition" => "Light Rain",
            "humidity" => 84,
            "wind" => 18,
            "icon" => "🌧️"
        ],

        "agra" => [
            "city" => "Agra",
            "temp" => 28,
            "feels" => 30,
            "condition" => "Clear",
            "humidity" => 52,
            "wind" => 9,
            "icon" => "🌤️"
        ],

        "kochi" => [
            "city" => "Kochi",
            "temp" => 29,
            "feels" => 33,
            "condition" => "Rainy",
            "humidity" => 86,
            "wind" => 17,
            "icon" => "🌧️"
        ],

        "thiruvananthapuram" => [
            "city" => "Thiruvananthapuram",
            "temp" => 28,
            "feels" => 31,
            "condition" => "Cloudy",
            "humidity" => 80,
            "wind" => 15,
            "icon" => "☁️"
        ],

        "mysore" => [
            "city" => "Mysore",
            "temp" => 25,
            "feels" => 26,
            "condition" => "Clear",
            "humidity" => 70,
            "wind" => 10,
            "icon" => "🌤️"
        ],

        "shimla" => [
            "city" => "Shimla",
            "temp" => 15,
            "feels" => 14,
            "condition" => "Cloudy",
            "humidity" => 79,
            "wind" => 8,
            "icon" => "☁️"
        ],

        "manali" => [
            "city" => "Manali",
            "temp" => 12,
            "feels" => 11,
            "condition" => "Cold & Cloudy",
            "humidity" => 84,
            "wind" => 7,
            "icon" => "🏔️"
        ],

        "srinagar" => [
            "city" => "Srinagar",
            "temp" => 13,
            "feels" => 12,
            "condition" => "Cloudy",
            "humidity" => 77,
            "wind" => 6,
            "icon" => "☁️"
        ],

        "london" => [
            "city" => "London",
            "temp" => 14,
            "feels" => 13,
            "condition" => "Light Rain",
            "humidity" => 82,
            "wind" => 15,
            "icon" => "🌧️"
        ],

        "dubai" => [
            "city" => "Dubai",
            "temp" => 36,
            "feels" => 39,
            "condition" => "Sunny",
            "humidity" => 42,
            "wind" => 19,
            "icon" => "☀️"
        ],

        "singapore" => [
            "city" => "Singapore",
            "temp" => 30,
            "feels" => 35,
            "condition" => "Thunderstorm",
            "humidity" => 84,
            "wind" => 12,
            "icon" => "⛈️"
        ],

        "new york" => [
            "city" => "New York",
            "temp" => 19,
            "feels" => 18,
            "condition" => "Partly Cloudy",
            "humidity" => 61,
            "wind" => 13,
            "icon" => "⛅"
        ],

        "tokyo" => [
            "city" => "Tokyo",
            "temp" => 21,
            "feels" => 21,
            "condition" => "Clear Sky",
            "humidity" => 58,
            "wind" => 11,
            "icon" => "🌤️"
        ],

        "paris" => [
            "city" => "Paris",
            "temp" => 16,
            "feels" => 15,
            "condition" => "Cloudy",
            "humidity" => 74,
            "wind" => 12,
            "icon" => "☁️"
        ],

        "sydney" => [
            "city" => "Sydney",
            "temp" => 22,
            "feels" => 22,
            "condition" => "Sunny",
            "humidity" => 57,
            "wind" => 17,
            "icon" => "☀️"
        ],

        "melbourne" => [
            "city" => "Melbourne",
            "temp" => 17,
            "feels" => 16,
            "condition" => "Rainy",
            "humidity" => 78,
            "wind" => 21,
            "icon" => "🌧️"
        ]

    ];

    if (isset($weather[$city])) {

        echo json_encode([
            "success" => true,
            "data" => $weather[$city]
        ]);

    } else {

        echo json_encode([
            "success" => false,
            "message" => "No weather information found for \"" . htmlspecialchars($_GET['city'] ?? '') . "\"."
        ]);
    }

    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Weather Explorer</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Segoe UI", Arial, sans-serif;
    min-height: 100vh;

    background:
        radial-gradient(circle at top right, #3b82f6, transparent 35%),
        linear-gradient(135deg, #0f172a, #172554);

    color: white;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 30px;
}

.app {
    width: 100%;
    max-width: 1000px;
}

/* HEADER */

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
}

.brand {
    display: flex;
    align-items: center;
    gap: 14px;
}

.logo {
    width: 54px;
    height: 54px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 16px;

    background: rgba(255,255,255,.14);

    font-size: 28px;

    backdrop-filter: blur(10px);
}

.brand h1 {
    font-size: 29px;
}

.brand p {
    margin-top: 4px;
    color: rgba(255,255,255,.65);
    font-size: 13px;
}

.status {
    padding: 9px 15px;
    border-radius: 30px;

    background: rgba(255,255,255,.1);

    font-size: 13px;
}

.status span {
    display: inline-block;

    width: 8px;
    height: 8px;

    border-radius: 50%;

    background: #22c55e;

    margin-right: 7px;
}

/* SEARCH */

.search {
    display: flex;
    gap: 10px;

    padding: 15px;

    border-radius: 18px;

    background: rgba(255,255,255,.11);

    border: 1px solid rgba(255,255,255,.16);

    backdrop-filter: blur(12px);
}

.search input {
    flex: 1;

    padding: 16px 18px;

    border: none;
    outline: none;

    border-radius: 12px;

    font-size: 16px;

    background: white;
    color: #111827;
}

.search button {
    border: none;

    padding: 0 27px;

    border-radius: 12px;

    background: #3b82f6;

    color: white;

    font-weight: 700;

    font-size: 15px;

    cursor: pointer;

    transition: .2s;
}

.search button:hover {
    background: #2563eb;
    transform: translateY(-1px);
}

/* SEARCH HINT */

.hint {
    margin-top: 12px;

    color: rgba(255,255,255,.55);

    font-size: 13px;
}

/* WEATHER */

.weather {
    display: none;

    margin-top: 22px;

    background: rgba(255,255,255,.97);

    color: #111827;

    border-radius: 24px;

    overflow: hidden;

    box-shadow: 0 25px 70px rgba(0,0,0,.3);
}

.weather-top {
    display: flex;

    justify-content: space-between;
    align-items: center;

    padding: 32px;
}

.city {
    font-size: 32px;
}

.subtitle {
    margin-top: 5px;

    color: #64748b;

    font-size: 14px;
}

.icon {
    font-size: 75px;
}

.temperature {
    text-align: center;

    padding: 0 20px 20px;
}

.temperature strong {
    font-size: 78px;

    color: #2563eb;
}

.temperature span {
    font-size: 25px;

    color: #64748b;
}

.condition {
    text-align: center;

    color: #475569;

    font-size: 17px;

    font-weight: 600;

    padding-bottom: 28px;
}

/* DETAILS */

.details {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    border-top: 1px solid #e5e7eb;
}

.detail {
    text-align: center;

    padding: 25px;

    border-right: 1px solid #e5e7eb;
}

.detail:last-child {
    border-right: none;
}

.detail small {
    display: block;

    color: #64748b;

    margin-bottom: 8px;
}

.detail strong {
    font-size: 19px;
}

/* LOADING */

.loading {
    display: none;

    text-align: center;

    padding: 25px;

    color: rgba(255,255,255,.8);
}

/* ERROR */

.error {
    display: none;

    margin-top: 18px;

    padding: 15px;

    border-radius: 12px;

    text-align: center;

    background: rgba(255,255,255,.96);

    color: #dc2626;

    font-weight: 600;
}

/* FOOTER */

.footer {
    text-align: center;

    margin-top: 20px;

    color: rgba(255,255,255,.45);

    font-size: 12px;
}

/* MOBILE */

@media(max-width:650px) {

    body {
        padding: 18px;
    }

    .status {
        display: none;
    }

    .brand h1 {
        font-size: 24px;
    }

    .search {
        flex-direction: column;
    }

    .search button {
        padding: 14px;
    }

    .weather-top {
        padding: 25px;
    }

    .city {
        font-size: 25px;
    }

    .icon {
        font-size: 55px;
    }

    .temperature strong {
        font-size: 60px;
    }

    .details {
        grid-template-columns: 1fr;
    }

    .detail {
        border-right: none;
        border-bottom: 1px solid #e5e7eb;
    }

    .detail:last-child {
        border-bottom: none;
    }
}

</style>

</head>

<body>

<div class="app">

    <!-- HEADER -->

    <div class="header">

        <div class="brand">

            <div class="logo">
                🌤️
            </div>

            <div>

                <h1>Weather Explorer</h1>

                <p>Discover current weather conditions worldwide</p>

            </div>

        </div>

        <div class="status">
            <span></span>
            Service Online
        </div>

    </div>


    <!-- SEARCH -->

    <div class="search">

        <input
            type="text"
            id="city"
            placeholder="Search any available city..."
            autocomplete="off"
        >

        <button onclick="getWeather()">
            Search
        </button>

    </div>

    <div class="hint">
        Try searching: Chennai, Mumbai, London, Tokyo, Dubai, Singapore...
    </div>


    <!-- LOADING -->

    <div class="loading" id="loading">
        Fetching weather information...
    </div>


    <!-- WEATHER CARD -->

    <div class="weather" id="weather">

        <div class="weather-top">

            <div>

                <h2 class="city" id="weatherCity"></h2>

                <p class="subtitle">
                    Current weather conditions
                </p>

            </div>

            <div class="icon" id="weatherIcon"></div>

        </div>


        <div class="temperature">

            <strong id="temperature"></strong>

            <span>°C</span>

        </div>


        <div class="condition" id="condition"></div>


        <div class="details">

            <div class="detail">

                <small>Feels Like</small>

                <strong id="feels"></strong>

            </div>


            <div class="detail">

                <small>Humidity</small>

                <strong id="humidity"></strong>

            </div>


            <div class="detail">

                <small>Wind Speed</small>

                <strong id="wind"></strong>

            </div>

        </div>

    </div>


    <!-- ERROR -->

    <div class="error" id="error"></div>


    <div class="footer">
        Weather Explorer
    </div>

</div>


<script>

/* =========================
   AJAX + JSON
   ========================= */

function getWeather() {

    const city =
        document.getElementById("city").value.trim();

    const weather =
        document.getElementById("weather");

    const loading =
        document.getElementById("loading");

    const error =
        document.getElementById("error");


    if (city === "") {

        weather.style.display = "none";

        error.innerText =
            "Please enter a city name.";

        error.style.display = "block";

        return;
    }


    weather.style.display = "none";

    error.style.display = "none";

    loading.style.display = "block";


    /* AJAX request */

    fetch(
        "index.php?api=weather&city="
        + encodeURIComponent(city)
    )

    .then(response => response.json())

    .then(result => {

        loading.style.display = "none";


        if (result.success) {

            const data = result.data;


            document.getElementById("weatherCity")
                .innerText = data.city;

            document.getElementById("weatherIcon")
                .innerText = data.icon;

            document.getElementById("temperature")
                .innerText = data.temp;

            document.getElementById("condition")
                .innerText = data.condition;

            document.getElementById("feels")
                .innerText = data.feels + "°C";

            document.getElementById("humidity")
                .innerText = data.humidity + "%";

            document.getElementById("wind")
                .innerText = data.wind + " km/h";


            weather.style.display = "block";

        } else {

            error.innerText = result.message;

            error.style.display = "block";
        }

    })

    .catch(() => {

        loading.style.display = "none";

        error.innerText =
            "Unable to connect to the weather service.";

        error.style.display = "block";

    });
}


/* ENTER TO SEARCH */

document.getElementById("city")
.addEventListener("keydown", function(event) {

    if (event.key === "Enter") {
        getWeather();
    }

});

</script>

</body>

</html>