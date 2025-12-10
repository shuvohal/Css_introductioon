
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float Layout Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Floated Image with Text Wrap -->
        <div class="content">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQGv6Qrc1d-p-Q/profile-displayphoto-scale_200_200/B56ZmQCoBKIsAY-/0/1759058238522?e=1767225600&v=beta&t=KS9ee5YJzs-_kxV-DujMLJwx-VDym_QFU62b0npdw3c" alt="Placeholder Image" class="float-left">
            <h2>Welcome to Our Website</h2>
            <p>This is a paragraph of text that will wrap around the floated image. The image is floated to the left, and the text will flow around it on the right side. You can add more content here to see how the text continues to wrap around the image.</p>
            <p>Here's more text to show how wrapping works. The floated image will cause the text to align around it, making it look cleaner and more engaging.</p>
        </div>

        <!-- Two-column Layout -->
        <div class="columns">
            <div class="left-column">
                <h3>Left Column</h3>
                <p>This is the left column. It is floated to the left, and it takes up 50% of the container width.</p>
            </div>
            <div class="right-column">
                <h3>Right Column</h3>
                <p>This is the right column. It is also floated to the left, and it occupies the remaining 50% width of the container.</p>
            </div>
        </div>

        <!-- Clearfix to prevent container collapse -->
        <div class="clear-fix"></div>

        <footer>
            <p>Footer content goes here. It appears below the floated elements and the columns.</p>
        </footer>
    </div>
</body>
</html>
