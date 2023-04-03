<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\s;

class Product extends Model
{
    use HasFactory;
   private static $info,$image,$imageNewName,$directory,$imgUrl,$update;
     public static function saveProduct($request){
         if($request->product_id){
             self::$info= Product::find($request->product_id);
         }
         else{
             self::$info =new Product();
         }

         self::$info->product_name =$request->product_name;
         self::$info->category_name =$request->category_name;
         self::$info->brand_name =$request->brand_name;
         if($request->image){
             if(file_exists(self::$info->image)){
                 unlink(self::$info->image);
             }
             self::$info->image =self::getImgUrl($request);
         }

         self::$info->description =$request->description;
         self::$info->price =$request->price;
         self::$info->save();


     }
     private static function getImgUrl($request){
         self::$image =$request->file('image');
         self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
         self::$directory='adminAsset/image-product/';
         self::$imgUrl=self::$directory.self::$imageNewName;
         self::$image->move(self::$directory,self::$imageNewName);
         return self::$imgUrl;
     }

    public static function updatestatusProduct ($id)

      {
          self::$update = Product::find($id);
          if(self::$update->status==1){
              self::$update->status=0;
          }
          else{
              self::$update->status=1;
          }
          self::$update->save();
      }




}
