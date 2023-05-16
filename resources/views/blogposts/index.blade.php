@foreach($posts as $post)
<h2><a href="{{ route('blog.show',$post->id) }}">{{ $post->title }}</a></h2>
@endforeach()