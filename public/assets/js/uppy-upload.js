document.addEventListener("DOMContentLoaded", function () {
    var uploadArea = document.getElementById("drag-drop-area");
    var uploadUrl = uploadArea.getAttribute("data-upload-url");

    const uppy = new Uppy.Uppy({
        restrictions: { maxFileSize: 100000000, maxNumberOfFiles: 1, allowedFileTypes: ['.pdf'] }
    })
    .use(Uppy.Dashboard, { inline: true, target: '#drag-drop-area' })
    .use(Uppy.XHRUpload, { endpoint: uploadUrl, fieldName: 'file' });

    uppy.on('upload-progress', (file, progress) => {
        document.getElementById('upload-progress').innerText = `Uploading: ${Math.round(progress.bytesUploaded / progress.bytesTotal * 100)}%`;
    });

    uppy.on('complete', (result) => {
        window.location.reload();
    });
});
