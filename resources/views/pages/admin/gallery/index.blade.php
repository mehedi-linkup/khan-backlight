@extends('layouts.admin-master', ['pageName'=> 'gallery', 'title' => 'Add Gallery'])
{{-- @section('title', 'gallery') --}}
@push('admin-css')
@endpush
@section('admin-content')
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-area">
                    <h4 class="heading"><i class="fas fa-plus"></i> Add a Photo (At most 15 photos)</h4>
                    <form action="{{ route('store.gallery') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="event1" class="mb-2"> Event Name <span class="text-danger">*</span> </label>
                                <select name="event_id" class="form-control form-control-sm d-inline-block mb-2" id="event1">
                                    <option value="">Select Event</option>
                                    @foreach ($event as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <a href="{{ route('admin.event') }}" class="add-item add-item2"><i class="fas fa-plus-circle"></i></a>
                                @error('event_id') <span style="color: red">{{$message}}</span> @enderror
                            
                                <label for="title"> Image Name <span class="text-danger">*</span> </label>
                                <input type="text" name="title" class="form-control form-control-sm shadow-none @error('title') is-invalid @enderror" id="title" placeholder="Enter Image Name">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <div class="field">
                                <label for="image">Image</label>
                                <input class="form-control form-control-sm upload__inputfile" data-max_length="10" id="image" type="file" name="image[]" multiple>

                                {{-- <div class="field" align="left">
                                    <h3>Upload your images</h3>
                                    <input type="file" id="files" name="files[]" multiple />
                                </div> --}}
                            </div>
                            {{-- <div class="col-md-4 offset-md-1 mt-3">
                                <div class="form-group mt-2">
                                    <img class="form-controlo img-thumbnail" src="#" id="previewImage" style="width: 180px;height: 150px; background: #3f4a49;">
                                </div>
                            </div> --}}
                            <div class="col-md-12 mt-3">
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="clearfix mt-1">
                            <div class="float-md-left">
                                <button type="reset" class="btn btn-dark btn-sm">Reset</button>
                                <button type="submit" class="btn btn-info btn-sm">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card my-3">
            <div class="card-header">
                <i class="fas fa-list"></i>
                Gallery List
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $key=>$user)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $user->title }}</td>                                    
                                    <td><img class="border" style="height: 26px; width:35px;" src="{{ asset('uploads/gallery/'.$user->image) }}" alt=""></td>
                                    <td>
                                        <a href="{{ url('gallery/edit/'. $user->id) }}" type="submit" class="btn btn-info btn-mod-info btn-sm mr-1"><i class="fas fa-edit"></i></button>
                                        <a href="{{ url('gallery/delete/'.$user->id) }}" type="submit" class="btn btn-danger btn-mod-danger btn-sm" onclick="return confirmDel()"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Data Not Found</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@push('admin-js')
<script>
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
            
    //         reader.onload = function (e) {
    //             $('#previewImage')
    //                 .attr('src', e.target.result)
    //                 .width(180)
    //                 .height(150);
    //         };

    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }
    // document.getElementById("previewImage").src="/uploads/no.png";

    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#image").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
@endpush