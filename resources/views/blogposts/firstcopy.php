//blog show with multiple images

<div>
            
            <?php 
             $images = json_decode($post->blogpictures);
              // dd($images);
              ?>
              @foreach ($images as $image=>$blogpost)
              <img src="{{ Voyager::image($image=$blogpost) }}" alt="" srcset="" width="20%" height="40%">
              @endforeach
            <div>
            
     </div>
     //end 
     