@extends('musics.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all My Musics</h2>
            </div>
            <div class="pull-right">
                <a class="btn" href="{{ route('musics.create') }}"> Create new music</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table music-table">
        <tr id="music-table-header">
            <th width="10%">No</th>
            <th width="20%">Song Name</th>
            <th width="20%">Artist</th>
            <th width="20%">Composer</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($musics as $music)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $music->song_name }}</td>
            <td>{{ $music->artist }}</td>
            <td>{{ $music->composer }}</td>
            <td>
                <form action="{{ route('musics.destroy',$music->id) }}" method="POST">
                    <a class="btn" href="{{ route('musics.show',$music->id) }}">Show</a>
                    <a class="btn" href="{{ route('musics.edit',$music->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $musics->links() !!}
      
@endsection