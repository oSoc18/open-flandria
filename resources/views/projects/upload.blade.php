@extends('layouts.app')

@section('content')
    <form method="POST" action="/upload" enctype="multipart/form-data" id="upload">
        @csrf
        <input type="hidden" name="amt-of-images" value="1" id="amt-of-images" />
        <div class="form-group">
            <label for="title">Title: </label>
            <input id="title" class="form-control" type="text" name="title">
        </div>

        <div class="form-group">
            <label for="location">Location: </label>
            <input id="location" class="form-control" type="text" name="location">
        </div>

        <div class="form-group">
            <label for="description">Description: </label>
            <textarea id="description" class="form-control" name="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="year">Year: </label>
            <input id="year" class="form-control" type="number" min="1900" max="2099" step="1" value="2018" name="year">
        </div>

        <div class="form-group">
            <label for="creator">Creator: </label>
            <input id="creator" class="form-control" type="text" name="creator">
        </div>

        <div class="form-group" id="images">

        </div>

        <div class="form-group">
            <label for="tags">Tags: </label>
            <input id="tags" class="form-control" type="text" name="tags" aria-described-by="tagHelp">
            <small id="tagHelp" class="form-text text-muted">Tags should be ;(semicolon) seperated.</small>
        </div>

        <input type="submit" class="btn btn-primary" value="Upload" />
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', init, false);

        var counter = 0;
        var identifier = 'image-'+counter;

        function init() {
            addImageSlot();
        }

        function addImageSlot() {
            counter++;
            identifier = `image-${counter}`;

            document.getElementById("amt-of-images").value = counter;

            container = document.createElement('div');
            container.className = "form-group image";

            fileLabel = document.createElement('label');
            fileLabel.for = identifier;
            fileLabel.innerHTML = `Image ${counter}: `;

            file = document.createElement('input');
            file.type = "file";
            file.name = identifier;
            file.id = identifier;
            file.className = "form-control";

            fileGroup = document.createElement('div');
            fileGroup.className = "form-group"
            fileGroup.appendChild(fileLabel);
            fileGroup.appendChild(file);

            settings = document.createElement('div');
            settings.className = `${identifier}-settings`;

            creditLabel = document.createElement('label');
            creditLabel.for = `${identifier}-credit`;
            creditLabel.innerHTML = `Credit image ${counter}: `;

            credit = document.createElement('input');
            credit.type = "text";
            credit.name = `${identifier}-credit`;
            credit.id = `${identifier}-credit`;
            credit.className = "form-control";

            creditGroup = document.createElement('div');
            creditGroup.className = "form-group"
            creditGroup.appendChild(creditLabel);
            creditGroup.appendChild(credit);

            copyrightLabel = document.createElement('label');
            copyrightLabel.for = `${identifier}-copyright`;
            copyrightLabel.innerHTML = `Copyright image ${counter}: `;

            copyright = document.createElement('input');
            copyright.type = "text";
            copyright.name = `${identifier}-copyright`;
            copyright.id = `${identifier}-copyright`;
            copyright.className = "form-control";

            copyrightGroup = document.createElement('div');
            copyrightGroup.className = "form-group"
            copyrightGroup.appendChild(copyrightLabel);
            copyrightGroup.appendChild(copyright);

            yearLabel = document.createElement('label');
            yearLabel.for = `${identifier}-year`;
            yearLabel.innerHTML = `Year image ${counter}: `;

            year = document.createElement('input');
            year.type = "text";
            year.name = `${identifier}-year`;
            year.id = `${identifier}-year`;
            year.className = "form-control";

            yearGroup = document.createElement('div');
            yearGroup.className = "form-group"
            yearGroup.appendChild(yearLabel);
            yearGroup.appendChild(year);

            settings.appendChild(creditGroup);
            settings.appendChild(copyrightGroup);
            settings.appendChild(yearGroup);

            container.appendChild(fileGroup);
            container.appendChild(settings);

            document.getElementById('images').appendChild(container);

            document.getElementById(identifier).addEventListener("change", function(ev) {
                console.log(ev);
                addImageSlot();
            });
        }
    </script>
@endsection
