@extends('Homepage.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Weather Page Start -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Today's Weather -->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-4">Today's Weather</h5>
                        <div class="weather-container">
                            <img src="https://www.brookings.edu/wp-content/uploads/2016/06/kenya_farmer.jpg?resize=1500,1036" alt="Background Image" class="weather-background">
                            <div class="weather-info">
                                <p class="temp"></p>
                                <p class="summary"></p>
                                <p class="location"></p>
                                <div class="icon"></div>
                                <p class="weather-message"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Weekly Forecast -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Weekly Forecast</h5>
                        <div class="weekly-forecast"></div>
                    </div>
                </div>

                <!-- yearly Forecast -->

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Monthly Forecast</h5>
                        <canvas id="monthly-forecast-chart"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Weather Page End -->

    <!-- JavaScript for Weather Data -->
    <script>
        const apiKey = "115755479fb967da01cccef7ca283966";

        async function checkWeather() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(async (position) => {
                    const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?units=metric&lat=${position.coords.latitude}&lon=${position.coords.longitude}&appid=${apiKey}`;

                    const response = await fetch(apiUrl);
                    const data = await response.json();
                    console.log(data);

                    // Update UI with weather data
                    updateWeatherUI(data);
                });
            } else {
                console.error("Geolocation is not supported by this browser.");
            }
        }

        function updateWeatherUI(data) {
            // Update current weather
            const currentWeather = data.list[0];
            updateCurrentWeather(currentWeather);

            // Update weekly forecast
            const weeklyForecast = data.list.filter((forecast, index) => index % 8 === 0); // Select forecast for every 24 hours (every 8th data point)
            updateWeeklyForecast(weeklyForecast);
        }

        function updateCurrentWeather(data) {
            const temperature = Math.floor(data.main.temp);
            const description = data.weather[0].description;

            document.querySelector(".temp").textContent = temperature + "°C";
            document.querySelector(".summary").textContent = description;
            document.querySelector(".location").textContent = data.name + ", " + data.sys.country;
            document.querySelector(".icon").innerHTML = `<img src="icons/${data.weather[0].icon}.svg" style='height:10rem;'/>`;

            // Check if weather is good for farmers
            const weatherMessage = document.querySelector(".weather-message");
            if (isWeatherGoodForFarmers(description)) {
                weatherMessage.textContent = "Good for farmers!";
                weatherMessage.style.color = "green"; // Green color for good weather
            } else {
                weatherMessage.textContent = "Not favorable for farmers!";
                weatherMessage.style.color = "red"; // Red color for unfavorable weather
            }
        }

        function updateWeeklyForecast(data) {
            const weeklyForecastContainer = document.querySelector(".weekly-forecast");

            data.forEach((forecast) => {
                const date = new Date(forecast.dt * 1000); // Convert timestamp to Date object
                const day = date.toLocaleDateString("en-US", { weekday: "long" });
                const temperature = Math.floor(forecast.main.temp);
                const description = forecast.weather[0].description;

                const forecastElement = document.createElement("div");
                forecastElement.classList.add("weekly-forecast-item");
                forecastElement.innerHTML = `
                    <p><strong>${day}</strong></p>
                    <p>${temperature}°C</p>
                    <p>${description}</p>
                `;

                weeklyForecastContainer.appendChild(forecastElement);
            });
        }

        function isWeatherGoodForFarmers(description) {
            // You can customize this function based on your criteria for good weather
            // For example, check if the weather description contains terms like "clear" or "partly cloudy"
            return description.toLowerCase().includes("clear") || description.toLowerCase().includes("partly cloudy");
        }

        // Trigger the weather check on page load
        window.addEventListener("load", checkWeather);
    </script>



        <script>
            // Monthly Forecast
            function updateMonthlyForecast(data) {
            const monthlyData = groupDataByMonth(data);

            const months = Object.keys(monthlyData);
            const rainfallData = months.map(month => getMonthlyAverage(monthlyData[month], 'rainfall'));
            const sunlightData = months.map(month => getMonthlyAverage(monthlyData[month], 'sunlight'));

            // Chart.js configuration
            const chartConfig = {
            type: 'bar',
            data: {
            labels: months,
            datasets: [
        {
            label: 'Average Rainfall (mm)',
            backgroundColor: 'rgba(75, 192, 192, 0.5)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: rainfallData,
        },
        {
            label: 'Average Sunlight (hours)',
            backgroundColor: 'rgba(255, 206, 86, 0.5)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1,
            data: sunlightData,
        },
            ],
        },
            options: {
            scales: {
            y: {
            beginAtZero: true,
        },
        },
        },
        };

            // Create and update the chart
            const monthlyForecastChart = new Chart(document.getElementById('monthly-forecast-chart'), chartConfig);
        }

            // Helper function to group data by month
            function groupDataByMonth(data) {
            const groupedData = {};
            data.list.forEach(forecast => {
            const month = new Date(forecast.dt * 1000).toLocaleDateString('en-US', { month: 'long' });
            if (!groupedData[month]) {
            groupedData[month] = [];
        }
            groupedData[month].push(forecast);
        });
            return groupedData;
        }

            // Helper function to calculate monthly average for a specific weather attribute
            function getMonthlyAverage(data, attribute) {
            const sum = data.reduce((total, forecast) => total + forecast.main[attribute], 0);
            return sum / data.length;
        }

            // Trigger the monthly forecast update when the weather data is available
            window.addEventListener("load", function () {
            // Sample data structure for testing
            const data = {
            list: [
        { dt: 1644086400, main: { rainfall: 5, sunlight: 10 } },
        { dt: 1644162000, main: { rainfall: 8, sunlight: 8 } },
            // Add more forecast data
            ]
        };

            updateMonthlyForecast(data);

            console.log(data);
        });

    </script>


    <style>
        .card {
            border: 2px solid #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .weather-container {
            position: relative;
            overflow: hidden;
        }

        .weather-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.5; /* Adjust opacity as needed */
        }

        .weather-info {
            position: relative;
            z-index: 1;
            color: #ffffff; /* Text color for better visibility */
        }

        .weekly-forecast {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-gap: 20px;
        }

        .weekly-forecast-item {
            border: 1px solid #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
    </style>
@endsection
