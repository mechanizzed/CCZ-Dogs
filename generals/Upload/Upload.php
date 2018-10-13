<?php

namespace Generals\Upload;

use Intervention\Image\Facades\Image;

class Upload
{

  public function makeResize($image, $size, $path, $watermark = null)
  {
    return $this->resize($image, $size, $path, $watermark);
  }


  public function makeResizeWithThumb($image, $size, $sizeThumb, $path, $pathThumb)
  {
    $fileName = md5(uniqid()) . '.' . $image->getClientOriginalExtension();
    return $this->resizeWithThumb($image, $size, $sizeThumb, $path, $pathThumb, $fileName);
  }


  private function resize($image, $size, $path, $watermark = null)
  {
    try {
      $imageRealPath = $image->getRealPath();
      $thumbName = md5(uniqid()) . '.' . $image->getClientOriginalExtension();
      $img = Image::make($imageRealPath);
      $img->resize(intval($size), null, function ($constraint) {
        $constraint->aspectRatio();
      });
      if ($watermark != null) {
        $img->insert('images/logo-venezia-watermark.png', 'bottom-right', 10, 10);
      }
      $img->save(public_path($path) . '/' . $thumbName);
      return $thumbName;
    } catch (Exception $e) {
      return false;
    }
  }


  private function resizeWithThumb($image, $size, $sizeThumb, $path, $pathThumb, $fileName)
  {
    try {
      $imageRealPath = $image->getRealPath();
      $thumbName = $fileName;
      $img = Image::make($imageRealPath);
      $img->resize(intval($size), null, function ($constraint) {
        $constraint->aspectRatio();
      });
      $img->insert('images/logo-venezia-watermark.png', 'bottom-right', 10, 10);
      $img->save(public_path($path) . '/' . $thumbName);

      //resize thumb
      $imgThumb = Image::make($imageRealPath);
      $imgThumb->resize(intval($sizeThumb), null, function ($constraint) {
        $constraint->aspectRatio();
      });
      $imgThumb->save(public_path($pathThumb) . '/' . $thumbName);
      return $thumbName;
    } catch (Exception $e) {
      return false;
    }
  }


}