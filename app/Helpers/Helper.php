<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper 
{
    public static function ImagePathStorage($type, $inputName, $storage, $request, $oldPhoto)
    {

        $fileName = $request->file($inputName)->getClientOriginalName();
        $pathStore = $storage::disk('public')->path('links/'.$type.'/');
        $request->image->move($pathStore, $fileName);
        // remove old photo
        // if (!empty($oldPhoto) || $oldPhoto != null){
        //     $storage::delete($pathStore.$oldPhoto);
        // }
        return $fileName;
    }

    public static function readableSize($string){
        return strtoupper($string);
    }

    private function checkLogin($user_loging)
    {
        // if (!$user_loging::check())
        // {
        //     return Redirect::back()-> withErrors("Please login/register in order to make to access this page.");
        // } 
        return null;
    }
}

// class General
// {
//     public static function readableSize($string){
//         return strtoupper($string);
//     }
// }

class Settings
{
    public static function setting($label){
        switch ($label) {
            case 'uploads_default_max_size':
                return '2048 mb';
                // break;
            default:
                return '2048 mb';
                //code to be executed
        }
    }
    
}