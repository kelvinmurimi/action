<section>
    <div>
        <?php 
       // $images = json_decode($post->blogpictures);
       //dd($images);
       //exit();
       ?>
        <h3>
            <a href="">{{ $post->title }}</a>
        </h3>
        <span>{{ $post->created_at }}</span>
        <div>
            <img src="{{ Voyager::image($post->image) }}" alt="" srcset="" width="20%" height="40%">
           
        </div>
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
       
        </div>
    </div>
</section>