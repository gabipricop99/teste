<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
            transition: background-color 0.5s ease-in-out;
        }

        .container {
            max-width: 600px;
            margin: 100px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        a {
            text-decoration: none;
            color: #0077b5;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #00568b;
        }

        /* Console Styling */
        .console-container {
            display: flex;
            justify-content: center;
        }

        .console {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: left;
            font-family: monospace;
            width: 80%;
            white-space: nowrap;
            overflow: hidden;
            border: 1px solid #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Notification</h1>
        <p>This demo has been deleted by GP because you do not have the right to resell these files.</p>
        <p>For details, contact <a href="https://t.me/georgedev/" target="_blank">georgedev</a>.</p>
    </div>

    <!-- Console Section -->
    <div class="console-container">
        <div class="console" id="console">
        </div>
    </div>

    <script>
        // JavaScript for dynamic background change
        const body = document.body;
        const colors = ['#f0f0f0', '#e0e0e0', '#d0d0d0', '#c0c0c0', '#b0b0b0'];

        let currentColorIndex = 0;

        function changeBackgroundColor() {
            body.style.backgroundColor = colors[currentColorIndex];
            currentColorIndex = (currentColorIndex + 1) % colors.length;
        }

        // Change background every 3 seconds
        setInterval(changeBackgroundColor, 3000);

        // JavaScript for typing effect
        const consoleText = "Do not try to install on another server as I will receive a notification";
        let index = 0;
        const consoleElement = document.getElementById('console');

        function typeText() {
            if (index < consoleText.length) {
                consoleElement.innerHTML += consoleText.charAt(index);
                index++;
                setTimeout(typeText, 50); // Adjust the typing speed (50 milliseconds)
            }
        }

        // Start typing when the page loads
        window.onload = typeText;
    </script>
</body>
</html>
