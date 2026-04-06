// Function to fetch and update the USD to LKR exchange rate
async function updateCurrency() {
    try {
        // Fetching live data from a free, open API
        const response = await fetch('https://open.er-api.com/v6/latest/USD');
        const data = await response.json();
        
        // Target the specific LKR rate from the JSON response
        const lkrRate = data.rates.LKR;
        
        // Target the span ID in your HTML and update its text
        // We use toFixed(2) to ensure it looks like standard currency (e.g., 302.50)
        document.getElementById('lkr-rate').innerText = lkrRate.toFixed(2);
        
    } catch (error) {
        // Fallback in case the user has no internet or the API fails
        console.error("Error fetching currency data:", error);
        document.getElementById('lkr-rate').innerText = "Check Local";
    }
}

// Wait for the HTML structure to fully load before running the function
document.addEventListener('DOMContentLoaded', updateCurrency);


// Function to fetch Colombo Weather
async function updateWeather() {
    try {
        // Coordinates for Colombo, Sri Lanka
        const lat = 6.9271;
        const lon = 79.8612;
        const response = await fetch(`https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current_weather=true`);
        const data = await response.json();
        
        const temp = data.current_weather.temperature;
        const code = data.current_weather.weathercode;

        // Simple mapping for weather icons (optional)
        let icon = "☀️";
        if (code > 0) icon = "⛅";
        if (code > 50) icon = "🌧️";

        document.getElementById('weather-temp').innerText = `${temp}°C ${icon}`;
    } catch (error) {
        console.error("Weather error:", error);
        document.getElementById('weather-temp').innerText = "Sunny ☀️";
    }
}

// Add this inside your existing DOMContentLoaded listener
document.addEventListener('DOMContentLoaded', () => {
    updateCurrency();
    updateWeather(); 
});