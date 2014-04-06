@section('error-explanation')
The following errors prevented the playlist from being updated
@stop

@section('content')
  <div id = "mt-upload-inner">
    <div class = "mt-block-title">
      Edit Playlist
    </div>
    <div class = "mt-form-box">
      @include('partials.error-messages', array('error_messages' => $error_messages))
      {{ Form::open(array('route' => array('update_playlist', $playlist->getID()))) }}
        <label for="title">Title: </label> {{ Form::text('title', $playlist->title) }}<br>
        <label for="description">Description: </label>{{ Form::text('description', $playlist->description) }}<br>
        <input type = "submit" class = "mt-form-submit" value = "Update">
      {{ Form::close() }}
    <div>
  </div>
@stop