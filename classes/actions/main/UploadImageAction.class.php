<?php

require_once(CLASSES_PATH . "/framework/AbstractAction.class.php");

/**
 * @author Karen Manukyan
 */
class UploadImageAction extends AbstractAction {

    public function service() {
        $file_name = $_FILES['logo_picture']['name'];
        $file_type = $_FILES['logo_picture']['type'];
        $tmp_name = $_FILES['logo_picture']['tmp_name'];
        $file_size = $_FILES['logo_picture']['size'];
        $ext = end(explode('.',$file_name));
        move_uploaded_file($tmp_name, DATA_DIR . "/" . $file_name);
        $file = DATA_DIR . "/" . $file_name;
        $this->resizeImageToGivenType($file, DATA_DIR . "/2.".$ext , 150, 150);
    }

    public function getRequestGroup() {
        return RequestGroups::$guestRequest;
    }

    private function resizeImageToGivenType($img, $newfilename, $w, $h) {

        //Check if GD extension is loaded
        if (!extension_loaded('gd') && !extension_loaded('gd2')) {
            trigger_error("GD is not loaded", E_USER_WARNING);
            return false;
        }

        //Get Image size info
        $imgInfo = getimagesize($img);
        switch ($imgInfo[2]) {
            case IMAGETYPE_GIF :
                $type = 'gif';
                $im = imagecreatefromgif($img);
                break;
            case IMAGETYPE_JPEG :
                $type = 'jpg';
                $im = imagecreatefromjpeg($img);
                break;
            case IMAGETYPE_PNG :
                $type = 'png';
                $im = imagecreatefrompng($img);
                break;
            default :
                trigger_error('Unsupported filetype!', E_USER_WARNING);
                break;
        }

        //If image dimension is smaller, do not resize
        if ($imgInfo[0] <= $w && $imgInfo[1] <= $h) {
            $nHeight = $imgInfo[1];
            $nWidth = $imgInfo[0];
        } else {
            //yeah, resize it, but keep it proportional
            if ($w / $imgInfo[0] < $h / $imgInfo[1]) {
                $nWidth = $w;
                $nHeight = $imgInfo[1] * ($w / $imgInfo[0]);
            } else {
                $nWidth = $imgInfo[0] * ($h / $imgInfo[1]);
                $nHeight = $h;
            }
        }

        $nWidth = round($nWidth);
        $nHeight = round($nHeight);

        $newImg = imagecreatetruecolor($nWidth, $nHeight);
        $backgroundColor = imagecolorallocate($newImg, 255, 255, 255);
        imagefill($newImg, 0, 0, $backgroundColor);

        imagecopyresampled($newImg, $im, 0, 0, 0, 0, $nWidth, $nHeight, $imgInfo[0], $imgInfo[1]);

        if (strtolower($type) === 'png') {
            imagepng($newImg, $newfilename);
        } else if (strtolower($type) === 'gif') {
            imagegif($newImg, $newfilename);
        } else if (strtolower($type) === 'jpg') {
            imagejpeg($newImg, $newfilename);
        } else {
            trigger_error('Failed resize image!', E_USER_WARNING);
        }
        return $newfilename;
    }

}

?>