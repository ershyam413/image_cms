// Controller file: application/controllers/ImageUploadController.php

class ImageUploadController extends CI_Controller {
    
    public function uploadImage() {
        // Check if a file was selected for upload
        if (!empty($_FILES['file']['name'])) {
            // Define the upload directory within the public folder
            $uploadDirectory = './public/uploads/';
            
            // Create the uploads directory if it doesn't exist
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            // Generate a unique filename for the uploaded file
            $filename = uniqid() . '_' . $_FILES['file']['name'];

            // Move the uploaded file to the uploads directory
            move_uploaded_file($_FILES['file']['tmp_name'], $uploadDirectory . $filename);

            // Return the path to the uploaded file
            echo base_url('uploads/' . $filename);
        } else {
            // No file was uploaded
            echo 'No file selected';
        }
    }
}
