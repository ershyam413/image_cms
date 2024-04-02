<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image cms</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar {
            padding: 10px 0;
        }
        .dropdown-menu {
            padding: 10px;
        }
        .card {
            display: none;
        }
        .image-upload-container {
            display: none;
            margin-bottom: 20px;
        }
        .image-upload {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo_image</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="/logout" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="input-group">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Please select the Project
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#" onclick="updateInput('Citiplaza')">Citiplaza</a></li>
                        <li><a class="dropdown-item" href="#" onclick="updateInput('Glow Networks')">Glow Networks</a></li>
                        <li><a class="dropdown-item" href="#" onclick="updateInput('Other')">Other </a></li>
                    </ul>
                </div>
                <input type="text" class="form-control" id="selectedValue" placeholder="Selected Value" readonly>
            </div>
        </div>
    </div>
    <div class="image-upload-container" id="image1UploadContainer">
        <label for="image1Upload">Image1:</label>
        <input type="file" class="image-upload" id="image1Upload">
        <button class="btn btn-primary" onclick="uploadImage('image1Upload')">Upload</button>
    </div>
    <div class="image-upload-container" id="image2UploadContainer">
        <label for="image2Upload">Image2:</label>
        <input type="file" class="image-upload" id="image2Upload">
        <button class="btn btn-primary" onclick="uploadImage('image2Upload')">Upload</button>
    </div>
    <div class="image-upload-container" id="image3UploadContainer">
        <label for="image3Upload">Image3:</label>
        <input type="file" class="image-upload" id="image3Upload">
        <button class="btn btn-primary" onclick="uploadImage('image3Upload')">Upload</button>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        <div class="col">
            <div class="card" id="image1">
                <img src="https://wallpapers.com/images/featured/link-pictures-16mi3e7v5hxno9c4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Image1</h5>
                   <p class="card-text">This is from glow Networks section</p>
                </div>
            </div>
            <div class="card" id="image2">
                <img src="https://wallpapers.com/images/featured/link-pictures-16mi3e7v5hxno9c4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Image2</h5>
                 <p class="card-text">This is from Other Citiplaza option</p>
                </div>
            </div>
            <div class="card" id="image3">
                <img src="https://wallpapers.com/images/featured/link-pictures-16mi3e7v5hxno9c4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Image3</h5>
                    <p class="card-text">This is from Other section</p>
                </div>
            </div>
            <div id="noSelectionMessage" class="alert alert-info">
                Please select the project option for data.
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
    function updateInput(value) {
        document.getElementById('selectedValue').value = value;
        document.getElementById('image1').style.display = value === 'Glow Networks' ? 'block' : 'none';
        document.getElementById('image2').style.display = value === 'Citiplaza' ? 'block' : 'none';
        document.getElementById('image3').style.display = value === 'Other' ? 'block' : 'none';
        document.getElementById('noSelectionMessage').style.display = !value ? 'block' : 'none';
        document.getElementById('image1UploadContainer').style.display = value === 'Glow Networks' ? 'block' : 'none';
        document.getElementById('image2UploadContainer').style.display = value === 'Citiplaza' ? 'block' : 'none';
        document.getElementById('image3UploadContainer').style.display = value === 'Other' ? 'block' : 'none';
    }

    function uploadImage(inputId) {
        const fileInput = document.getElementById(inputId);
        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('file', file);

        fetch('/ImageUpload', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                console.log('File uploaded successfully');
				fileInput.value = '';
            } else {
                console.error('Failed to upload file');
            }
        })
        .catch(error => {
            console.error('Error uploading file:', error);
        });
    }
</script>
</html>
