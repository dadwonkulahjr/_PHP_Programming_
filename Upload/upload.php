<?php
    $error_message = '';
    if(isset($_FILES['file']['name']))
    {
        $image_name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $image_size = $_FILES['file']['size'];
        $image_type = $_FILES['file']['type'];

        $image_max_size_upload = 100000;

        $restrict_image_extentions = strtolower(substr($image_name, strpos($image_name, '.') + 1));

        if(!empty($image_name))
        {
          if($restrict_image_extentions=='jpeg'||$restrict_image_extentions=='jpg')
          {
                if($image_type=='image/jpg'||$image_type=='image/jpeg')
                {
                    if($image_max_size_upload<=$image_size)
                    {
                        $generate_image_guid = rand(10000,99999).md5($image_name).rand(99999,10000).'_'.$image_name;
                        $destination_to_upload = 'Directory_to_upload/';
                        if(@move_uploaded_file($tmp_name, $destination_to_upload.$generate_image_guid))
                        {
                            $error_message .= '<span style="color:green;font-family:sans-serif;font-size:20px;">
                                The file '.$generate_image_guid.' was uploaded successfully!
                            </span>';
                        }
                        else{
                            $error_message .= '<span style="color:red;font-family:sans-serif;font-size:20px;">Error occur on the server why uploading the file!</span>';
                        }
                        //before than generate the image guid using the rand() function...
                       //Ok go ahead and upload the file...
                    }
                    else{
                        $error_message.= '<span style="color:red;font-family:sans-serif;font-size:20px;">
                            The max file size must be less then 2mb.
                        </span>';
                    }
                }
                else{
                    $error_message.= '<span style="color:red;font-family:sans-serif;font-size:20px;">Only image with the type image/jpg or image/jpeg are allowed to be uploaded.</span>';
                }
          }
          else{
            $error_message .= '<span style="color:red;font-family:sans-serif;font-size:20px;">
               Only image with jpg/jpeg extentions are allowed to be uploaded.
            </span>';
          }
           
            // $error_message .= '<span style="color:green;font-family:sans-serif;font-size:20px;">Ok, you good to go!</span>';
        }
        else
        {
            $error_message .= '<span style="color:red;font-family:sans-serif;font-size:20px;">Choose a file to upload!</span>';
        }
    }


?>
<style>
    table, tr, td{
        border:1px solid #000;
    }
</style>
<div>
    Upload a file on the server!
</div>
<hr/>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <table>
        <thead>

        </thead>
        <tbody>
                <tr>
                    <td><b>Image:</b></td>
                    <td>
                        <input type="file" name="file">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="upload"/>
                    </td>
                    <td>
                        <?php echo $error_message; ?>
                    </td>
                </tr>
        </tbody>
    </table>
</form>
