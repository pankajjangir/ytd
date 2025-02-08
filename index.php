<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Thumbnail Downloader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">YouTube Thumbnail Downloader</h1>
        <div class="card p-4 shadow">
            <form id="thumbnailForm" action="" method="GET">
                <div class="mb-3">
                    <label for="videoLink" class="form-label">Enter YouTube Video Link</label>
                    <input type="url" id="videoLink" name="videoLink" class="form-control" placeholder="https://www.youtube.com/watch?v=example" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Get Thumbnails</button>
            </form>
        </div>
    </div>

    <script>
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
            const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w-]{11})/;
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
                <h3 class="text-center mb-3">Download Thumbnails for Video ID: ${videoId}</h3>
                <div class="row g-3">
                    <div class="col-md-4 text-center">
                        <img src="https://img.youtube.com/vi/${videoId}/maxresdefault.jpg" alt="Maximum Resolution Thumbnail" class="img-fluid mb-2">
                        <a href="https://img.youtube.com/vi/${videoId}/maxresdefault.jpg" target="_blank" class="btn btn-success w-100">Download Maximum Resolution</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://img.youtube.com/vi/${videoId}/sddefault.jpg" alt="Standard Definition Thumbnail" class="img-fluid mb-2">
                        <a href="https://img.youtube.com/vi/${videoId}/sddefault.jpg" target="_blank" class="btn btn-success w-100">Download Standard Definition</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://img.youtube.com/vi/${videoId}/hqdefault.jpg" alt="High Quality Thumbnail" class="img-fluid mb-2">
                        <a href="https://img.youtube.com/vi/${videoId}/hqdefault.jpg" target="_blank" class="btn btn-success w-100">Download High Quality</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://img.youtube.com/vi/${videoId}/mqdefault.jpg" alt="Medium Quality Thumbnail" class="img-fluid mb-2">
                        <a href="https://img.youtube.com/vi/${videoId}/mqdefault.jpg" target="_blank" class="btn btn-success w-100">Download Medium Quality</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://img.youtube.com/vi/${videoId}/default.jpg" alt="Default Thumbnail" class="img-fluid mb-2">
                        <a href="https://img.youtube.com/vi/${videoId}/default.jpg" target="_blank" class="btn btn-success w-100">Download Default Thumbnail</a>
                    </div>
                </div>
            `;

            document.body.innerHTML = '';
            document.body.appendChild(container);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
