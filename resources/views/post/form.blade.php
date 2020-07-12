<label for="title">Title</label>
<input type="text" name="title" id="title" value="{{old('title')?? $post->title?? ""}}"><p></p>
<div class="error">{{$errors->first('title')}}</div><p></p>
<label for="content">Content</label>
<input type="text" name="content" id="content" value="{{old('content')?? $post->content?? ""}}"><p></p>
<div class="error">{{$errors->first('content')}}</div><p></p>
<label for="author">Author</label>
{{--<input type="text" name="author" id="author" value="{{old('author')?? $post->author?? ""}}"><p></p>--}}
<select name="customer_id" id="customer_id">
    @foreach($customers as $customer)
        <option value="{{$customer->id}}"{{(($post->customer_id??"")==$customer->id)? "selected":""}}>{{$customer->name}}</option>
    @endforeach
</select>
<div class="error">{{$errors->first('author')}}</div><p></p>
<label for="image">Image</label>
<input type="file" name="image" id="image">
<div class="error">{{$errors->first('image')}}</div><p></p>

