
<input id="files" type="file" name="userfileEdit"/>
<output id="list-miniaturaEdit"></output>
<output id="list-datosEdit"></output>


<script>
    function handleFileSelect(evt) {
        evt.stopPropagation();
        evt.preventDefault();

        var files = evt.dataTransfer.files; // FileList object.
        // files is a FileList of File objects. List some properties.
        var output = [];
        for (var i = 0, f; f = files[i]; i++) {
            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function (theFile) {
                return function (e) {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML = ['Nombre: ', escape(theFile.name), ' || Tamanio: ', escape(theFile.size), ' bytes || type: ', escape(theFile.type), '<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"style="width:100%;"/><br />'].join('');
                    document.getElementById('list-miniaturaEdit').insertBefore(span, null);
                };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
        document.getElementById('list-datosEdit').innerHTML = '<ul>' + output.join('') + '</ul>';
    }

    function handleDragOver(evt) {
        evt.stopPropagation();
        evt.preventDefault();
        evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
    }

    // Setup the dnd listeners.
    var dropZone = document.getElementById('drop_zone');
    dropZone.addEventListener('dragover', handleDragOver, false);
    dropZone.addEventListener('drop', handleFileSelect, false);
</script>

<script>
    function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {

            // Only process image files.
            if (!f.type.match('image.*')) {
                continue;
            }

            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function (theFile) {
                return function (e) {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML = ['<br /><img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '" style="width:100%;"/><br />'].join('');
                    document.getElementById('list-miniaturaEdit').insertBefore(span, null);
                };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
    }

    document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
