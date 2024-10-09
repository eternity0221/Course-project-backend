@if($type == 'create')
    @section('create')
            <h3>Создать пост</h3>
            <div class="form-group mb-3">
                <input name="title" type="text" class="form-control" required value="{{ old('title', '') }}">
            </div>
            <div class="form-group mb-3">
                <textarea name="descr" rows="10" class="form-control" required>{{ old('descr', '') }}</textarea>
            </div>
            <div class="form-group mb-3">
                <input type="file" name="img">
            </div>
            <input type="submit" value="Создать пост" class="btn btn-outline-success mb-3">
    @endsection
    @include('components.forms.form', ['method'=>'POST', 'yield'=>'create', 'enctype'=>"multipart/form-data", 'action'=>'news.store'])
@else
    @section('update')
        <h3>Изменить пост</h3>
        <img src="/{{$post->img}}" class="h-50 w-75 mb-2">
        <div class="form-group mb-3">
            <input name="title" type="text" class="form-control" required value="{{ old('title', $post->title) }}">
        </div>
        <div class="form-group mb-3">
            <textarea name="descr" rows="10" class="form-control" required>{{ old('descr', $post->descr) }}</textarea>
        </div>
        <div class="form-group mb-3">
            <input type="file" name="img">
        </div>
        <input type="submit" value="Изменить пост" class="btn btn-outline-success mb-5">
    @endsection
    @include('components.forms.form', ['method'=>'PATCH', 'yield'=>'update', 'action'=>'news.update', 'key'=>'news', 'value'=>$post->post_id])
@endif


