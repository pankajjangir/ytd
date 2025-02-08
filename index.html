<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Thumbnail Downloader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: #f5f5f5;
        }
        .thumbnail-container {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        .thumbnail-preview {
            flex: 2;
            background-color: #000;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            padding: 10px;
        }
        .thumbnail-preview img {
            width: 100%;
            border-radius: 10px;
        }
        .download-options {
            flex: 1;
            background-color: #2a2a2a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .download-options h4 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #ff5722;
        }
        .download-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .download-item span {
            font-size: 14px;
        }
        .download-item a {
            background-color: #ff5722;
            border: none;
            padding: 5px 15px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .download-item a:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">YouTube Thumbnail Downloader</h1>
        <div class="card p-4 shadow">
            <form id="thumbnailForm" action="" method="GET">
                <div class="input-group mb-3">
                    <input type="url" id="videoLink" name="videoLink" class="form-control" placeholder="https://www.youtube.com/watch?v=example" required>
                    <button type="button" id="pasteButton" class="btn btn-secondary">Paste</button>
                    <button type="submit" class="btn btn-primary">Get Thumbnails</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('pasteButton').addEventListener('click', async () => {
            try {
                const text = await navigator.clipboard.readText();
                document.getElementById('videoLink').value = text;
            } catch (err) {
                alert('Failed to paste clipboard content.');
            }
        });

        document.getElementById('thumbnailForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const videoLink = document.getElementById('videoLink').value.trim();
            const videoId = extractVideoId(videoLink);

            if (videoId) {
                window.location.href = `${window.location.origin}${window.location.pathname}watch?v=${videoId}`;
            } else {
                alert('Invalid YouTube video link. Please try again.');
            }
        });

        function extractVideoId(url) {
            const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([\w-]{11})/;
            const match = url.match(regex);
            return match ? match[1] : null;
        }

        // Display thumbnails if redirected with video ID in the URL
        const urlParams = new URLSearchParams(window.location.search);
        const videoId = urlParams.get('v');

        if (videoId) {
            const container = document.createElement('div');
            container.className = 'container py-5';

            container.innerHTML = `
                <div class="thumbnail-container">
                    <div class="thumbnail-preview">
                        <img src="https://img.youtube.com/vi/${videoId}/maxresdefault.jpg" alt="Maximum Resolution Thumbnail">
                        <p>Press <kbd>CTRL</kbd> + <kbd>S</kbd> to download HD thumbnail</p>
                    </div>
                    <div class="download-options">
                        <h4>Download Options</h4>
                        <div class="download-item">
    <span>Maximum Quality (1920×1080)</span>
    <button class="download-btn btn btn-primary" data-id="${videoId}" data-quality="maxresdefault">Download</button>
</div>
<div class="download-item">
    <span>High Quality (1280×720)</span>
    <button class="download-btn btn btn-primary" data-id="${videoId}" data-quality="hqdefault">Download</button>
</div>
<div class="download-item">
    <span>Medium Quality (640×480)</span>
    <button class="download-btn btn btn-primary" data-id="${videoId}" data-quality="mqdefault">Download</button>
</div>

                        <div class="download-item">
                            <span>Standard Quality (480×360)</span>
                            <button class="download-btn btn btn-primary" data-id="${videoId}" data-quality="sddefault">Download</button>
                        </div>
                        <div class="download-item">
                            <span>Low Quality (320×180)</span>
                            <button class="download-btn btn btn-primary" data-id="${videoId}" data-quality="default">Download</button>
                        </div>
                        <div class="download-item">
                            <span>Lowest Quality (120×90)</span>
                            <button class="download-btn btn btn-primary" data-id="${videoId}" data-quality="default">Download</button>
                        </div>
                    </div>
                </div>
            `;

            document.body.innerHTML = '';
            document.body.appendChild(container);

            document.querySelectorAll('.download-btn').forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();
        const videoId = button.getAttribute('data-id');
        const quality = button.getAttribute('data-quality');
        const downloadUrl = `download.php?videoId=${videoId}&quality=${quality}`;

        // Redirect to the PHP script for downloading
        window.location.href = downloadUrl;
    });
});






        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
